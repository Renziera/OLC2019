<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;

class DaftarController extends Controller
{
    public function showDaftar(){
        date_default_timezone_set('Asia/Jakarta');
        if(date('Ymd') > 20190407){
            return view('lewatbatas');
        }
        return view('daftar');
    }
    public function daftar(Request $request){
        $request->validate([
            'nama' => 'bail|required|max:255',
            'instansi' => 'bail|required|max:32',
            'kontak' => 'bail|required|max:32',
            'email' => 'bail|required|max:64',
        ]);

        if($request['term'] == null){
            return redirect('daftar')->with('alert','Anda harus menyetujui term & condition')->withInput();
        }

        $kelas = array(
            $request['web_apps'],
            $request['database'],
            $request['android_apps_1'],
            $request['android_apps_2'],
            $request['data_science'],
            $request['web_design_1'],
            $request['web_design_2'],
            $request['cyber_security'],
        );

        $biaya = 0;

        foreach ($kelas as $kelasku) {
            if($kelasku != null){
                $biaya += 100000;
            }
        }

        if($biaya === 0){
            return redirect('daftar')->with('alert','Silahkan pilih kelas yang ingin diikuti')->withInput();
        }

        //cek kelas tabrakan
        
        if($request['cyber_security'] && $request['web_design_1'] || 
            $request['data_science'] && $request['cyber_security']||
            $request['web_design_1'] && $request['data_science']){
            return redirect('daftar')->with('alert','Jadwal kelas yang anda pilih bertabrakan')->withInput();
        }
        if($request['web_apps'] && $request['android_apps_1'] || 
            $request['web_design_2'] && $request['web_apps'] ||
            $request['android_apps_1'] && $request['web_design_2']){
            return redirect('daftar')->with('alert','Jadwal kelas yang anda pilih bertabrakan')->withInput();
        }
        if($request['android_apps_2'] && $request['database']){
            return redirect('daftar')->with('alert','Jadwal kelas yang anda pilih bertabrakan')->withInput();
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
        $peserta->android_apps_1 = $request['android_apps_1'] ? 1 : 0;
        $peserta->android_apps_2 = $request['android_apps_2'] ? 1 : 0;
        $peserta->web_design_1 = $request['web_design_1'] ? 1 : 0;
        $peserta->web_design_2 = $request['web_design_2'] ? 1 : 0;
        
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
