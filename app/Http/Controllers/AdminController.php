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

    public function kelas($kelas){
        switch ($kelas) {
            case 'web_apps':
                $allPeserta = Peserta::where(['web_apps' => '1'])->get();
                break;
            case 'database':
                $allPeserta = Peserta::where(['database' => '1'])->get();
                break;
            case 'cyber_security':
                $allPeserta = Peserta::where(['cyber_security' => '1'])->get();
                break;
            case 'android_apps':
                $allPeserta = Peserta::where(['android_apps' => '1'])->get();
                break;
            case 'web_design':
                $allPeserta = Peserta::where(['web_design' => '1'])->get();
                break;
            case 'data_science':
                $allPeserta = Peserta::where(['data_science' => '1'])->get();
                break;
            default:
                $allPeserta = Peserta::all();
                break;
        }
        
        return view('admin')->with('pesertas', $allPeserta);
    }
    
    public function daftar(){
        return view('daftarAdmin');
    }

    public function daftarAdmin(Request $request){
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
        if(date('Ymd') <= 20190313){
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
        $peserta->sudah_bayar = true;
        $peserta->save();
            
        return redirect('/admin');
    }

    function generateKodePeserta($length = 5) {
        return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }  

    public function cariKode(request $request)
    {
        $kode = $request['kode'];
   
        $peserta = Peserta::where([ 'kode_peserta' => $kode ])->get();
        return view('admin')->with('pesertas', $peserta);
    }

    public function cariNama(Request $request)
    {
        $nama = $request['nama'];
       
        $peserta = Peserta::where('nama', 'LIKE', '%'. $nama . '%')->get();
        return view('admin')->with('pesertas', $peserta);
    }
}
