<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;

class PembayaranController extends Controller
{
    public function pembayaran(Request $request){
        /**
         * input kode peserta, cek udah upload bukti atau belum
         */

        $request->validate([
            'kode' => 'bail|required|max:5'
        ]);

        $kode = $request['kode'];
        //TODO apakah lowercase uppercase ngaruh ?
        $peserta = Peserta::where('kode_peserta', '=', $kode)->first();

        if($peserta != null){
            $sudahBayar = $peserta->sudah_bayar;

            $bukti = $peserta->bukti_pembayaran;

            if($bukti === null){
                $bukti = false;
            }else{
                $bukti = true;
            }
        }else{
            return view('pembayaran')->with('invalid', false);
        }

        return view('pembayaran')->with('sudahBayar', $sudahBayar)->with('sudahUpload', $bukti)->with('kode', $kode);
    }

    public function uploadBukti(Request $request){
        $request->validate([
            'kode' => 'bail|required|max:5',
            'bukti' => 'bail|required|image|mimes:jpeg,png,jpg,gif,svg|max:4096'
        ]);

        $kode = $request['kode'];

        if($request->hasFile('bukti')){
            $image = $request->file('bukti');
            $name = time() . $image->getClientOriginalName();
            $destinationPath = public_path('/bukti');
            $image->move($destinationPath, $name);

            $peserta = Peserta::where('kode_peserta', '=', $kode)->first();
            $peserta->bukti_pembayaran = $name;
            $peserta->save();
            return view('pembayaran')->with('sudahBayar', false)->with('sudahUpload', true);
        }else{
            return view('pembayaran')->with('sudahBayar', false)->with('sudahUpload', false)->with('kode', $kode);
        }
    }

}
