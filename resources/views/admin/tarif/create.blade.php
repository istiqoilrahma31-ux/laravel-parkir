@extends('layout.layout')

@section('content')

<div class="container-fluid">

    <!-- JUDUL -->
    <div class="mb-4">
        <h2 class="fw-bold mb-1">
            Tambah Tarif Parkir
        </h2>

        <p class="text-secondary mb-0">
            Tambahkan tarif parkir kendaraan
        </p>
    </div>


    <!-- FORM TAMBAH TARIF -->
    <div class="card">

        <div class="card-body">

            <form action="{{ route('admin.tarif.store') }}" method="POST">

                @csrf

                <!-- JENIS KENDARAAN -->
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Jenis Kendaraan
                    </label>

                    <select name="jenis_kendaraan"
                            class="form-select"
                            required>

                        <option value="">
                            -- Pilih Jenis Kendaraan --
                        </option>

                        <option value="motor">
                            Motor
                        </option>

                        <option value="mobil">
                            Mobil
                        </option>

                        <option value="lainnya">
                            Lainnya
                        </option>

                    </select>

                    @error('jenis_kendaraan')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>


                <!-- TARIF PER JAM -->
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Tarif Per Jam
                    </label>

                    <input type="number"
                           name="tarif_per_jam"
                           class="form-control"
                           placeholder="Contoh: 3000"
                           min="0"
                           required>

                    @error('tarif_per_jam')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>


                <!-- TOMBOL -->
                <div class="d-flex gap-2">

                    <button type="submit"
                            class="btn"
                            style="background-color: #7c3aed; color: white;">

                        <i class="bi bi-save"></i>
                        Simpan Tarif

                    </button>


                    <a href="{{ route('admin.tarif') }}"
                       class="btn btn-secondary">

                        <i class="bi bi-arrow-left"></i>
                        Kembali

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection