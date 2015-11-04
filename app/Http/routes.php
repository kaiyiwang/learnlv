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
    // return view('welcome');
    // return view("Hello laravel !");   // 模板
    // return "Hello laravel !";
    
   $items = array(2,4,'kaiyi', 'github');
   return view('home.index')->with('items', $items);
});

Route::get('about', function()
{
	// return View::make('home.index');
	return view('home.index');

});

