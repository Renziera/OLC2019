@extends('layouts.adminlayout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="pilihan">
                <a class="tom2" href="/admin/daftar">Daftar on the spot</a>


                <a class="tom2" href="/admin/absen/semua">Absensi</a>

            </div>


            <br>
            <br>


            <div class="pencarian">
                <h4 class="judul2">Pencarian</h4>
                <h4 class="cari">Cari Nama</h4>
                <form action="/admin/cari/nama" method="post">
                    @csrf
                    <input type="text" name="nama">
                    <input type="submit" value="Cari">
                </form>
                <br>
                <h4 class="cari">Cari Kode</h4>
                <form action="/admin/cari/kode" method="post">
                    @csrf
                    <input type="text" name="kode" size="5" maxlength="5" style="text-transform:uppercase">
                    <input type="submit" value="Cari">
                </form>
                <br>
                <br>
                <h4 class="cari">Cari Berdasarkan : </h4>
                <a class="kelas" href="/admin">Semua</a>
                <a class="kelas" href="/admin/kelas/web_apps">Web Apps</a>
                <a class="kelas" href="/admin/kelas/database">Database</a>
                <a class="kelas" href="/admin/kelas/cyber_security">Cyber Security</a>
                <a class="kelas" href="/admin/kelas/data_science">Data Science</a>
                <a class="kelas" href="/admin/kelas/android_apps">Android Apps</a>
                <a class="kelas" href="/admin/kelas/web_design">Web Design</a>
                <br>



            </div>
            <br>
            <br>
            <br>
            <h4 class="judul2">Data Peserta </h4>
            <br>
            <br>
            <div class="tabel">
                <table class="table-bordered get_table">
                    <tr>
                        <th>Nama peserta</th>
                        <th>Kode Peserta</th>
                        <th>Instansi</th>
                        <th>Kontak</th>
                        <th>Email</th>
                        <th>Kelas yang diikuti</th>
                        <th>Biaya</th>
                        <th>Bukti bayar</th>
                        <th>Status</th>
                    </tr>
                    @foreach ($pesertas as $peserta)
                    <tr>
                        <td>{{ $peserta->nama }}</td>
                        <td>{{ $peserta->kode_peserta }}</td>
                        <td>{{ $peserta->instansi }}</td>
                        <td>{{ $peserta->kontak }}</td>
                        <td>{{ $peserta->email }}</td>
                        <td>
                            @if($peserta->web_apps)
                            Web Apps <br>
                            @endif
                            @if($peserta->database)
                            Database <br>
                            @endif
                            @if($peserta->data_science)
                            Data Science <br>
                            @endif
                            @if($peserta->android_apps)
                            Android Apps <br>
                            @endif
                            @if($peserta->web_design)
                            Web Design <br>
                            @endif
                            @if($peserta->cyber_security)
                            Cyber Security <br>
                            @endif
                        </td>
                        <td>{{ $peserta->biaya }}</td>
                        <td>
                            @if ($peserta->bukti_pembayaran != null)
                            <a href="{{ '/bukti/' .$peserta->bukti_pembayaran }}" target="_blank">Lihat</a>
                            @else
                            Belum upload
                            @endif
                        </td>
                        <td>
                            @if ($peserta->sudah_bayar)
                            Lunas
                            @elseif ($peserta->bukti_pembayaran != null)
                            <form action="{{ route('admin') }}" method="post">
                                @csrf
                                <input type="hidden" name="kode" value="{{ $peserta->kode_peserta }}">
                                <input type="submit" value="Approve">
                            </form>
                            @else
                            Belum Bayar
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>


            </div>










        </div>
    </div>
</div>
@endsection