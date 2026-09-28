<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>E-Parkir halaman admin</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #0b0714;
            color: #ffffff;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        /* SIDEBAR */
        sidebar {
            width: 260px;
            background-color: #130e21;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px;
            border-right: 1px solid #231b38;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 30px;
        }

        .brand-icon {
            background-color: #8b3dff;
            color: white;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            font-weight: bold;
        }

        .brand-title h2 {
            font-size: 16px;
            letter-spacing: 0.5px;
        }

        .brand-title span {
            font-size: 10px;
            color: #a29bfe;
        }

        .menu-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 8px;
            flex-grow: 1;
        }

        .menu-item a {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 15px;
            color: #8c85a0;
            text-decoration: none;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s;
        }

        .menu-item.active a,
        .menu-item a:hover {
            background-color: #8b3dff;
            color: white;
        }

        .user-profile {
            background-color: #1a132b;
            padding: 12px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 1px solid #2d2247;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-info img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
        }

        .user-info h4 {
            font-size: 13px;
        }

        .user-info span {
            font-size: 10px;
            color: #a29bfe;
        }

        /* MAIN */
        .main-content {
            flex-grow: 1;
            padding: 30px;
            overflow-y: auto;
            background: radial-gradient(circle at top right, #1d1135 0%, #0b0714 50%);
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .welcome-text h1 {
            font-size: 22px;
            margin-bottom: 5px;
        }

        .welcome-text p {
            font-size: 13px;
            color: #8c85a0;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            background-color: #161026;
            border: 1px solid #2d2247;
            padding: 10px 15px 10px 38px;
            border-radius: 20px;
            color: white;
            font-size: 13px;
            width: 250px;
            outline: none;
        }

        .search-box i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #8c85a0;
            font-size: 12px;
        }

        .notif-btn {
            background-color: #161026;
            border: 1px solid #2d2247;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #a29bfe;
        }

        /* CARDS */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .card {
            background-color: #150f24;
            border: 1px solid #231b38;
            border-radius: 16px;
            padding: 20px;
        }

        .card-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 12px;
        }

        .card-title {
            font-size: 11px;
            color: #8c85a0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .card-icon {
            background-color: #231b38;
            color: #b886fb;
            width: 40px;
            height: 40px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-value {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .card-desc {
            font-size: 11px;
            color: #8c85a0;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .card-desc.success {
            color: #00cec9;
        }

        /* BOTTOM */
        .bottom-section {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
        }

        .section-box {
            background-color: #150f24;
            border: 1px solid #231b38;
            border-radius: 16px;
            padding: 20px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .section-header h3 {
            font-size: 15px;
        }

        .section-header p {
            font-size: 11px;
            color: #8c85a0;
        }

        .dropdown-filter {
            background-color: #1c1430;
            border: 1px solid #2d2247;
            color: white;
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 11px;
        }

        .chart-placeholder {
            height: 200px;
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            padding-top: 20px;
            position: relative;
            border-bottom: 1px solid #231b38;
        }

        .chart-legend {
            display: flex;
            gap: 20px;
            font-size: 11px;
            margin-top: 15px;
            color: #8c85a0;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .dot.purple {
            background-color: #b886fb;
        }

        .dot.pink {
            background-color: #ff7675;
        }

        .donut-placeholder {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .donut-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 12px solid #2b1f48;
            border-top-color: #b886fb;
            border-right-color: #8b3dff;
            transform: rotate(45deg);
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <sidebar>

        <div>

            <div class="brand">
                <div class="brand-icon">P</div>

                <div class="brand-title">
                    <h2>E-PARKIR</h2>
                    <span>HALAMAN ADMIN</span>
                </div>
            </div>

            <ul class="menu-list">

                <!-- DASHBOARD -->
                <li class="menu-item active">
                    <a href="{{ route('admin.dasboard') }}">
                        <i class="fa-solid fa-house"></i>
                        Dashboard
                    </a>
                </li>

                <!-- USER -->
                <li class="menu-item">
                    <a href="{{ url('/admin/user') }}">
                        <i class="fa-solid fa-users"></i>
                        Data User
                    </a>
                </li>

                <!-- TARIF -->
                <li class="menu-item">
                    <a href="{{ url('/admin/tarif') }}">
                        <i class="fa-solid fa-money-bill"></i>
                        Tarif Parkir
                    </a>
                </li>

                <!-- AREA -->
                <li class="menu-item">
                    <a href="{{ url('/admin/area') }}">
                        <i class="fa-solid fa-border-all"></i>
                        Area Parkir
                    </a>
                </li>

                <!-- KENDARAAN -->
                <li class="menu-item">
                    <a href="{{ url('/admin/kendaraan') }}">
                        <i class="fa-solid fa-car"></i>
                        Kendaraan
                    </a>
                </li>

                <!-- LOG -->
                <li class="menu-item">
                    <a href="{{ url('/admin/log') }}">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        Log Aktivitas
                    </a>
                </li>

            </ul>

        </div>


        <!-- PROFIL ADMIN -->
        <div class="user-profile">

            <div class="user-info">

                <img src="https://via.placeholder.com/35" alt="Avatar">

                <div>
                    <h4>ISTIQOIL RAHMA</h4>
                    <span>Admin E-parkir</span>
                </div>

            </div>

            <i class="fa-solid fa-right-from-bracket"
                style="color:#8c85a0; cursor:pointer;">
            </i>

        </div>

    </sidebar>


    <!-- KONTEN UTAMA -->
    <div class="main-content">

        <!-- HEADER -->
        <div class="header-top">

            <div class="welcome-text">

                <h1>
                    Selamat Datang di E-Parkir Kabasa
                </h1>

                <p>
                    HALAMAN INI UNTUK ADMIN
                </p>

            </div>


            <div class="header-actions">

                <div class="search-box">

                    <i class="fa-solid fa-magnifying-glass"></i>

                    <input type="text"
                        placeholder="Cari Nopol / No Tiket...">

                </div>


                <div class="notif-btn">

                    <i class="fa-solid fa-bell"></i>

                </div>

            </div>

        </div>


        <!-- 4 KARTU -->
        <div class="stats-grid">


            <!-- PENDAPATAN -->
            <div class="card">

                <div class="card-top">

                    <span class="card-title">
                        Pendapatan Hari Ini
                    </span>

                    <div class="card-icon">
                        <i class="fa-solid fa-wallet"></i>
                    </div>

                </div>

                <div class="card-value">
                    Rp 2.450.000
                </div>

                <div class="card-desc success">

                    <i class="fa-solid fa-arrow-up"></i>

                    +12.4% dr kemarin

                </div>

            </div>


            <!-- KENDARAAN -->
            <div class="card">

                <div class="card-top">

                    <span class="card-title">
                        Kendaraan Aktif
                    </span>

                    <div class="card-icon">
                        <i class="fa-solid fa-car"></i>
                    </div>

                </div>

                <div class="card-value">

                    412

                    <span style="font-size:13px;font-weight:normal;color:#8c85a0;">
                        Unit
                    </span>

                </div>

                <div class="card-desc"
                    style="color:#b886fb;">

                    <i class="fa-solid fa-circle"
                        style="font-size:8px;">
                    </i>

                    Di dalam gedung

                </div>

            </div>


            <!-- SLOT -->
            <div class="card">

                <div class="card-top">

                    <span class="card-title">
                        Sisa Slot Parkir
                    </span>

                    <div class="card-icon">
                        <i class="fa-solid fa-grip"></i>
                    </div>

                </div>

                <div class="card-value">

                    88

                    <span style="font-size:13px;font-weight:normal;color:#8c85a0;">
                        / 500
                    </span>

                </div>

                <div class="card-desc">

                    Kapasitas kritis (17.6%)

                </div>

            </div>


            <!-- TIKET -->
            <div class="card">

                <div class="card-top">

                    <span class="card-title">
                        Total Tiket Masuk
                    </span>

                    <div class="card-icon">
                        <i class="fa-solid fa-ticket"></i>
                    </div>

                </div>

                <div class="card-value">

                    1.289

                    <span style="font-size:13px;font-weight:normal;color:#8c85a0;">
                        Tiket
                    </span>

                </div>

                <div class="card-desc success">

                    <i class="fa-solid fa-arrow-up"></i>

                    +8.2%

                    <span style="color:#8c85a0;margin-left:3px;">
                        Rata-rata mingguan
                    </span>

                </div>

            </div>

        </div>


        <!-- GRAFIK -->
        <div class="bottom-section">


            <!-- TREN -->
            <div class="section-box">

                <div class="section-header">

                    <div>

                        <h3>
                            Tren Kunjungan Parkir
                        </h3>

                        <p>
                            Analisis per jam lalu lintas kendaraan masuk & keluar
                        </p>

                    </div>


                    <select class="dropdown-filter">

                        <option>
                            Hari Ini
                        </option>

                        <option>
                            Minggu Ini
                        </option>

                    </select>

                </div>


                <div class="chart-placeholder">

                    <div style="
                        width:100%;
                        text-align:center;
                        color:#4a3d6d;
                        font-size:12px;
                        position:absolute;
                        top:40%;
                    ">

                        [ Area Grafik Tren Per Jam (06:00 - 12:00) ]

                    </div>

                </div>


                <div class="chart-legend">

                    <div class="legend-item">

                        <div class="dot purple"></div>

                        Kendaraan Masuk

                    </div>


                    <div class="legend-item">

                        <div class="dot pink"></div>

                        Kendaraan Keluar

                    </div>

                </div>

            </div>


            <!-- DISTRIBUSI -->
            <div class="section-box">

                <div class="section-header">

                    <div>

                        <h3>
                            Distribusi Kendaraan
                        </h3>

                        <p>
                            Perbandingan jenis kendaraan hari ini
                        </p>

                    </div>

                </div>


                <div class="donut-placeholder">

                    <div class="donut-circle"></div>

                </div>


                <div class="chart-legend"
                    style="justify-content:center;gap:15px;">

                    <div class="legend-item">

                        <div class="dot"
                            style="background-color:#8b3dff;">
                        </div>

                        Mobil

                    </div>


                    <div class="legend-item">

                        <div class="dot"
                            style="background-color:#b886fb;">
                        </div>

                        Motor

                    </div>


                    <div class="legend-item">

                        <div class="dot"
                            style="background-color:#2b1f48;">
                        </div>

                        Truk/Bus

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>