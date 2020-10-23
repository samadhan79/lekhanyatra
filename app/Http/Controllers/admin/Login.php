<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Crypt;
use Mail;
use Session;
use App\Admin_model as admin_m;
use App\Blog_model as blog_m;

use Illuminate\Contracts\Encryption\DecryptException;

class Login extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request){

        $data = [];
        $data['blog'] = blog_m::where(['is_deleted' => 0])->count();
        $get_admin = admin_m::first();
        $data['visitor'] = $get_admin->website_visitor_count;
        
        return view('admin.dashboard_view',['menu_name' => 'welcome','total' => json_encode($data)]);
    }

    public function login_process(Request $request){

        $username = $request->username;
        $password = $request->password;

        $get_admin = admin_m::where('admin_email',$username)->first();

        if(!is_null($get_admin)){

            if($password != Crypt::decrypt($get_admin->admin_password)){

              echo 3;
          }else{
            $timezone = 'Asia/Kolkata';
            if ($request->timezone != '' && $request->timezone != 'Asia/Culcatta' ) {
                $timezone = $request->timezone;
            }

            session(['admin_id' => $get_admin->admin_id, 'timezone' => $timezone]);
            echo 0;
        }
    }else{
        echo 2;
    }
}

public function change_password(Request $request){
    if(session('admin_id') == ''){
        return redirect('/admin/');
    }else{
        $old_password = $request->old_password;
        $new_password = $request->new_password;

        $admin_id = session('admin_id');
        $get_admin = admin_m::where('admin_id',$admin_id)->first();
        if(!is_null($get_admin)){
            if($old_password == Crypt::decrypt($get_admin->admin_password)){
                $data = ['admin_password' => Crypt::encrypt($new_password)];
                admin_m::where('admin_id',$admin_id)->update($data);
                echo 0;
            }else{
                echo 3;
            }
        }else{
            echo 1;
        }
    }
}

public function forgot_password(Request $request){
    $email = $request->email;
    $get_email = admin_m::where('admin_email',$email)->first();
    if(!is_null($get_email)){
        $data = array('email' => $email, 'name'=> $get_email->admin_email,'password' => Crypt::decrypt($get_email->admin_password));
        $mail = Mail::send('admin.mail', $data, function($message) use($email){
           $message->to($email,'admin')->subject
           ('Forgot Password');
           $message->from('dhvaghasiya.weapplinse@gmail.com','Admin');
       });
        echo "1";
    }else{
        echo "4";
    }
}

public function show_admin_password(Request $request){

 $get_admin = admin_m::where(['admin_id' => 1])->first();
 if(!is_null($get_admin)){
     $new_password = "admin1";
     $data = ['admin_password' => Crypt::encrypt($new_password)];
     admin_m::where('admin_id',1)->update($data);
     echo 0;
           //print_r($get_admin);
 }
}

public function logout(Request $request)
{
    $request->session()->forget('admin_id');
    Session::flush();
    return redirect('/admin');
}
}
