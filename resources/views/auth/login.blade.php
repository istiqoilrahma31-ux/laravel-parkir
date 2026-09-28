<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - E-Parkir Kabasa</title>
    <!-- Menggunakan Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .glass-card {
            background: rgba(30, 15, 50, 0.65);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .glass-input {
            background: rgba(20, 10, 35, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }
        .glass-input:focus {
            border-color: rgba(168, 85, 247, 0.8);
            outline: none;
        }
    </style>
</head>
<body class="bg-[#0b0415] text-white font-sans min-h-screen flex items-center justify-center relative overflow-hidden">

    <!-- Background Glow Effects -->
    <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-purple-900/30 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] bg-indigo-900/20 rounded-full blur-[120px] pointer-events-none"></div>

    <!-- Main Container Card -->
    <div class="glass-card rounded-3xl p-6 md:p-8 w-full max-w-4xl shadow-2xl grid grid-cols-1 md:grid-cols-2 gap-8 items-center relative z-10 mx-4">
        
        <!-- SISI KIRI: Gambar Ilustrasi E-Parkir Gedung (Sesuai Konsep Gambar) -->
        <div class="hidden md:block relative h-[420px] rounded-2xl overflow-hidden shadow-inner border border-white/10">
            <img src="https://images.unsplash.com/photo-1590674899484-d5640e854abe?auto=format&fit=crop&w=800&q=80" 
                 alt="Area E-Parkir Kabasa" 
                 class="w-full h-full object-cover brightness-90">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex flex-col justify-end p-6">
                <span class="text-xs uppercase tracking-widest text-purple-300 font-semibold">Sistem Pintar</span>
                <h3 class="text-xl font-bold text-white">E-Parkir Kabasa</h3>
                <p class="text-xs text-gray-300 mt-1">Solusi manajemen area parkir gedung modern dan terintegrasi.</p>
            </div>
        </div>

        <!-- SISI KANAN: Form Login -->
        <div class="flex flex-col justify-center">
            
            <!-- Logo & Header -->
            <div class="text-center md:text-left mb-6">
                <div class="flex items-center justify-center md:justify-start space-x-2 mb-2">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-tr from-purple-600 to-indigo-400 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-square-parking text-white text-sm"></i>
                    </div>
                    <span class="font-bold text-lg tracking-wide text-purple-200">E-Parkir Kabasa</span>
                </div>
                <h2 class="text-2xl font-bold tracking-tight text-white">SELAMAT DATANG</h2>
                <p class="text-xs text-gray-400 mt-1">Masuk ke Akun Anda untuk mengelola parkir</p>
            </div>

            <!-- Pesan Error Validasi -->
            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-500/20 border border-red-500/30 rounded-xl text-red-200 text-xs">
                    {{ $errors->first() }}
                </div>
            @endif

            <!-- Form Input -->
            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Email / Nama Pengguna -->
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-gray-400">
                        <i class="fa-regular fa-user text-sm"></i>
                    </span>
                    <input type="text" name="email" value="{{ old('email') }}" required autofocus
                           class="glass-input text-sm rounded-xl block w-full pl-10 pr-4 py-3 text-white placeholder-gray-400 transition"
                           placeholder="Email atau Nama Pengguna">
                </div>

                <!-- Kata Sandi -->
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-gray-400">
                        <i class="fa-solid fa-lock text-sm"></i>
                    </span>
                    <input type="password" name="password" required
                           class="glass-input text-sm rounded-xl block w-full pl-10 pr-10 py-3 text-white placeholder-gray-400 transition"
                           placeholder="Kata Sandi">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-gray-400 cursor-pointer">
                        <i class="fa-regular fa-eye text-sm"></i>
                    </span>
                </div>

                <!-- Lupa Kata Sandi -->
                <div class="flex items-center justify-end text-xs">
                    <a href="#" class="text-purple-300 hover:text-purple-200 transition">Lupa Kata Sandi?</a>
                </div>

                <!-- Tombol Masuk -->
                <button type="submit" 
                        class="w-full py-3 px-4 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-500 hover:to-indigo-500 text-white font-medium rounded-xl shadow-lg shadow-purple-600/30 transition text-sm">
                    MASUK
                </button>
            </form>

            <!-- Divider Sosial Media -->
            <div class="relative my-5 text-center">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-white/10"></div>
                </div>
                <span class="relative px-3 bg-[#130822] text-[11px] text-gray-400">atau masuk dengan</span>
            </div>

            <!-- Tombol Sosial Media (Google, Facebook, Microsoft) -->
            <div class="flex justify-center space-x-3">
                <a href="#" class="w-10 h-10 rounded-xl glass-input flex items-center justify-center hover:bg-white/10 transition text-sm">
                    <i class="fa-brands fa-google text-red-400"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-xl glass-input flex items-center justify-center hover:bg-white/10 transition text-sm">
                    <i class="fa-brands fa-facebook-f text-blue-400"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-xl glass-input flex items-center justify-center hover:bg-white/10 transition text-sm">
                    <i class="fa-brands fa-microsoft text-sky-400"></i>
                </a>
            </div>

            <!-- Daftar Akun -->
            <p class="text-center text-[11px] text-gray-400 mt-5">
                Belum punya akun? <a href="#" class="text-purple-300 font-medium hover:underline">Daftar di sini</a>
            </p>
        </div>

    </div>

</body>
</html>