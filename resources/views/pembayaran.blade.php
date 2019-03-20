@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cek status pembayaran</div>

                <div class="card-body">
                    @if (isset($sudahBayar))
                        @if($sudahBayar)
                            <h4>Terima kasih,</h4>
                            <h3>{{ $nama }}</h3>
                            <h5>Biaya pendaftaran anda sudah lunas</h5>
                            <h6>Terima kasih atas partisipasinya</h6>
                            <h6>See you on hari-H :D</h6>
                        @else
                            @if($sudahUpload)
                                <h4>Bukti pembayaran atas nama {{$nama}} telah diterima.</h4>
                                <h5>Sedang dalam proses</h5>
                            @else
                                <h4>Hai {{$nama}}, silahkan upload bukti pembayaran anda.</h4>
                                <form action="{{ route('pembayaran') }}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="kode" value="{{ $kode }}">
                                <input type="file" name="bukti" accept="image/*" id="bukti">
                                <input type="submit" value="Upload">
                                </form>
                                <br><br>
                                
                                <h5>Pembayaran sebesar Rp{{$biaya}},00 ke rekening OLC:</h5>
                                
                                <br>
                                <ul>
                       <b>BCA </b>
                        <li>1630377117 a.n. Yohan kristian Putrafame T</li>
                    </ul>
                    
                    <ul>
                       <b>MANDIRI </b>
                        <li>1410507122000 a.n. Fedora Ramadhanty Widijanto Putri</li>
                    </ul>
                    
                    <ul>
                       <b>BNI  </b>
                        <li>1212199994 a.n. Dani Ihza Farrosi</li>
                    </ul>
                            @endif
                        @endif
                    @else
                        <h4>Silahkan masukkan kode peserta anda</h4>
                        <form action="{{ route('pembayaran') }}" method="post">
                        @csrf
                        <h1>
                        <input type="text" name="kode" size="5" maxlength="5" style="text-transform:uppercase" >
                        </h1>
                        <h3>
                        <input type="submit" value="Cek">
                        </h3>
                        </form>
                        @if(isset($invalid))
                            <h5>Kode yang ada masukkan tidak valid</h5>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
