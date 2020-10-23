<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Crypt;
use DateTime;
use DateTimeZone;

use App\Blog_model as blog_m;
use App\Comment_model as comm_m;

class Blog extends Controller
{

    public function __construct()
    {
        if(session('admin_id') == ''){
            return redirect('/');
        }
    }
    
    public function add_blog(Request $request){
        $blog_title = $request->blog_title;
        $blog_desc = $request->blog_desc;

        $newImageName = '';
        if ($request->hasFile('blog_img')) {
            $newImageName = 'blog_'.time().'-'.str_random(10).'.'.$request->blog_img->getClientOriginalExtension();
            $request->blog_img->storeAs('image/',$newImageName);

        }
        
        $data = ['blog_title' => $blog_title, 'blog_description' => $blog_desc, 'blog_image' => $newImageName];
        $insertId = blog_m::create($data);
        if($insertId){
            $request->session()->flash('success', 'Blog added Successfully.');
            echo 0;
        }
        else{
            echo 1;
        }
    }

    public function view_blog(Request $request){

        $get_blog = blog_m::where(['is_deleted' => 0])->orderBy('blog_id', 'DESC')->get();
        
        $output = '';
        if(count($get_blog) > 0){
            foreach ($get_blog as $value) {
                $date = new DateTime($value->created_at);
                $date->setTimezone(new DateTimeZone(session('timezone')));
                $blog_date= $date->format(env('date_formate'));
                
                $default_image = asset("public/storage/default.png");
                $output .= '
                    <tr id="tr_'. $value->blog_id .'">
                        <td>
                            <center> <img src="' . asset( "public/storage/image/" . $value->blog_image ) . '" onerror="' . $default_image . '" style="width:108px;height:154px;object-fit:cover;" ></center>
                        </td>
                        <td>'. $value->blog_title .'</td>
                        <td>'.$blog_date.'</td>
                        <td style="width:100px">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    Action<span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a style="padding-left:20px;" href="' . url("/admin/view_blog_detail/" . $value->blog_id) .'">View</a>
                                    </li>
                                    <li>
                                        <a style="padding-left:20px;" href="javascript:void(0);" onclick="edit_modal(\''. $value->blog_id .'\')">Edit</a>
                                    </li>
                                    <li>
                                        <a style="padding-left:20px;" href="javascript:void(0);" onclick="get_blog_id('. $value->blog_id .')">Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                ';
            }
        }else{
            $output = '
                <tr>
                    <td colspan="4" > No Records Found </td>
                </tr>
            ';
        }

        $data=[];
        $data['blog'] = $output;
        $data['total'] = count($get_blog);
        echo json_encode($data);
    }

    public function delete_blog(Request $request){
        $id = $request->blog_id;

        $get_blog= blog_m::where(['blog_id' => $id, 'is_deleted' => 0])->first();
        if(!is_null($get_blog)){
            $delete_blog = blog_m::where(['blog_id' => $id, 'is_deleted' => 0])->delete();

            if($delete_blog){
                
                if($get_blog->blog_image != ""){
                    $path = 'public/storage/image/';
                    $image_name = $path . $get_blog->blog_image;
                    if (file_exists($image_name)) {
                       @unlink($image_name);
                    }
                }

                $request->session()->flash('success', 'Blog deleted successfully.');
                echo 0;
            }
            else{
                $request->session()->flash('danger', "Blog can't delete.");
                echo 1;
            }
        }else{
            $request->session()->flash('danger', 'Oops! Something wents wrong.');
            echo 2;
        }
    }
    
    public function get_blog_detail($id){
        $get_blog = blog_m::where(['blog_id'=>$id,'is_deleted'=>0])->first();
        echo json_encode($get_blog);
    }

    public function update_blog(Request $request){
        $id = $request->blog_id;
        $blog_title = $request->blog_title;
        $blog_desc = $request->blog_desc;

        $get_blog = blog_m::where(['blog_id' => $id, 'is_deleted' => 0])->first();
        if(!is_null($get_blog)){

            $data = ['blog_title' => $blog_title, 'blog_description' => $blog_desc];            

            $newImageName = '';
            if ($request->hasFile('blog_img_edit')) {

                if($get_blog->blog_image != ""){
                    $path = 'public/storage/image/';
                    $image_name = $path . $get_blog->blog_image;
                    if (file_exists($image_name)) {
                       @unlink($image_name);
                    }
                }

                $newImageName = 'blog_'.time().'-'.str_random(10).'.'.$request->blog_img_edit->getClientOriginalExtension();
                $request->blog_img_edit->storeAs('image/',$newImageName);
                $data['blog_image'] = $newImageName;
            }

            $update = blog_m::where(['blog_id' => $id, 'is_deleted' => 0])->update($data);
            if($update){
                $request->session()->flash('success', 'Blog updated Successfully.');
                echo 0;    
            }else{
                echo 1;
            }
        }else{
            echo 1;
        }
    }

    public function view_blog_detail($blog_id){
        $get_blog = blog_m::where('blog_id',$blog_id)->first();
        
        $blog = [];
        if(!is_null($get_blog)){
            $blog = $get_blog;
        }

        $comments = comm_m::where(['blog_id' => $blog_id, 'is_deleted' => 0])->orderBy('created_at','DESC')->get();

        return view('admin.blog_detail_view',['blog' => json_encode($blog),'comments' => json_encode($comments), 'menu_name' => 'blog']);
    }

    public function delete_comment(Request $request){
        $comment_id = $request->comment_id;

        $delete = comm_m::where(['comment_id' => $comment_id, 'is_deleted' => 0])->update(['is_deleted' => 1]);
        echo 0;
    }

    function generateRandomString($length = 7) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
