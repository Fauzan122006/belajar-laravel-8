@extends('layouts.main')
@section('container')
    <div class="p-5 mb-4  rounded-3 mt-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Heloo, {{ $user }}</h1>
            <p class="col-md-8 fs-4">TES<p>
                <button class="btn btn-primary btn-lg" type="button">Info lebih lanjut</button>
        </div>

@endsection