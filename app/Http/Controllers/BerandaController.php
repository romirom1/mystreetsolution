<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
    	return view('beranda');
    }

    public function panduan(){
    	return view('panduan');
    }

    public function tentang(){
    	return view('tentang');
    }

    public function kontak(){
    	return view('kontak');
    }
}
