@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a href="/admin/daftar">Daftar on the spot</a>
                <br>
                Cari Nama
                <form action="/admin/absen/nama" method="post">
                    @csrf
                    <input type="text" name="nama">
                    <input type="submit" value="Cari">
                </form>
                <br>
                Cari Kode
                <form action="/admin/absen/kode" method="post">
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
                <br>
                Absensi
                <br>
                <a href="/admin/absen/semua">Semua</a> 
                <a href="/admin/absen/web_apps">Web Apps</a>   
                <a href="/admin/absen/database">Database</a>
                <a href="/admin/absen/cyber_security">Cyber Security</a>   
                <a href="/admin/absen/data_science">Data Science</a>
                <a href="/admin/absen/android_apps">Android Apps</a>   
                <a href="/admin/absen/web_design">Web Design</a>
                <br>
            <div class="card">
                <div class="card-header">
                Absensi
                </div>

                <div class="card-body">
                    <table>
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
    </div>
</div>
@endsection
