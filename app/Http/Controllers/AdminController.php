<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allPeserta = Peserta::all();

        return view('admin')->with('pesertas', $allPeserta);
    }

    public function approvePay(Request $request){
        $request->validate([
            'kode' => 'bail|required|max:5'
        ]);

        $kode = $request['kode'];
        
        $peserta = Peserta::where('kode_peserta', '=', $kode)->first();
        if($peserta != null){
            $peserta->sudah_bayar = true;
            $peserta->save();
        }

        return redirect('admin');
    }
    public function kelas1(){
        $allPeserta = Peserta::where([
            'Web_Apps' => '1'
        ])->get();
        return view('kelas')->with('pesertas',$allPeserta);
    }
    public function kelas2(){
        $allPeserta = Peserta::where([
            'Database' => '1'
        ])->get();
        return view('kelas')->with('pesertas',$allPeserta);
    }
    public function kelas3(){
        $allPeserta = Peserta::where([
            'Motion_Graphic' => '1'
        ])->get();
        return view('kelas')->with('pesertas',$allPeserta);
    }
    public function kelas4(){
        $allPeserta = Peserta::where([
            'Cyber_Security' => '1'
        ])->get();
        return view('kelas')->with('pesertas',$allPeserta);
    }
    public function kelas5(){
        $allPeserta = Peserta::where([
            'Graphic_Design' => '1'
        ])->get();
        return view('kelas')->with('pesertas',$allPeserta);
    }
    public function kelas6(){
        $allPeserta = Peserta::where([
            'Game_Development' => '1'
        ])->get();
        return view('kelas')->with('pesertas',$allPeserta);
    }
    public function kelas7(){
        $allPeserta = Peserta::where([
            'Android_Apps' => '1'
        ])->get();
        return view('kelas')->with('pesertas',$allPeserta);
    }
    public function kelas8(){
        $allPeserta = Peserta::where([
            'Web_Design' => '1'
        ])->get();
        return view('kelas')->with('pesertas',$allPeserta);
    }
    
    public function daftar(){
        return view('daftarAdmin');
    }
    public function cari()
    {
        return view('cari');
    }
}
