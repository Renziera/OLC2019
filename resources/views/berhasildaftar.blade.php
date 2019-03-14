@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pendaftaran berhasil</div>

                <div class="card-body">
                    Anda berhasil mendaftar!
                    <br><br>
                    Kode peserta anda
                    <h1>{{ $kode }}</h1> 
                    Catat kode ini, jangan sampai lupa ya.
                    <br>
                    Selanjutnya, silahkan lunasi biaya pendaftaran sebesar
                    <h2>Rp{{ $biaya }},00</h2>
                    dengan cara transfer ke rekening
                    <br>
                    BCA 1630377117 a.n. Yohan kristian Putrafame T
                    <br>
                    BNI 1212199994 a.n. Dani Ihza Farrosi
                    <br>
                    MANDIRI 1410507122000 a.n. Fedora Ramadhanty Widijanto Putri
                    <br>
                    Setelah itu <a href="{{ route('pembayaran') }}">upload bukti pembayaran.</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
