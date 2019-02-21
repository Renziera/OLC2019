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
        if($request['Web_Apps']==null){
            if($request['Database']==null){
                if($request['Motion_Graphic']==null){
                    if($request['Cyber_Security']==null){
                        if($request['Graphic_Design']==null){
                            if($request['Game_Development']==null){
                                if($request['Android_Apps']==null){
                                  if($request['Web_Design']==null){
                                        return redirect('daftar')->with('alert','Silahkan Centang Salah Satu');
                
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        
        
         $Web_Apps = $request['Web_Apps'];
         $Database = $request['Database'];
         $Motion_Graphic =  $request['Motion_Graphic'];
         $Cyber_Security = $request['Cyber_Security'];
         $Graphic_Design = $request['Graphic_Design'];
         $Game_Development =  $request['Game_Development'];
         $Android_Apps = $request['Android_Apps'];
         $Web_Design = $request['Web_Design'];

        $kode = $this->generateKodePeserta();
        $biaya = $this->hitungUang($Web_Apps,$Database,$Motion_Graphic,$Cyber_Security,$Graphic_Design,$Game_Development,$Android_Apps,$Web_Design);
        $peserta = new Peserta;
        $peserta->nama = $request['nama'];
        $peserta->nomor_identitas = $request['nomor_identitas'];
        $peserta->nomor_telp = $request['nomor_telp'];
        $peserta->Web_Apps = $request['Web_Apps'] ? 1 : 0;
        $peserta->Database = $request['Database'] ? 1 : 0;
        $peserta->Motion_Graphic = $request['Motion_Graphic'] ? 1 : 0;
        $peserta->Cyber_Security = $request['Cyber_Security'] ? 1 : 0;
        $peserta->Graphic_Design = $request['Graphic_Design'] ? 1 : 0;
        $peserta->Game_Development = $request['Game_Development'] ? 1 : 0;
        $peserta->Android_Apps = $request['Android_Apps'] ? 1 : 0;
        $peserta->Web_Design = $request['Web_Design'] ? 1 : 0;
        $peserta->kode_peserta = $kode;
        $peserta->biaya = $biaya;
        $peserta->bukti_pembayaran = null;
        $peserta->sudah_bayar = false;
        $peserta->save();

        return view('berhasildaftar')->with('kode', $kode)->with('biaya', $biaya);
    }
   public function daftarAdmin(Request $request){
    $Web_Apps = $request['Web_Apps'];
    $Database = $request['Database'];
    $Motion_Graphic =  $request['Motion_Graphic'];
    $Cyber_Security = $request['Cyber_Security'];
    $Graphic_Design = $request['Graphic_Design'];
    $Game_Development =  $request['Game_Development'];
    $Android_Apps = $request['Android_Apps'];
    $Web_Design = $request['Web_Design'];
    $biaya = $this->hitungUang($Web_Apps,$Database,$Motion_Graphic,$Cyber_Security,$Graphic_Design,$Game_Development,$Android_Apps,$Web_Design);
    $kode = $this->generateKodePeserta();
        $peserta = new Peserta;
        $peserta->nama = $request['nama'];
        $peserta->nomor_identitas = $request['nomor_identitas'];
        $peserta->nomor_telp = $request['nomor_telp'];
        $peserta->Web_Apps = $request['Web_Apps'] ? 1 : 0;
        $peserta->Database = $request['Database'] ? 1 : 0;
        $peserta->Motion_Graphic = $request['Motion_Graphic'] ? 1 : 0;
        $peserta->Cyber_Security = $request['Cyber_Security'] ? 1 : 0;
        $peserta->Graphic_Design = $request['Graphic_Design'] ? 1 : 0;
        $peserta->Game_Development = $request['Game_Development'] ? 1 : 0;
        $peserta->Android_Apps = $request['Android_Apps'] ? 1 : 0;
        $peserta->Web_Design = $request['Web_Design'] ? 1 : 0;
        $peserta->kode_peserta = $kode;
        $peserta->biaya = $biaya;
        $peserta->bukti_pembayaran = null;
        $peserta->sudah_bayar = true;
        $peserta->save();
        
        return redirect('/admin');
    }

    function generateKodePeserta($length = 5) {
        return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
    function hitungUang($Web_Apps,$Database,$Motion_Graphic,$Cyber_Security,$Graphic_Design,$Game_Development,$Android_Apps,$Web_Design){
        $biaya = 0;
        if($Web_Apps){
            $biaya = $biaya + $this->hargaMancing;
        }
        if($Database){
            $biaya = $biaya + $this->hargaLele;
        }
        if($Motion_Graphic){
            $biaya = $biaya + $this->hargaMeme;
        }
        if($Cyber_Security){
            $biaya = $biaya + $this->hargaMancing;
        }
        if($Graphic_Design){
            $biaya = $biaya + $this->hargaLele;
        }
        if($Game_Development){
            $biaya = $biaya + $this->hargaMeme;
        }
        if($Android_Apps){
            $biaya = $biaya + $this->hargaMancing;
        }
        if($Web_Design){
            $biaya = $biaya + $this->hargaLele;
        }
        return $biaya;
    }

    
}
