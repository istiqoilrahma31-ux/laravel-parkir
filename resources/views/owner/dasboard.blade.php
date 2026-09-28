@extends('layout.layout')

@section('title', 'Dashboard Owner')

@section('content')

<h2>Dashboard Owner</h2>

<p>Selamat datang di sistem E-PARKIR.</p>

<div class="row mt-4">

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Total Transaksi</h5>
            <h2>0</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Total Pendapatan</h5>
            <h2>Rp 0</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Kendaraan</h5>
            <h2>0</h2>
        </div>
    </div>

</div>

@endsection