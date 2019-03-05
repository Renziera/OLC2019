@extends('layouts.adminLayout')

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
                <div class="card-header">{{ __('Daftar OTS OLC 2019') }}</div>

                <div class="card-body">
                    <form method="POST" action="/admin/daftar">
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
                            <label for="instansi" class="col-md-4 col-form-label text-md-right">{{ __('Instansi') }}</label>

                            <div class="col-md-6">
                                <input id="instansi" type="text" class="form-control{{ $errors->has('instansi') ? ' is-invalid' : '' }}" name="instansi" value="{{ old('instansi') }}" required autofocus>

                                @if ($errors->has('instansi'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('instansi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kontak" class="col-md-4 col-form-label text-md-right">{{ __('Kontak (Line/WA)') }}</label>

                            <div class="col-md-6">
                                <input id="kontak" type="text" class="form-control{{ $errors->has('kontak') ? ' is-invalid' : '' }}" name="kontak" value="{{ old('kontak') }}" required autofocus>

                                @if ($errors->has('kontak'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('kontak') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="daftar_kelas" class="col-md-4 col-form-label text-md-right">{{ __('Mendaftar kelas') }}</label>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="web_apps" value="1">
                                    <label class="form-check-label">
                                        {{ __('Web Apps') }}
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="database" value="1">
                                    <label class="form-check-label">
                                        {{ __('Database') }}
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="cyber_security" value="1">
                                    <label class="form-check-label">
                                        {{ __('Cyber Security') }}
                                    </label><br>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="data_science" value="1">
                                    <label class="form-check-label">
                                        {{ __('Data Science') }}
                                    </label><br>
                
                                    <input class="form-check-input" type="checkbox" name="android_apps" value="1">
                                    <label class="form-check-label">
                                        {{ __('Android Apps') }}
                                    </label><br>
                                    <input class="form-check-input" type="checkbox" name="web_design" value="1">
                                    <label class="form-check-label">
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
