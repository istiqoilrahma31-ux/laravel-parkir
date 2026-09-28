@extends('layout.layout')

@section('title', 'Dashboard Petugas')

@section('content')

<h2>Dasboard Petugas</h2>

<p>Selamat datang di sistem E-PARKIR.</p>

<div class="row mt-4">

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Parkir Tersedia</h5>
            <h2>0</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Kendaraan Masuk</h5>
            <h2>0</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Transaksi Hari Ini</h5>
            <h2>0</h2>
        </div>
    </div>

</div>

@endsection