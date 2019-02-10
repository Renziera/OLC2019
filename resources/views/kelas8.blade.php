@extends('layouts.adminlayout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Admin Panel
                <a href="/admin/kelas1">Web Apps</a>   
                <a href="/admin/kelas2">Database</a>
                <a href="/admin/kelas3">Motion Graphic</a>
                <a href="/admin/kelas4">Cyber Security</a>   
                <a href="/admin/kelas5">Graphic Design</a>
                <a href="/admin/kelas6">Game Development</a>
                <a href="/admin/kelas7">Android Apps</a>   
                <a href="/admin/kelas8">Web Desing</a>
                </div>

                <div class="card-body">
                <table>
                <table>
                        <tr>
                            <th>Nama peserta</th>
                            <th>Kode Peserta</th>
                            <th>Nomor identitas</th>
                            <th>Nomor HP</th>
                            <th>Biaya</th>
                            <th>Bukti bayar</th>
                            <th>Status</th>
                        </tr>
                        @foreach ($pesertas as $peserta)
                        <tr>
                            <td>{{ $peserta->nama }}</td>
                            <td>{{ $peserta->kode_peserta }}</td>
                            <td>{{ $peserta->nomor_identitas }}</td>
                            <td>{{ $peserta->nomor_telp }}</td>
                            
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
                                    -
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
