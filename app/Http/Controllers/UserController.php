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
    	$count1 = App\User::find($id)->reports()->count();
        $count2 = App\User::find($id)->reports()->where('status','terima')->count();
        $count3 = App\User::find($id)->reports()->where('status','lanjut')->count();
        $count4 = App\User::find($id)->reports()->where('status','tuntas')->count();
    	$laporan= App\User::find($id)->reports()->orderBy('created_at','desc')->paginate(5);
        for ($i=0; $i < 12; $i++) { 
            $date1 = Date('2018-'.($i+1).'-1');
            $date2 = Date('2018-'.($i+1).'-31');
            $data1[$i]=App\User::find($id)->reports()->where('created_at','>=',$date1)->where('created_at','<=',$date2)->count();
        }
        for ($i=0; $i < 12; $i++) { 
            $date1 = Date('2018-'.($i+1).'-1');
            $date2 = Date('2018-'.($i+1).'-31');
            $data2[$i]=App\User::find($id)->reports()->where('created_at','>=',$date1)->where('created_at','<=',$date2)->where('status','terima')->count();
        }
        for ($i=0; $i < 12; $i++) { 
            $date1 = Date('2018-'.($i+1).'-1');
            $date2 = Date('2018-'.($i+1).'-31');
            $data3[$i]=App\User::find($id)->reports()->where('created_at','>=',$date1)->where('created_at','<=',$date2)->where('status','lanjut')->count();
        }
        for ($i=0; $i < 12; $i++) { 
            $date1 = Date('2018-'.($i+1).'-1');
            $date2 = Date('2018-'.($i+1).'-31');
            $data4[$i]=App\User::find($id)->reports()->where('created_at','>=',$date1)->where('created_at','<=',$date2)->where('status','tuntas')->count();
        }
        return view('user.member')->with('laporan',$laporan)->with('count1',$count1)->with('count2',$count2)->with('count3',$count3)->with('count4',$count4)->with('data1',$data1)->with('data2',$data2)->with('data3',$data3)->with('data4',$data4);
    }

    public function notifikasi(){
        $id = Auth::user()->id;
        $data = DB::table('messages')->where('user_id',$id)->get();
        return view('user.notifikasi')->with('pesan',$data);
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
        $komentar=DB::table('comments')->where('user_id',$id)->paginate(5);
        return view('user.komentar-member')->with('komentar',$komentar);
    }

    public function profile(){
        return view('user.profile');
    }
}
