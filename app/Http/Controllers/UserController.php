<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Auth;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$id = Auth::user()->id;
    	$count = App\User::find($id)->reports()->count();
    	$laporan= App\User::find($id)->reports()->paginate(3);
        return view('user.member')->with('laporan',$laporan)->with('count',$count);
    }

    public function editprofile(){
        $id = Auth::user()->id;
        $data = App\User::find($id);
        return view('user.edit-profile')->with('data',$data);
    }

    public function updateprofile(Request $request){
        $id = Auth::user()->id;
        //$user = App\User::find($id);
        //$user->name=$request['name'];
        return redirect()->route('user.dashboard');
    }
}
