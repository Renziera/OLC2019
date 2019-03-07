@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="pilihan">
                <a class="tom2" href="/admin/daftar">Daftar on the spot</a>


                <a class="tom2" href="/admin">Pencarian</a>
 </div>
           <br>
           <br>
            
               <div class="pencarian">
                <br>
                <h4 class="judul2">Absensi</h4>
                <h4 class="cari">Cari Nama</h4>
                <form action="/admin/absen/nama" method="post">
                    @csrf
                    <input type="text" name="nama">
                    <input type="submit" value="Cari">
                </form>
                <br>
                <h4 class="cari">Cari Kode</h4>
                <form action="/admin/absen/kode" method="post">
                    @csrf
                    <input type="text" name="kode" size="5" maxlength="5" style="text-transform:uppercase">
                    <input type="submit" value="Cari">
                </form>
                <br>
                <br>
                <h4 class="cari">Cari Berdasarkan : </h4>
                <a  class="kelas" href="/admin/absen/semua">Semua</a> 
                <a class="kelas"  href="/admin/absen/web_apps">Web Apps</a>   
                <a  class="kelas" href="/admin/absen/database">Database</a>
                <a  class="kelas" href="/admin/absen/cyber_security">Cyber Security</a>   
                <a  class="kelas" href="/admin/absen/data_science">Data Science</a>
                <a  class="kelas" href="/admin/absen/android_apps">Android Apps</a>   
                <a   class="kelas" href="/admin/absen/web_design">Web Design</a>
                <br>


</div>
           
               
         </div>       
           <br>
            <br>
            
            
            <br>
            <br>
                <div class="tabel">
                  <br>
                  <br>
                   <h4 class="judul2">Absen Peserta </h4>
                    <table class="table-bordered" style="margin-left:-20px;">
                        <tr>
                            <th>Nama peserta</th>
                            <th>Kode Peserta</th>
                            <th>Kelas</th>
                            <th>Pertemuan 1</th>
                            <th>Pertemuan 2</th>
                            <th>Pertemuan 3</th>
                            <th>Pertemuan 4</th>
                        </tr>
                        @foreach ($pesertas as $peserta)
                        <tr>
                            <td>{{ $peserta->nama }}</td>
                            <td>{{ $peserta->kode_peserta }}</td>
                            <td>{{ $peserta->kelas }}</td>
                            <td>
                                @if ($peserta->pertemuan1 == 'cek')
                                <form action="/admin/absen" method="post">
                                    @csrf
                                    <input type="hidden" name="kode" value="{{ $peserta->kode_peserta }}">
                                    <input type="hidden" name="kelas" value="{{ $peserta->kelas }}">
                                    <input type="submit" value="Absen">
                                </form>
                                @else
                                    {{ $peserta->pertemuan1}}
                                @endif
                            </td>
                            <td>
                                @if ($peserta->pertemuan2 == 'cek')
                                <form action="/admin/absen" method="post">
                                    @csrf
                                    <input type="hidden" name="kode" value="{{ $peserta->kode_peserta }}">
                                    <input type="hidden" name="kelas" value="{{ $peserta->kelas }}">
                                    <input type="submit" value="Absen">
                                </form>
                                @else
                                    {{ $peserta->pertemuan2}}
                                @endif
                            </td>
                            <td>
                                @if ($peserta->pertemuan3 == 'cek')
                                <form action="/admin/absen" method="post">
                                    @csrf
                                    <input type="hidden" name="kode" value="{{ $peserta->kode_peserta }}">
                                    <input type="hidden" name="kelas" value="{{ $peserta->kelas }}">
                                    <input type="submit" value="Absen">
                                </form>
                                @else
                                    {{ $peserta->pertemuan3}}
                                @endif
                            </td>
                            <td>
                                @if ($peserta->pertemuan4 == 'cek')
                                <form action="/admin/absen" method="post">
                                    @csrf
                                    <input type="hidden" name="kode" value="{{ $peserta->kode_peserta }}">
                                    <input type="hidden" name="kelas" value="{{ $peserta->kelas }}">
                                    <input type="submit" value="Absen">
                                </form>
                                @else
                                    {{ $peserta->pertemuan4}}
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
        </div>
            
        </div>
    </div>

@endsection
