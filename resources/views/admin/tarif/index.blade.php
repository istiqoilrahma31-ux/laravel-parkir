@extends('layout.layout')

@section('title', 'Tarif Parkir')

@section('content')

<div class="container-fluid">

    <!-- JUDUL -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">
                Tarif Parkir
            </h2>

            <p class="mb-0" style="color: #a0aec0;">
                Kelola tarif parkir E-PARKIR
            </p>

        </div>


        <!-- TOMBOL TAMBAH -->
<a href="{{ route('admin.tarif.create') }}"
   class="btn"
   style="background-color: #7c3aed; color: white;">
    <i class="bi bi-plus-lg"></i> Tambah Tarif
</a>

    </div>



    <!-- CARD TARIF -->

    <div
        class="card"
        style="
            background-color: #161129 !important;
            border: 1px solid rgba(124, 58, 237, 0.25) !important;
            border-radius: 16px;
        "
    >

        <div class="card-body p-4">


            <!-- TABEL -->

            <div class="table-responsive">

                <table
                    class="table align-middle mb-0"
                    style="color: white;"
                >

                    <thead>

                        <tr
                            style="
                                background-color: #1d1535;
                                border-bottom: 1px solid #2b2145;
                            "
                        >

                            <th class="py-3 px-3">
                                No
                            </th>

                            <th class="py-3">
                                Jenis Kendaraan
                            </th>

                            <th class="py-3">
                                Tarif Per Jam
                            </th>

                            <th class="py-3">
                                Tarif Harian
                            </th>

                            <th class="py-3">
                                Status
                            </th>

                            <th class="py-3 text-center">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        <!-- DATA 1 -->

                        <tr
                            style="
                                border-bottom: 1px solid #2b2145;
                            "
                        >

                            <td class="px-3">
                                1
                            </td>

                            <td>
                                Motor
                            </td>

                            <td>
                                Rp 3.000
                            </td>

                            <td>
                                Rp 20.000
                            </td>

                            <td>

                                <span
                                    class="badge px-3 py-2"
                                    style="
                                        background-color: #22c55e;
                                        border-radius: 7px;
                                    "
                                >

                                    Aktif

                                </span>

                            </td>

                            <td class="text-center">

                                <button
                                    class="btn btn-sm me-2"
                                    style="
                                        background-color: #7c3aed;
                                        color: white;
                                    "
                                >

                                    <i class="bi bi-pencil"></i>

                                </button>


                                <button
                                    class="btn btn-sm"
                                    style="
                                        background-color: #e6294d;
                                        color: white;
                                    "
                                >

                                    <i class="bi bi-trash"></i>

                                </button>

                            </td>

                        </tr>



                        <!-- DATA 2 -->

                        <tr
                            style="
                                border-bottom: 1px solid #2b2145;
                            "
                        >

                            <td class="px-3">
                                2
                            </td>

                            <td>
                                Mobil
                            </td>

                            <td>
                                Rp 5.000
                            </td>

                            <td>
                                Rp 35.000
                            </td>

                            <td>

                                <span
                                    class="badge px-3 py-2"
                                    style="
                                        background-color: #22c55e;
                                        border-radius: 7px;
                                    "
                                >

                                    Aktif

                                </span>

                            </td>

                            <td class="text-center">

                                <button
                                    class="btn btn-sm me-2"
                                    style="
                                        background-color: #7c3aed;
                                        color: white;
                                    "
                                >

                                    <i class="bi bi-pencil"></i>

                                </button>


                                <button
                                    class="btn btn-sm"
                                    style="
                                        background-color: #e6294d;
                                        color: white;
                                    "
                                >

                                    <i class="bi bi-trash"></i>

                                </button>

                            </td>

                        </tr>



                        <!-- DATA 3 -->

                        <tr
                            style="
                                border-bottom: 1px solid #2b2145;
                            "
                        >

                            <td class="px-3">
                                3
                            </td>

                            <td>
                                Truk / Bus
                            </td>

                            <td>
                                Rp 10.000
                            </td>

                            <td>
                                Rp 60.000
                            </td>

                            <td>

                                <span
                                    class="badge px-3 py-2"
                                    style="
                                        background-color: #22c55e;
                                        border-radius: 7px;
                                    "
                                >

                                    Aktif

                                </span>

                            </td>

                            <td class="text-center">

                                <button
                                    class="btn btn-sm me-2"
                                    style="
                                        background-color: #7c3aed;
                                        color: white;
                                    "
                                >

                                    <i class="bi bi-pencil"></i>

                                </button>


                                <button
                                    class="btn btn-sm"
                                    style="
                                        background-color: #e6294d;
                                        color: white;
                                    "
                                >

                                    <i class="bi bi-trash"></i>

                                </button>

                            </td>

                        </tr>


                    </tbody>

                </table>

            </div>



            <!-- FOOTER -->

            <div class="d-flex justify-content-between align-items-center mt-3">

                <div
                    style="
                        color: #a0aec0;
                        font-size: 14px;
                    "
                >

                    Menampilkan 1 - 3 dari 3 data

                </div>


                <div class="d-flex gap-2">

                    <button
                        class="btn btn-sm"
                        style="
                            background-color: #100b20;
                            border: 1px solid #2b2145;
                            color: #a0aec0;
                        "
                    >

                        <i class="bi bi-chevron-left"></i>

                    </button>


                    <button
                        class="btn btn-sm"
                        style="
                            background-color: #7c3aed;
                            color: white;
                        "
                    >

                        1

                    </button>


                    <button
                        class="btn btn-sm"
                        style="
                            background-color: #100b20;
                            border: 1px solid #2b2145;
                            color: #a0aec0;
                        "
                    >

                        <i class="bi bi-chevron-right"></i>

                    </button>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection