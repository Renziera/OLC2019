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
}
