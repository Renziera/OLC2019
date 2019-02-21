@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a href="/admin">Semua</a> 
                <a href="/admin/kelas1">Web Apps</a>   
                <a href="/admin/kelas2">Database</a>
                <a href="/admin/kelas3">Motion Graphic</a>
                <a href="/admin/kelas4">Cyber Security</a>   
                <a href="/admin/kelas5">Graphic Design</a>
                <a href="/admin/kelas6">Game Development</a>
                <a href="/admin/kelas7">Android Apps</a>   
                <a href="/admin/kelas8">Web Design</a>
            <div class="card">
                <div class="card-header">
                Admin Panel
                </div>

                <div class="card-body">
                    <table>
                        <tr>
                            <th>Nama peserta</th>
                            <th>Kode Peserta</th>
                            <th>Nomor identitas</th>
                            <th>Nomor HP</th>
                            <th>Kelas yang diikuti</th>
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
                            <td>
                                @if($peserta->Web_Apps)
                                    Web Apps <br>
                                @endif
                                @if($peserta->Database)
                                    Database <br>
                                @endif
                                @if($peserta->Motion_Graphic)
                                    Motion Graphic <br>
                                @endif
                                @if($peserta->Graphic_Design)
                                    Graphic Design <br>
                                @endif
                                @if($peserta->Game_Development)
                                    Game Development <br>
                                @endif
                                @if($peserta->Android_Apps)
                                    Android Apps <br>
                                @endif
                                @if($peserta->Web_Design)
                                    Web Design <br>
                                @endif
                                @if($peserta->Cyber_Security)
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
