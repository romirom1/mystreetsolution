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

    	$komen = new App\Comment;
    	$id = Auth::user()->id;
    	$komen->user_id=$id;
    	$komen->content = $komentar['content'];
    	$komen->report_id = $komentar['report_id'];
    	$komen->save();
    	return back();
    }
}
