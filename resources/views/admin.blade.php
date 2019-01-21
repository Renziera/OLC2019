@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Panel</div>

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
                                @if($peserta->kelas_mancing_mania)
                                    Mancing Mania <br>
                                @endif
                                @if($peserta->kelas_ternak_lele)
                                    Ternak Lele <br>
                                @endif
                                @if($peserta->kelas_panen_meme)
                                    Panen Meme <br>
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
