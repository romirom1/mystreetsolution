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
    public function kategori($id){
        $laporan=DB::table('users')->join('reports','reports.user_id','=','users.id')->orderBy('reports.created_at','desc')->select('name','reports.id','reports.photo','title','content','reports.created_at')->where('categories_id',$id)->paginate(7);
        return view('semua-laporan')->with('laporan',$laporan);
    }

    public function cari(Request $request){
        return  redirect()->route('isi.laporan',['id'=> $request['id']]);
    }
    public function all(){
    	$laporan=DB::table('users')->join('reports','reports.user_id','=','users.id')->orderBy('reports.created_at','desc')->select('name','reports.id','reports.photo','title','content','reports.created_at')->paginate(7);
    	return view('semua-laporan')->with('laporan',$laporan);
    }

    public function isi($id){
        $laporan = App\Report::find($id);
        $kategori = App\Report::find($id)->categories;
        $user = App\User::find($laporan->user_id);
        $komentar1 = DB::table('users')->join('comments','comments.user_id','=','users.id')->where('report_id',$id)->select('name','comments.created_at','content','photo');
        $komentar2 = DB::table('admins')->join('comments','comments.admin_id','=','admins.id')->where('report_id',$id)->select('name','comments.created_at','content','photo');
        $komentar=$komentar1->union($komentar2)->get();
        $jumlahkomentar=0;
        if($komentar!==null){
            $jumlahkomentar = DB::table('comments')->where('report_id',$id)->count();
        }
        return view('isi-laporan')->with('laporan',$laporan)->with('user',$user)->with('komentar',$komentar)->with('jumlahkomentar',$jumlahkomentar)->with('kategori',$kategori)->with('user',$user);
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
        return redirect()->route('user.dashboard');
    }
    public function edit($id){
        $laporan = App\Report::find($id);
        $category = App\Category::all();
        return view('user.edit-laporan')->with('laporan',$laporan)->with('kategori',$category);
    }
    public function update(Request $request){
        $add = App\Report::find($request['id']);
        $add->categories_id= $request['categories_id'];
        $add->title = $request['title'];
        $add->content = $request['content'];
        $add->location = $request['location'];
        if($request->hasFile('photo')){
        $getimageName = time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move('photo', $getimageName);
        $add->photo = $getimageName;
        }
        $add->save();
        return back();
    }

    public function hapuslaporan($ide){
        DB::table('comments')->delete($ide);
        return redirect()->route('komentar.member');
    }


}
