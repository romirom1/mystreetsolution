<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class testController extends Controller
{
    public function _1(){
    	return view('beranda');
    }
    public function _2(){
    	return view('kontak');
    }
    public function _3(){
    	return view('login');
    }
    public function _4(){
    	return view('member');
    }
    public function _5(){
    	return view('register');
    }
    public function _6(){
    	return view('tentang');
    }
    public function _7(){
    	return view('admin1');
    }

}
