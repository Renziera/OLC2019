<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use Illuminate\Support\Facades\DB;

class FindController extends Controller
{
    public function nama(Request $request)
    {
        $nama = $request['name'];
       
        $peserta = Peserta::where('nama', 'LIKE', '%'. $nama . '%')->get();
        $check = count($peserta);
        if($check!=0)
        {
            
            return view('cariNama')->with('pesertas', $peserta)->with('check',$check);
        }
        elseif($check==0){
            return view('cariNama')->with('msg','tidak ditemukan')->with('check',$check);
        }
    }

    public function code(request $request)
    {
        $kode = $request['code'];
   
        $cek = Peserta::where([ 'kode_peserta' => $kode ])->exists();
        if($cek)
        {
            $peserta = Peserta::where(['kode_peserta' => $kode ])->get();
            return view('cariCode')->with('pesertas', $peserta)->with('cek',$cek);
        }
        else{
            return view('cariCode')->with('msg','tidak ditemukan')->with('cek',$cek);
        }
    }
}
