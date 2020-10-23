<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Crypt;
use DateTime;
use DateTimeZone;
use Carbon\Carbon;

use App\Blog_model as blog_m;
use App\Comment_model as comm_m;
use App\Admin_model as admin_m;

class Blog extends Controller
{

    public function __construct()
    {
    }

    public function comment($id){
        $blog = [];

        $get_blog = blog_m::where(['blog_id' => $id, 'is_deleted' => 0])->first();
        if(!is_null($get_blog)){
            $blog = $get_blog;
        }

        $year = date('Y');
        $get_last_year = blog_m::where(['is_deleted' => 0])->orderBy('created_at','ASC')->first();
        if(!is_null($get_last_year)){
            $date = new Carbon( $get_last_year->created_at );   
            $year = $date->year;
        }

        $years = range(Carbon::now()->year, $year);

        return view('web.comment',['blog' => $get_blog, 'years' => $years]);
    }

    public function add_comment(Request $request){
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $comment = $request->comment;
        $blog_id = $request->blog_id;
        
        $data = ['blog_id' => $blog_id, 'user_name' => $name, 'user_phone' => $phone, 'user_email' => $email, 'comment_description' => $comment];
        $insertId = comm_m::create($data);
        echo 0;
    }

    public function list_comment(Request $request){
        $blog_id = $request->blog_id;
        $timezone = $request->timezone;

        $data = [];
        $output = '';
        $get_comment = comm_m::where([ 'blog_id' => $blog_id, 'is_deleted' => 0])->orderBy('created_at','DESC')->get();
        if(count($get_comment) > 0){
            foreach ($get_comment as $value) {

                $date = new DateTime($value->created_at);
                $date->setTimezone(new DateTimeZone($timezone));
                $com_date = $date->format(env('date_formate'));

                $output .= '<hr>
                            <div>
                                <span style="font-size: 15px;font-weight: 600;">' . $value->user_name . ' says:</span><br>
                                <span style="color: #97973d;font-size: 11px;font-weight: bold;">' . $com_date . '</span><br>
                                <div style="font-size: 13px;padding-left: 30px;white-space: pre-line;padding-top: 7px;">' . $value->comment_description . '</div>
                            </div>';
            }
        }else{
            // $output .= '<div> No any comment on these Blog.. </div>';
        }

        $data['result'] = $output;
        // $data['total_comment'] = count($get_comment);
        $data['total_comment'] = $this->thousandsCurrencyFormat(count($get_comment));

        echo json_encode($data);
    }

    function thousandsCurrencyFormat($num) {

        if($num>1000) {

            $x = round($num);
            $x_number_format = number_format($x);
            $x_array = explode(',', $x_number_format);
            $x_parts = array('k', 'm', 'b', 't');
            $x_count_parts = count($x_array) - 1;
            $x_display = $x;
            $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
            $x_display .= $x_parts[$x_count_parts - 1];

            return $x_display;

        }
        return $num;
    }

    public function get_blogs(Request $request){    

        $search_year = $request->search_year;
        $search_month = $request->search_month;

        $year = date('Y');
        $year_diff = 0;
        $get_last_year = blog_m::where(['is_deleted' => 0])->orderBy('created_at','ASC')->first();
        if(!is_null($get_last_year)){
            $date = new Carbon( $get_last_year->created_at );   
            $year = $date->year;
        }
        //print_r($get_last_year);die; 
        //echo $search_year."===".$search_month;die;
        if($search_year != '' && $search_month != ''){
            $month = $this->get_month($search_month);
            $get_blog = blog_m::where(['is_deleted' => 0])->whereYear('created_at', '=', $search_year)->whereMonth('created_at', '=', $month)->orderBy('created_at', 'DESC')->get();
        }else{
            //------------------------Below comment query is give result current default year post--------------------------//
            //$get_blog = blog_m::where(['is_deleted' => 0])->whereYear('created_at', '=', Carbon::now()->year)->orderBy('created_at', 'DESC')->get();

            //-----------below query give all the post----------------//
            $get_blog = blog_m::where(['is_deleted' => 0])->orderBy('created_at', 'DESC')->get();
        }
        
        $years = range(Carbon::now()->year, $year);
        $blog_data = [];
        if(count($get_blog) > 0){
            foreach ($get_blog as $key => $value) {
                $total_comment = comm_m::where(['blog_id' => $value->blog_id, 'is_deleted' => 0])->count();
                $value->total_comment = $this->thousandsCurrencyFormat($total_comment);
                $blog_data[] = $value;
            }
        }
        
        $data=[];
        $data['blog'] = $blog_data;
        $data['years'] = $years;

        echo json_encode($data);
    }

    public function visitor_add(Request $request){
        $get_visitor = admin_m::first();
        $update_visitor = admin_m::where(['admin_id' => 1])->update(['website_visitor_count' => $get_visitor->website_visitor_count + 1]);
        echo 0;
    }

    function yearsDifference($endDate, $beginDate)
    {
       $date_parts1=explode("-", $beginDate);
       $date_parts2=explode("-", $endDate);
       return $date_parts2[0] - $date_parts1[0];
    }

    function get_month($month)
    {
        if($month == 'January'){
            return 1;
        }else if($month == 'February'){
            return 2;
        }else if($month == 'March'){
            return 3;
        }else if($month == 'April'){
            return 4;
        }else if($month == 'May'){
            return 5;
        }else if($month == 'June'){
            return 6;
        }else if($month == 'July'){
            return 7;
        }else if($month == 'August'){
            return 8;
        }else if($month == 'September'){
            return 9;
        }else if($month == 'October'){
            return 10;
        }else if($month == 'November'){
            return 11;
        }else{
            return 12;
        }
    }
}
