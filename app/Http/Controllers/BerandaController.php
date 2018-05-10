<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;
class BerandaController extends Controller
{
    public function index(){
    	$kategori= App\Category::all();
    	$laporan=DB::table('reports')->orderBy('created_at','desc')->take(3)->get();
        $count1= App\Report::all()->count();
        $count2= App\Report::all()->where('status','tuntas')->count();
    	return view('beranda')->with('kategori',$kategori)->with('laporan',$laporan)->with('count1',$count1)->with('count2',$count2);
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
