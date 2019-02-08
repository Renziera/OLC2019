<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;

class DaftarController extends Controller
{
    public $hargaMancing = 70000;
    public $hargaLele = 40000;
    public $hargaMeme = 10000;

    public function daftar(Request $request){

        $request->validate([
            'nama' => 'bail|required|max:255',
            'nomor_identitas' => 'bail|required|max:32',
            'nomor_telp' => 'bail|required|max:16',
            //TODO validasi at least 1 checkbox
            // 'mancing_mania' => 'required_without_all: ternak_lele, panen_meme',
            // 'ternak_lele' => 'required_without_all: mancing_mania, panen_meme',
            // 'panen_meme' => 'required_without_all: mancing_mania, ternak_lele',
        ]);
        if($request['ternak_lele']==null){
            if($request['mancing_mania']==null){
                if($request['ternak_meme']==null){
                    return redirect('daftar')->with('alert','Silahkan Centang Salah Satu');
                }
            }
        }
        
         $mancing_mania = $request['mancing_mania'];
         $ternak_lele = $request['ternak_lele'];
         $ternak_meme =  $request['ternak_meme'];
        $kode = $this->generateKodePeserta();
        $biaya = $this->hitungUang($mancing_mania,$ternak_lele,$ternak_meme);
        $peserta = new Peserta;
        $peserta->nama = $request['nama'];
        $peserta->nomor_identitas = $request['nomor_identitas'];
        $peserta->nomor_telp = $request['nomor_telp'];
        $peserta->kelas_mancing_mania = $request['mancing_mania'] ? 1 : 0;
        $peserta->kelas_ternak_lele = $request['ternak_lele'] ? 1 : 0;
        $peserta->kelas_panen_meme = $request['panen_meme'] ? 1 : 0;
        $peserta->kode_peserta = $kode;
        $peserta->biaya = $biaya;
        $peserta->bukti_pembayaran = null;
        $peserta->sudah_bayar = false;
        $peserta->save();

        return view('berhasildaftar')->with('kode', $kode)->with('biaya', $biaya);
    }

    function generateKodePeserta($length = 5) {
        return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
    function hitungUang($mancing_mania,$ternak_lele,$ternak_meme){
        $biaya = 0;
        if($mancing_mania){
            $biaya = $biaya + $this->hargaMancing;
        }
        if($ternak_lele){
            $biaya = $biaya + $this->hargaLele;
        }
        if($ternak_meme){
            $biaya = $biaya + $this->hargaMeme;
        }
        return $biaya;
    }

    public function daftarAdmin(Request $request){
        $mancing_mania = $request['mancing_mania'];
        $ternak_lele = $request['ternak_lele'];
        $ternak_meme =  $request['ternak_meme'];
        $biaya = $this->hitungUang($mancing_mania,$ternak_lele,$ternak_meme);
        $kode = $this->generateKodePeserta();
        $peserta = new Peserta;
        $peserta->nama = $request['nama'];
        $peserta->nomor_identitas = $request['nomor_identitas'];
        $peserta->nomor_telp = $request['nomor_telp'];
        $peserta->kelas_mancing_mania = $request['mancing_mania'] ? 1 : 0;
        $peserta->kelas_ternak_lele = $request['ternak_lele'] ? 1 : 0;
        $peserta->kelas_panen_meme = $request['panen_meme'] ? 1 : 0;
        $peserta->kode_peserta = $kode;
        $peserta->biaya = $biaya;
        $peserta->bukti_pembayaran = null;
        $peserta->sudah_bayar = true;
        $peserta->save();
        
        return redirect('/admin');
    }
}
