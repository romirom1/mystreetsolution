<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class BerandaController extends Controller
{
    public function index(){
    	$kategori= App\Category::all();
    	$laporan= App\Report::all();
    	return view('beranda')->with('kategori',$kategori)->with('laporan',$laporan);
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
