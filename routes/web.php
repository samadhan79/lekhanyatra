<?php
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/demo','DemoController@index');

// Route::get('/', function () {
// 	return view('web.index');
// });


Route::get('/','BlogController@index');
Route::get('blog','BlogController@get_blog');
Route::get('details/{id}','BlogController@blog_detail');
Route::get('/about','AboutController@index');
Route::get('/contact','ContactController@index');
Route::get('/photos','PhotoController@index');
Route::post('/addcomment','BlogController@add_coment')->name('addcoment');




// Route::post('/get_blogs','Blog@get_blogs');
// Route::get('/comment/{id}','Blog@comment');
// Route::post('/add_comment','Blog@add_comment');
// Route::post('/list_comment','Blog@list_comment');
// Route::post('/visitor_add','Blog@visitor_add');



Route::prefix('admin')->group(function () {
	Route::get('/', function () {
		return view('admin.login');
	});

	Route::get('/forgot_password', function () {
		return view('admin.forgot_password_view');
	});

	Route::post('/forgot_password','admin\Login@forgot_password');

	Route::post('/login_process','admin\Login@login_process');

	Route::middleware(['disablepreventback'])->group(function () {
		
		Route::get('/welcome','admin\Login@index');

		Route::get('/change_password', function () {
			return view('admin.change_password_view',['menu_name' => '']);
		});

		Route::post('/change_password','admin\Login@change_password');

		Route::get('/logout','admin\Login@logout');

		//Blog

		Route::get('/blog', function () {
			return view('admin.blog_view',['menu_name' => 'blog']);
		});

		Route::post('/add_blog','admin\Blog@add_blog');

		Route::post('/view_blog','admin\Blog@view_blog');

		Route::post('/delete_blog','admin\Blog@delete_blog');

		Route::get('edit_blog/{id}', 'admin\Blog@get_blog_detail');

		Route::post('edit_blog', 'admin\Blog@update_blog');

		Route::get('/view_blog_detail/{id}', 'admin\Blog@view_blog_detail');

		Route::post('/delete_comment', 'admin\Blog@delete_comment');
	});
});