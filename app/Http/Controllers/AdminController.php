<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Auth;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('reports')->where('status','belum')->orderBy('created_at','desc')
                ->paginate(10);
        $count1 = App\Report::all()->count();
        $count2 = App\Report::all()->where('status','terima')->count();
        $count3 = App\Report::all()->where('status','lanjut')->count();
        $count4 = App\Report::all()->where('status','tuntas')->count();
        $count5 = App\Report::all()->where('status','tolak')->count();
        for ($i=0; $i < 12; $i++) { 
            $date1 = Date('2018-'.($i+1).'-1');
            $date2 = Date('2018-'.($i+1).'-31');
            $data1[$i]=DB::table('reports')->where('created_at','>=',$date1)->where('created_at','<=',$date2)->count();
        }
        for ($i=0; $i < 12; $i++) { 
            $date1 = Date('2018-'.($i+1).'-1');
            $date2 = Date('2018-'.($i+1).'-31');
            $data2[$i]=DB::table('reports')->where('created_at','>=',$date1)->where('created_at','<=',$date2)->where('status','terima')->count();
        }
        for ($i=0; $i < 12; $i++) { 
            $date1 = Date('2018-'.($i+1).'-1');
            $date2 = Date('2018-'.($i+1).'-31');
            $data3[$i]=DB::table('reports')->where('created_at','>=',$date1)->where('created_at','<=',$date2)->where('status','lanjut')->count();
        }
        for ($i=0; $i < 12; $i++) { 
            $date1 = Date('2018-'.($i+1).'-1');
            $date2 = Date('2018-'.($i+1).'-31');
            $data4[$i]=DB::table('reports')->where('created_at','>=',$date1)->where('created_at','<=',$date2)->where('status','tuntas')->count();
        }
        for ($i=0; $i < 12; $i++) { 
            $date1 = Date('2018-'.($i+1).'-1');
            $date2 = Date('2018-'.($i+1).'-31');
            $data5[$i]=DB::table('reports')->where('created_at','>=',$date1)->where('created_at','<=',$date2)->where('status','tolak')->count();
        }
        return view('admin')->with('data',$data)->with('count1',$count1)->with('count2',$count2)->with('count3',$count3)->with('count4',$count4)->with('count5',$count5)->with('data1',$data1)->with('data2',$data2)->with('data3',$data3)->with('data4',$data4)->with('data5',$data5);
    }
    public function konfirmasi(Request $request){
        $update=App\Report::find($request['id']);
        $update->status=$request['status'];
        $update->save();
        $add = new App\Message;
        if($request['status']==='tolak'){
            $add->title="Laporan Anda Ditolak #id=".$request['id'];
        }else{
            $add->title="Laporan Anda Diterima #id=".$request['id'];
        }
        $add->user_id=App\Report::find($request['id'])->user_id;
        $add->admin_id=Auth::user()->id;
        $add->content=$request['pesan'];
        $add->save();
        return redirect()->route('admin.dashboard');
    }
    public function kelola(){
        $data = DB::table('reports')->where('status','terima')->orWhere('status','lanjut')->orWhere('status','tolak')->orWhere('status','tuntas')->orderBy('created_at','desc')
                ->paginate(10);
        $count1 = App\Report::all()->count();
        $count2 = App\Report::all()->where('status','terima')->count();
        $count3 = App\Report::all()->where('status','lanjut')->count();
        $count4 = App\Report::all()->where('status','tuntas')->count();
        $count5 = App\Report::all()->where('status','tolak')->count();
        for ($i=0; $i < 12; $i++) { 
            $date1 = Date('2018-'.($i+1).'-1');
            $date2 = Date('2018-'.($i+1).'-31');
            $data1[$i]=DB::table('reports')->where('created_at','>=',$date1)->where('created_at','<=',$date2)->count();
        }
        for ($i=0; $i < 12; $i++) { 
            $date1 = Date('2018-'.($i+1).'-1');
            $date2 = Date('2018-'.($i+1).'-31');
            $data2[$i]=DB::table('reports')->where('created_at','>=',$date1)->where('created_at','<=',$date2)->where('status','terima')->count();
        }
        for ($i=0; $i < 12; $i++) { 
            $date1 = Date('2018-'.($i+1).'-1');
            $date2 = Date('2018-'.($i+1).'-31');
            $data3[$i]=DB::table('reports')->where('created_at','>=',$date1)->where('created_at','<=',$date2)->where('status','lanjut')->count();
        }
        for ($i=0; $i < 12; $i++) { 
            $date1 = Date('2018-'.($i+1).'-1');
            $date2 = Date('2018-'.($i+1).'-31');
            $data4[$i]=DB::table('reports')->where('created_at','>=',$date1)->where('created_at','<=',$date2)->where('status','tuntas')->count();
        }
        for ($i=0; $i < 12; $i++) { 
            $date1 = Date('2018-'.($i+1).'-1');
            $date2 = Date('2018-'.($i+1).'-31');
            $data5[$i]=DB::table('reports')->where('created_at','>=',$date1)->where('created_at','<=',$date2)->where('status','tolak')->count();
        }
        return view('kelola-laporan-admin')->with('data',$data)->with('count1',$count1)->with('count2',$count2)->with('count3',$count3)->with('count4',$count4)->with('count5',$count5)->with('data1',$data1)->with('data2',$data2)->with('data3',$data3)->with('data4',$data4)->with('data5',$data5);
    }
    public function kelolae(Request $request){
        $this->validate($request,[
            'status'=>'required',
            'id'=>'required'
        ]);
        if ($request['status']==='hapus') {
            $add = new App\Message;
            $add->title="Laporan Anda Telah Ditindak Lanjuti #id=".$request['id'];
            $add->content="Mohon Maaf Laporan anda kami hapus karena beberapa alasan";
            $add->user_id=App\Report::find($request['id'])->user_id;
            $add->admin_id=Auth::user()->id;
            $add->save();
            App\Report::find($request['id'])->delete();
        }else{
            $update=App\Report::find($request['id']);
            $update->status=$request['status'];
            $update->save();
            $add = new App\Message;
            if($request['status']==='lanjut'){
                $add->title="Laporan Anda Telah Ditindak Lanjuti #id=".$request['id'];
                $add->content="Silahkan tunggu, dalam beberapa hari, Laporan anda akan dituntaskan, Terimakasih";
            }else{
                $add->title="Laporan Anda Telah Tuntas #id=".$request['id'];
                $add->content="Terimakasih Telah Menggunakan Jasa Pelaporan MyStreetSolution";
            }
            $add->user_id=App\Report::find($request['id'])->user_id;
            $add->admin_id=Auth::user()->id;
            $add->save();
        }
        return redirect()->route('admin.kelola.laporan');
    }
    public function komentar(){
        $komentar=DB::table('comments')->orderBy('created_at','desc')->paginate(10);
        return view('komentar-admin')->with('komentar',$komentar);
    }
    public function komentare(Request $request){
        App\Comment::find($request['id'])->delete();
        return redirect()->route('admin.komentar');
    }
    public function member(){
        $user = DB::table('users')->paginate(30);
        return view('kelola-member-admin')->with('user',$user);
    }
    public function membere(Request $request){
        App\User::find($request['id'])->delete();
        return redirect()->route('admin.kelola.member');
    }
}