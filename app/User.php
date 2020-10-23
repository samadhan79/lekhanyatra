<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    protected $table      = 'tbl_user';
    protected $primaryKey = 'user_id';    
    protected $guarded    = [];

    public function getCreatedAtHumanAttribute() {
        return $this->created_at->format('Y-m-d');
    }
    
    /**
     * return user by id
     */
    public static function getUserById($id) {

        $data = \DB::table('user_master AS u')
                    ->select('u.*', 'id', 'mm_yy', 'cvv', 'card_number', 'license_front_image', 'license_back_image')
                    ->leftJoin('user_more_information AS umi', 'u.user_id', '=', 'umi.user_id')
                    ->where('u.is_deleted', 0)
                    ->where('u.user_id', $id)
                    ->first();

        // if ($data) {            
        //     $data->user_image_path = asset('public/images/default.png');
        //     if ($data->profilepic != '')
        //         $data->user_image_path = asset('public/storage/avatars/'.$data->profilepic);
                             
        // }
        return $data;
    }

    public static function sendOTP($number, $otp, $country_code) {
        $key    = trim(env('SINCH_APP_KEY'));
        $secret = trim(env('SINCH_SECRET_KEY'));
        
        $user = "application\\" . $key . ":" . $secret;
        $message = array("from" => "BOONMI","message" => 'Your four digit verification code is: '. $otp);
        $data = json_encode($message);
        
        $ch = curl_init('https://messagingapi.sinch.com/v1/sms/+' . $country_code.$number);
        
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_USERPWD, $user);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $result = curl_exec($ch);
        // print_r($result);die;
        if (curl_errno($ch)) {            
            curl_close($ch);
            return FALSE;
        } else {
            curl_close($ch);
            $rs = json_decode($result);
            // echo '<pre>';print_r($result); die;
            if (isset($rs->messageId)) {
                return TRUE;
            } else {
                return FALSE;                
            }
        }
    }

    /**
     * For Android push 
     */
    public static function sendPushToAndroid($registrationIDs, $message_array) {

        $apiKey = env('ANDROID_PUSH_KEY');

        // set the url here
        $url = 'https://fcm.googleapis.com/fcm/send';

        // Set POST variables
        $fields = array(
            'registration_ids' => $registrationIDs,
            'data' => $message_array,
        );

        $headers = array(
            'Authorization: key=' . $apiKey,
            'Content-Type: application/json'
        );

        // Open connection
        $ch = curl_init();

        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        // Execute post
        $result = curl_exec($ch);

        // Close connection
        curl_close($ch);

        //echo '<pre>'; print_r($result); die;
        $response = json_decode($result);
        if ($response->success == 1) {
            return true;
        } else {
            return false;
        }        
    }

    // For I-Phone push 
    public static function ios_send_push_notification($register_id, $message, $push_data = array()) {

        // $badge  = $push_data['notification_count'];
        $badge  = 0;

        $return_array = array();
        $sandbox      = env('IOS_PUSH_SANDBOX');
        $return_array['success'] = 0;

        // Put your private key's passphrase here:
        $passphrase = 'pushchat';

        // Put your device token here (without spaces):
        $deviceToken = $register_id;

        // Put your alert message here:
        $message = $message;

        if ($sandbox) {
            $pem_file = './public/pem/boonmi_push_dev.pem';
        } else {
            $pem_file = './public/pem/boonmi_push_production.pem';
        }        

        $ctx = stream_context_create();
        stream_context_set_option($ctx, 'ssl', 'local_cert', $pem_file);
        //stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);

        // Open a connection to the APNS server
        if ($sandbox)
            $gateway_url = 'ssl://gateway.sandbox.push.apple.com:2195';
        else
            $gateway_url = 'ssl://gateway.push.apple.com:2195';

        $fp = stream_socket_client(
                $gateway_url, $err, $errstr, 60, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT, $ctx);

        if (!$fp) {
            $return_array['message'] = "Failed to connect: $err $errstr" . PHP_EOL;
        }

        // Create the payload body
        $body['aps'] = array(
            'alert' => $message,
            'sound' => 'default',
            'badge' => $badge,
            'data' => $push_data,
            'content-available' => 1
        );
        
        // Encode the payload as JSON
        $payload = json_encode($body);

        // Build the binary notification
        $msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;

        // Send it to the server
        $result = fwrite($fp, $msg, strlen($msg));

        // Close the connection to the server
        fclose($fp);
        
        //print_r($result); die;
        
        if (!$result) {
            return 0;
        } else {
            return 1;
        }
    }

}

