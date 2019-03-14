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
                    Pendaftaran OLC 2019 telah ditutup :(
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
