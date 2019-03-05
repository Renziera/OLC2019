@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a href="/admin/daftar">Daftar on the spot</a>
                <br>
                Cari Nama
                <form action="/admin/cari/nama" method="post">
                    @csrf
                    <input type="text" name="nama">
                    <input type="submit" value="Cari">
                </form>
                <br>
                Cari Kode
                <form action="/admin/cari/kode" method="post">
                    @csrf
                    <input type="text" name="kode" size="5" maxlength="5" style="text-transform:uppercase">
                    <input type="submit" value="Cari">
                </form>
                <br>
                <a href="/admin">Semua</a> 
                <a href="/admin/kelas/web_apps">Web Apps</a>   
                <a href="/admin/kelas/database">Database</a>
                <a href="/admin/kelas/cyber_security">Cyber Security</a>   
                <a href="/admin/kelas/data_science">Data Science</a>
                <a href="/admin/kelas/android_apps">Android Apps</a>   
                <a href="/admin/kelas/web_design">Web Design</a>
            <div class="card">
                <div class="card-header">
                Admin Panel
                </div>

                <div class="card-body">
                    <table>
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
</div>
@endsection
