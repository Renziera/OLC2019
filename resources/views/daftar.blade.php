@extends('layouts.app')

@section('content')
@if (session('alert'))~
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Daftar OLC 2019') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('daftar') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama lengkap') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomor_identitas" class="col-md-4 col-form-label text-md-right">{{ __('Nomor identitas') }}</label>

                            <div class="col-md-6">
                                <input id="nomor_identitas" type="number" class="form-control{{ $errors->has('nomor_identitas') ? ' is-invalid' : '' }}" name="nomor_identitas" value="{{ old('nomor_identitas') }}" required autofocus>

                                @if ($errors->has('nomor_identitas'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('no_identitas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomor_telp" class="col-md-4 col-form-label text-md-right">{{ __('Nomor telepon/HP') }}</label>

                            <div class="col-md-6">
                                <input id="nomor_telp" type="number" class="form-control{{ $errors->has('nomor_telp') ? ' is-invalid' : '' }}" name="nomor_telp" value="{{ old('nomor_telp') }}" required autofocus>

                                @if ($errors->has('nomor_telp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('no_telepon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="daftar_kelas" class="col-md-4 col-form-label text-md-right">{{ __('Mendaftar kelas') }}</label>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="Web_Apps" id="mancing_mania" value="1" {{ old('mancing_mania') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="mancing_mania">
                                        {{ __('Web Apps') }}
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="Database" id="ternak_lele" value="1" {{ old('ternak_lele') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="ternak_lele">
                                        {{ __('Database') }}
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="Motion_Graphic" id="panen_meme" value="1" {{ old('panen_meme') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="panen_meme">
                                        {{ __('Motion Graphic') }}
                                    </label><br>
                                    <input class="form-check-input" type="checkbox" name="Cyber_Security" id="panen_meme" value="1" {{ old('panen_meme') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="panen_meme">
                                        {{ __('Cyber Security') }}
                                    </label><br>
                                    <input class="form-check-input" type="checkbox" name="Graphic_Design" id="panen_meme" value="1" {{ old('panen_meme') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="panen_meme">
                                        {{ __('Graphic Design') }}
                                    </label><br>
                                    <input class="form-check-input" type="checkbox" name="Game_Development" id="panen_meme" value="1" {{ old('panen_meme') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="panen_meme">
                                        {{ __('Game Development') }}
                                    </label><br>
                
                                    <input class="form-check-input" type="checkbox" name="Android_Apps" id="panen_meme" value="1" {{ old('panen_meme') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="panen_meme">
                                        {{ __('Android Apps') }}
                                    </label><br>
                                    <input class="form-check-input" type="checkbox" name="Web_Design" id="panen_meme" value="1" {{ old('panen_meme') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="panen_meme">
                                        {{ __('Web Design') }}
                                    </label>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Daftar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
