<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;
class LaporanController extends Controller
{
    public function index(){
    	$kategori=App\Category::all();
    	return view('user.tambah-laporan')->with('kategori',$kategori);
    }

    public function all(){
    	$laporan=DB::table('reports')->orderBy('created_at','desc')->get();
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

        return redirect()->route('user.dashboard');
    }

    public function delete($ide){
        DB::table('reports')->delete($ide);
        return intend()->route('user.dashboard');
    }


}
