<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;
class KomentarController extends Controller
{
    public function tambah(Request $komentar){
    	$this->validate($komentar,[
    		'content'=>'required'
    	]);
        if(Auth::guard('admin')->check()){
            $komen = new App\Comment;
            $id = Auth::guard('admin')->user()->id;
            $komen->admin_id=$id;
            $komen->content = $komentar['content'];
            $komen->report_id = $komentar['report_id'];
            $komen->save();
        }elseif(Auth::check()){
            $komen = new App\Comment;
            $id = Auth::user()->id;
            $komen->user_id=$id;
            $komen->content = $komentar['content'];
            $komen->report_id = $komentar['report_id'];
            $komen->save();
        }else{
            return redirect()->route('login');
        }
    	return back();
    }
}
