<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class ReportController extends Controller
{
    public function index(){
    	$kategori=App\Category::all();
    	return view('report')->with('kategori',$kategori);
    }

    public function all(){
    	$laporan=App\Report::all();
    	return view('semua-laporan')->with('laporan',$laporan);
    }
    public function post(Request $request){
 		$add = new App\Report;
 		$add->user_id= $request['user_id'];
 		$add->categories_id= $request['categories_id'];
        $add->title = $request['title'];
        $add->content = $request['content'];
        $add->location = $request['location'];
        $getimageName = time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move('photo', $getimageName);
        $add->status = $request['status'];
        $add->photo = $getimageName;
        $add->save();

        return redirect()->route('beranda');
    }


}
