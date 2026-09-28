<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>E-PARKIR</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- BOOTSTRAP ICON -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


    <style>

        /* =========================
           BODY
        ========================= */

        body {
            background-color: #0f0b1e;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }


        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {
            width: 260px;
            height: 100vh;

            position: fixed;
            left: 0;
            top: 0;

            background-color: #161129;

            border-right: 1px solid rgba(255, 255, 255, 0.05);

            display: flex;
            flex-direction: column;
            justify-content: space-between;

            z-index: 100;
        }


        /* =========================
           MAIN CONTENT
        ========================= */

        .main-content {
            margin-left: 260px;

            min-height: 100vh;

            background-color: #0f0b1e;
        }


        /* =========================
           MENU
        ========================= */

        .menu {
            color: #a0aec0;

            text-decoration: none;

            display: flex;
            align-items: center;

            padding: 12px 18px;

            margin: 4px 12px;

            border-radius: 12px;

            font-size: 14px;

            transition: all 0.2s ease;
        }


        /* HOVER + MENU AKTIF */

        .menu:hover,
        .menu.active {
            background-color: #7c3aed;
            color: white;
        }


        /* =========================
           TOPBAR
        ========================= */

        .topbar {
            background-color: #161129;

            border-bottom: 1px solid rgba(255, 255, 255, 0.05);

            padding: 18px 30px;
        }


        /* =========================
           CONTENT
        ========================= */

        .content {
            padding: 30px;
        }


        /* =========================
           CARD
        ========================= */

        .card {
            background-color: #161129 !important;

            border: 1px solid rgba(255, 255, 255, 0.05) !important;

            color: white !important;

            border-radius: 12px;
        }


        /* =========================
           INPUT
        ========================= */

        input::placeholder {
            color: #64748b !important;
        }


    </style>

</head>


<body>


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <div class="sidebar">


        <!-- BAGIAN ATAS SIDEBAR -->

        <div>


            <!-- LOGO -->

            <div class="p-3 d-flex align-items-center mb-2">

                <div
                    style="
                        background-color: #7c3aed;
                        width: 42px;
                        height: 42px;
                        border-radius: 12px;
                    "
                    class="d-flex justify-content-center align-items-center fs-4 fw-bold text-white me-3 flex-shrink-0">

                    P

                </div>


                <div>

                    <div
                        class="fw-bold"
                        style="
                            font-size: 16px;
                            letter-spacing: 0.5px;
                        ">

                        E-PARKIR

                    </div>


                    <div
                        style="
                            font-size: 10px;
                            color: #a855f7;
                            letter-spacing: 1px;
                        ">

                        HALAMAN ADMIN

                    </div>

                </div>

            </div>



            <!-- =================================================
                 MENU SIDEBAR
            ================================================== -->

            <div class="px-2">


                <!-- DASHBOARD -->

                <a
                    href="{{ route('admin.dasboard') }}"
                    class="menu {{ request()->is('admin/dasboard') ? 'active' : '' }}"
                >

                    <i class="bi bi-house-door-fill me-3 fs-5"></i>

                    Dashboard

                </a>



                <!-- DATA USER -->

                <a
                    href="{{ route('admin.user') }}"
                    class="menu {{ request()->is('admin/user') ? 'active' : '' }}"
                >

                    <i class="bi bi-people-fill me-3 fs-5"></i>

                    Data User

                </a>



                <!-- TARIF PARKIR -->

                <a
    href="{{ route('admin.tarif') }}"
    class="menu {{ request()->is('admin/tarif') ? 'active' : '' }}"
>

    <i class="bi bi-cash-stack me-3 fs-5"></i>

    Tarif Parkir

</a>



                <!-- AREA PARKIR -->

                <a
                    href="#"
                    class="menu"
                >

                    <i class="bi bi-grid-fill me-3 fs-5"></i>

                    Area Parkir

                </a>



                <!-- KENDARAAN -->

                <a
                    href="#"
                    class="menu"
                >

                    <i class="bi bi-car-front-fill me-3 fs-5"></i>

                    Kendaraan

                </a>



                <!-- LOG AKTIVITAS -->

                <a
                    href="#"
                    class="menu"
                >

                    <i class="bi bi-clock-history me-3 fs-5"></i>

                    Log Aktivitas

                </a>


            </div>

        </div>



        <!-- =====================================================
             PROFIL BAWAH
        ====================================================== -->

        <div
            class="p-3 m-3"
            style="
                background-color: #1f1838;
                border-radius: 12px;
                border: 1px solid rgba(255,255,255,0.05);
            "
        >

            <div class="d-flex justify-content-between align-items-center">


                <!-- PROFIL -->

                <div class="d-flex align-items-center overflow-hidden">


                    <div
                        style="
                            background-color: #7c3aed;
                            width: 35px;
                            height: 35px;
                            border-radius: 8px;
                        "
                        class="d-flex justify-content-center align-items-center fw-bold text-white me-2 flex-shrink-0"
                    >

                        A

                    </div>


                    <div class="text-truncate">

                        <div
                            class="fw-bold text-truncate"
                            style="
                                font-size: 12px;
                                color: #fff;
                            "
                        >

                            Admin E-Parkir

                        </div>


                        <div
                            style="
                                font-size: 10px;
                                color: #a855f7;
                            "
                        >

                            Administrator

                        </div>

                    </div>

                </div>



                <!-- LOGOUT -->

                <form
                    action="/logout"
                    method="POST"
                    class="m-0"
                >

                    @csrf

                    <button
                        type="submit"
                        class="btn text-white p-0 border-0 bg-transparent"
                        title="Logout"
                    >

                        <i
                            class="bi bi-box-arrow-right fs-5"
                            style="color: #a0aec0;"
                        ></i>

                    </button>

                </form>


            </div>

        </div>


    </div>



    <!-- =====================================================
         KONTEN KANAN
    ====================================================== -->

    <div class="main-content">


        <!-- TOPBAR -->

        <div
            class="topbar d-flex justify-content-between align-items-center"
        >


            <!-- JUDUL HALAMAN -->

            <h5
                class="mb-0 fw-semibold"
                style="font-size: 18px;"
            >

                @yield('title', 'Dashboard')

            </h5>



            <!-- ADMIN -->

            <div
                class="d-flex align-items-center"
                style="
                    font-size: 14px;
                    color: #cbd5e1;
                "
            >

                <i class="bi bi-person-circle me-2 fs-5"></i>

                Admin

            </div>


        </div>



        <!-- ISI HALAMAN -->

        <div class="content">

            @yield('content')

        </div>


    </div>


</body>

</html>