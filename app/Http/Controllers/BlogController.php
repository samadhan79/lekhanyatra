<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog_model as blog_m;
use App\Comment_model as comm_m;

class BlogController extends Controller
{
	public function index()
	{
		return view('web.index');
	}
	function get_blog(){

		$get_blog = blog_m::where(['is_deleted' => 0])->orderBy('blog_id', 'DESC')->get();
		$path = public_path('frontend\images');
		$data  = array('path'=>$path,'data'=>$get_blog);
		echo json_encode($data);
		
	}

	function blog_detail($id){

		$blog =  blog_m::where('blog_id',$id)->first();

		return view('web.blog_detail',compact('blog'));
	}
	function add_coment(Request $req){
		$blog_id = $req->blog_id;
		$name = $req->name;
		$phone = $req->email;
		$email = $req->phone;
		$comment = $req->comment;

		$data = ['blog_id' => $blog_id, 'user_name' => $name, 'user_phone' => $phone, 'user_email' => $email, 'comment_description' => $comment];
		$insertId = comm_m::create($data);
		
		return back()->with('success','Comment created successfully!');

	}
}
