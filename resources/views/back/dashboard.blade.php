<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Judul halaman akan dinamis, dengan judul default 'Dashboard' --}}
    <title>@yield('title', 'Dashboard') - Admin English Club</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f6fa;
        }
        .sidebar {
            width: 260px;
            background-color: #3D405B;
            color: white;
            min-height: 100vh;
            position: fixed;
            padding-top: 1rem;
            transition: all 0.3s;
        }
        .sidebar-brand-text {
            font-size: 1.1rem;
            font-weight: bold;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            font-size: 0.95rem;
            border-left: 3px solid transparent;
            transition: all 0.3s;
        }
        .sidebar .nav-link:hover {
            background-color: rgba(242, 204, 143, 0.1);
            color: white;
            border-left: 3px solid #F2CC8F;
        }
        .sidebar .nav-link.active {
            background-color: #F2CC8F;
            color: #3D405B;
            font-weight: bold;
            border-left: 3px solid #E07A5F;
        }
        .sidebar .nav-link i {
            margin-right: 10px;
        }
        .main-content {
            margin-left: 260px;
            padding: 2rem;
            transition: all 0.3s;
        }
    </style>
</head>
<body>

    <div class="sidebar d-flex flex-column">
        <div class="text-center mb-4 px-2">
            <h4 class="sidebar-brand-text">English Club UNJA</h4>
            <small class="text-white-50">Admin Panel</small>
        </div>
        <nav class="nav flex-column">
            {{-- Link akan menjadi 'active' berdasarkan route yang sedang diakses --}}
            <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="bi bi-grid-1x2-fill"></i> Dashboard
            </a>
            <a class="nav-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}" href="{{ route('admin.news.index') }}">
                <i class="bi bi-newspaper"></i> News
            </a>
            <a class="nav-link {{ request()->routeIs('admin.placement-test.*') ? 'active' : '' }}" href="{{ route('admin.placement-test.index') }}">
    <i class="bi bi-card-checklist"></i> Placement Test
</a>
            <a class="nav-link {{ request()->routeIs('admin.quiz-history.*') ? 'active' : '' }}" href="{{ route('admin.quiz-history.index') }}">
    <i class="bi bi-clock-history"></i> Quiz History
</a>
            <hr class="text-white-50 mx-3">
            {{-- Tambahkan link logout atau lainnya di sini --}}
             
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="nav-link bg-transparent border-0 text-white w-100 text-left">
                <i class="bi bi-box-arrow-right"></i> Logout
            </button>
        </form>
        </nav>
        <div class="mt-auto p-3 text-center">
            <small class="text-white-50">&copy; {{ date('Y') }} English Club</small>
        </div>
    </div>

    <div class="main-content">
        {{-- Konten dari halaman lain akan ditampilkan di sini --}}
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    {{-- Jika halaman lain butuh script tambahan, akan di-push ke sini --}}
    @stack('scripts')
</body>
</html>
