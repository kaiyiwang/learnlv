<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

 class HomeController extends Controller
{
    
    public function index(){
    	return view('home.index');
    }
    
    // 获取输入的数据
    public function store(){
    	$url = Input::get('url');

    	return $url;
    }
}
