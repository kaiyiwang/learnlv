<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //  return view('welcome');
    // return view("Hello laravel !");   // 模板
    // return "Hello laravel !";
    
    // $res = array(2,4,'kaiyi', 'github');
    // return view('home.index')->with('items', $items);
   
    // 数据库查询
    // $res = DB::select('select * from posts');
    // $res = DB::table('posts')->insert([
    //       'title' => '标题', 'body' => "App\Pro接受一个 URI 和 一个 闭包(Closure) 参数："]);
    // $res = DB::select('select * from posts');	
   
    // $res = DB::table('posts')->where('id', 2)->first(); 
    // $res = DB::connection()->enableQueryLog();
  

    // 表模型获取数据
    // $res = App\Post::all()->tojson();
    //  $res = App\Comment::all()->toarray();

    // 表联合查询
    // $res = App\Post::find(1)->comment->toarray();
    
     Route::get('post', 'PostController@show_post');
     dd($res);

});

Route::get('about', function()
{
	// return View::make('home.index');
	return view('home.index');

});

 Route::get('post', 'PostController@show_post');

