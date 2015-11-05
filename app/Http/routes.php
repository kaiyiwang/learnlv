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
    $res = DB::select('select * from posts');
    dd($res);

});

Route::get('about', function()
{
	// return View::make('home.index');
	return view('home.index');

});

