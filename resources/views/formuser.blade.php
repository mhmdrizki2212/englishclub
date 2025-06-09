<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Placement Test - English Club</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-tiya-golf-club.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
</head>

<body>

    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="navbar-brand-image" />
                    <span class="navbar-brand-text">
                        English Club
                        <small>Jambi University</small>
                    </span>
                </a>

                <div class="d-lg-none ms-auto me-3">
                    <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample"
                        role="button" aria-controls="offcanvasExample">Member Login</a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ url('/') }}#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ url('/placement') }}">Placement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ route('news') }}">News</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Pioneers Structure</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ url('/core-comittee') }}">Core Comittee</a></li>
                                <li><a class="dropdown-item" href="{{ url('/academic-department') }}">Academic Department</a></li>
                                <li><a class="dropdown-item" href="{{ url('/art-department') }}">Art Department</a></li>
                                <li><a class="dropdown-item" href="{{ url('/media-information') }}">Media, Information and Communications</a></li>
                                <li><a class="dropdown-item" href="{{ url('/public-relations') }}">Public Relations</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="d-none d-lg-block ms-lg-3">
                        <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample"
                            role="button" aria-controls="offcanvasExample">Member Login</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Member Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column">
                <form class="custom-form member-login-form" action="#" method="post" role="form">
                    <div class="member-login-form-body">
                        <div class="mb-4">
                            <label class="form-label mb-2" for="member-login-number">Membership No.</label>
                            <input type="text" name="member-login-number" id="member-login-number" class="form-control"
                                placeholder="11002560" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label mb-2" for="member-login-password">Password</label>
                            <input type="password" name="member-login-password" id="member-login-password"
                                pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password" required=""/>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>
                        <div class="col-lg-5 col-md-7 col-8 mx-auto">
                            <button type="submit" class="form-control">Login</button>
                        </div>
                        <div class="text-center my-4">
                            <a href="#">Forgotten password?</a>
                        </div>
                    </div>
                </form>
                <div class="mt-auto mb-5">
                    <p>
                        <strong class="text-white me-3">Any Questions?</strong>
                        <a href="tel: 010-020-0340" class="contact-link">010-020-0340</a>
                    </p>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#3D405B" fill-opacity="1"
                    d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                </path>
            </svg>
        </div>

        <!-- Form untuk Biodata -->
        <div class="container mt-5">
            <div class="form-container p-5 shadow-sm rounded">
                <h3>Input Your Biodata First!</h3>

                <!-- Pesan kesalahan validasi -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Formulir -->
                <form id="biodataForm" action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required
                            placeholder="Masukkan Alamat Email">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" required
                            placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nim" name="nim" required
                            placeholder="Masukkan NIM">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>

        <!-- Modal Konfirmasi -->
        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Memulai Kuis</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Anda akan memulai Placement Test. Mohon perhatikan petunjuk di bawah ini sebelum memulai.</p>
                        <div style="text-align: left; padding: 15px; background-color: #f8f9fa; border-radius: 8px;">
                            <ul style="padding-left: 0; list-style: none;">
                                <li class="d-flex align-items-center mb-2"><i class="bi bi-card-checklist me-2"></i>
                                    Kuis terdiri dari 50 soal.</li>
                                <li class="d-flex align-items-center mb-2"><i class="bi bi-clock-fill me-2"></i> Waktu
                                    pengerjaan 60 menit.</li>
                                <li class="d-flex align-items-center mb-2"><i class="bi bi-shield-check me-2"></i>
                                    Kerjakan dengan jujur dan mandiri.</li>
                                <li class="d-flex align-items-center"><i class="bi bi-exclamation-triangle-fill me-2"></i>
                                    Tes hanya dapat dikerjakan satu kali.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" id="startQuizBtn">Mulai Kuis</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('biodataForm');
        const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
        const startQuizBtn = document.getElementById('startQuizBtn');

        // Menambahkan event listener ke form
        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Mencegah form disubmit langsung
            if (form.checkValidity()) {
                // Menampilkan modal konfirmasi
                confirmationModal.show();
            } else {
                // Menampilkan pesan error validasi jika form tidak valid
                form.reportValidity();
            }
        });

        // Menambahkan event listener ke tombol konfirmasi
        startQuizBtn.addEventListener('click', function () {
            form.submit(); // Submit form jika tombol diklik
        });
    });
</script>

</body>

</html>
