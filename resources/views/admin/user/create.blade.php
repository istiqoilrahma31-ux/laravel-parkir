@extends('layout.layout')

@section('content')

<div class="container-fluid">

    <!-- JUDUL -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">
                Tambah User
            </h2>

            <p class="text-secondary mb-0">
                Tambahkan pengguna baru E-PARKIR
            </p>
        </div>

        <a href="{{ route('admin.user') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>

    </div>


    <!-- FORM TAMBAH USER -->
    <div class="card" style="max-width: 600px;">

        <div class="card-body">

            <form action="{{ route('admin.user.store') }}" method="POST">
                @csrf

                <!-- NAMA LENGKAP -->
                <div class="mb-3">
                    <label class="form-label">
                        Nama Lengkap
                    </label>

                    <input
                        type="text"
                        name="nama_lengkap"
                        class="form-control"
                        placeholder="Masukkan nama lengkap"
                    >
                </div>


                <!-- USERNAME -->
                <div class="mb-3">
                    <label class="form-label">
                        Username
                    </label>

                    <input
                        type="text"
                        name="username"
                        class="form-control"
                        placeholder="Masukkan username"
                    >
                </div>


                <!-- PASSWORD -->
                <div class="mb-3">
                    <label class="form-label">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Masukkan password"
                    >
                </div>


                <!-- ROLE -->
                <div class="mb-3">
                    <label class="form-label">
                        Role
                    </label>

                    <select name="role" class="form-select">

                        <option value="">-- Pilih Role --</option>
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                        <option value="owner">Owner</option>

                    </select>
                </div>


                <!-- STATUS -->
                <div class="mb-4">
                    <label class="form-label">
                        Status Aktif
                    </label>

                    <select name="status_aktif" class="form-select">

                        <option value="1">Aktif</option>
                        <option value="0">Nonaktif</option>

                    </select>
                </div>


                <!-- TOMBOL -->
                <div class="d-flex gap-2">

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i>
                        Simpan User
                    </button>

                    <a href="{{ route('admin.user') }}" class="btn btn-secondary">
                        Batal
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection