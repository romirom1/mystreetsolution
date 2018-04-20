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
    	$id = Auth()->user()->id;
    	$count1 = App\User::find($id)->reports()->count();
        $count2 = App\User::find($id)->reports()->where('status','tuntas')->count();
    	$laporan= App\User::find($id)->reports()->paginate(3);
        return view('user.member')->with('laporan',$laporan)->with('count1',$count1)->with('count2',$count2);
    }

    public function notifikasi(){
        return view('user.notifikasi');
    }
    public function editprofile(){
        $id = Auth::user()->id;
        $data = App\User::find($id);
        return view('user.edit-profile')->with('data',$data);
    }

    public function updateprofile(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'email'=> 'required',
            'birth'=>'required',
            'phone'=>'required'
        ]);
        $user = App\User::find($request['id']);
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->birth=$request['birth'];
        $user->phone=$request['phone'];
        if($request->hasFile('photo')){
            $getimageName = time().'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move('photo', $getimageName);
            $user->photo = $getimageName;
        }
        $user->save();
        return redirect()->route('user.dashboard');
    }

    public function komentarmember(){
        $id=Auth::user()->id;
        $komentar=DB::table('comments')->where('user_id',$id)->paginate(6);
        return view('user.komentar-member')->with('komentar',$komentar);
    }

    public function profile(){
        return view('user.profile');
    }
}
