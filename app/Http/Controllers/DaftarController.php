<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;

class DaftarController extends Controller
{
    public function daftar(Request $request){

        $request->validate([
            'nama' => 'bail|required|max:255',
            'instansi' => 'bail|required|max:32',
            'kontak' => 'bail|required|max:32',
            'email' => 'bail|required|max:64',
        ]);

        $kelas = array(
            $request['web_apps'],
            $request['database'],
            $request['android_apps'],
            $request['data_science'],
            $request['web_design'],
            $request['cyber_security'],
        );

        date_default_timezone_set('Asia/Jakarta');
        if(date('Ymd') <= 20190320){
            $harga = 90000;
        }else{
            $harga = 100000;
        }

        $biaya = 0;

        foreach ($kelas as $kelasku) {
            if($kelasku != null){
                $biaya += $harga;
            }
        }

        if($biaya === 0){
            return redirect('daftar')->with('alert','Silahkan pilih kelas yang ingin diikuti');
        }

        //cek kelas tabrakan
        
        if($request['cyber_security'] && $request['web_design']){
            return redirect('daftar')->with('alert','Jadwal kelas yang anda pilih bertabrakan');
        }
        if($request['web_apps'] && $request['data_science']){
            return redirect('daftar')->with('alert','Jadwal kelas yang anda pilih bertabrakan');
        }
        if($request['android_apps'] && $request['database']){
            return redirect('daftar')->with('alert','Jadwal kelas yang anda pilih bertabrakan');
        }

        $kode = $this->generateKodePeserta();
        $peserta = new Peserta;
        $peserta->nama = $request['nama'];
        $peserta->instansi = $request['instansi'];
        $peserta->kontak = $request['kontak'];
        $peserta->email = $request['email'];
        $peserta->kode_peserta = $kode;
        
        $peserta->web_apps = $request['web_apps'] ? 1 : 0;
        $peserta->database = $request['database'] ? 1 : 0;
        $peserta->cyber_security = $request['cyber_security'] ? 1 : 0;
        $peserta->data_science = $request['data_science'] ? 1 : 0;
        $peserta->android_apps = $request['android_apps'] ? 1 : 0;
        $peserta->web_design = $request['web_design'] ? 1 : 0;
        
        $peserta->biaya = $biaya;
        $peserta->bukti_pembayaran = null;
        $peserta->sudah_bayar = false;
        $peserta->save();

        return view('berhasildaftar')->with('kode', $kode)->with('biaya', $biaya);
    }

    function generateKodePeserta($length = 5) {
        return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }   
}
