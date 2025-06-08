<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Official website of English Club Jambi University">
    <meta name="author" content="English Club Universitas Jambi">

    <title>About - English Club Universitas Jambi</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-tiya-golf-club.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="English Club Logo" class="navbar-brand-image" />
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
                                pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password" required="">
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
                        <a href="tel: 010-020-0340" class="contact-link">
                            010-020-0340
                        </a>
                    </p>
                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#3D405B" fill-opacity="1"
                    d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                </path>
            </svg>
        </div>

        <section class="hero-section d-flex justify-content-center align-items-center position-relative" id="home"
    style="background-image: url('{{ asset('images/background.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh;">
    <div class="section-overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.4);"></div>

    </section>

<section class="about-section section-padding position-relative" id="section_about" style="margin-top: -800px; z-index: 3;">
    <div class="container">
        <div class="card shadow-lg p-4 p-md-5 border-0 rounded-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 mb-4"> <h2 class="mb-3 fw-bold text-dark text-center">"English Club"</h2>
                        <p class="mb-4">
                            English Club adalah salah satu organisasi mahasiswa di Universitas Jambi yang berfokus pada
                            pengembangan kemampuan bahasa Inggris melalui kegiatan edukatif, kompetitif, dan
                            kolaboratif. Kami aktif mengadakan pelatihan, lomba, hingga pengabdian masyarakat demi
                            menciptakan lingkungan belajar yang suportif.
                        </p>
                    </div>

                    <div class="row mt-4"> <div class="col-md-6 col-12 mb-4 mb-md-0">
                        <h5 class="fw-bold text-dark text-center mb-3">VISI</h5>
                        <p class="text-center">
                            Mengembangkan kemampuan berbahasa Inggris yang unggul, serta membentuk mahasiswa yang berintegritas, kreatif, dan berdaya saing global.
                        </p>
                    </div>

                    <div class="col-md-6 col-12">
                        <h5 class="fw-bold text-dark text-center mb-3">MISI</h5>
                        <ul class="list-unstyled"> <li class="d-flex align-items-start mb-2">
                                <i class="bi bi-check-circle-fill me-2" style="color: var(--primary-color);"></i>
                                <span>Menyelenggarakan pelatihan dan workshop rutin untuk meningkatkan keterampilan berbahasa Inggris.</span>
                            </li>
                            <li class="d-flex align-items-start mb-2">
                                <i class="bi bi-check-circle-fill me-2" style="color: var(--primary-color);"></i>
                                <span>Mengadakan kompetisi internal dan eksternal untuk mengasah kemampuan anggota.</span>
                            </li>
                            <li class="d-flex align-items-start mb-2">
                                <i class="bi bi-check-circle-fill me-2" style="color: var(--primary-color);"></i>
                                <span>Membangun lingkungan belajar yang inklusif dan suportif.</span>
                            </li>
                            <li class="d-flex align-items-start mb-2">
                                <i class="bi bi-check-circle-fill me-2" style="color: var(--primary-color);"></i>
                                <span>Menginisiasi program pengabdian masyarakat yang relevan dengan bahasa Inggris.</span>
                            </li>
                            <li class="d-flex align-items-start mb-2">
                                <i class="bi bi-check-circle-fill me-2" style="color: var(--primary-color);"></i>
                                <span>Membangun kolaborasi dengan organisasi dan lembaga lain.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 mb-4 mt-5"> <h3 class="mb-3 fw-bold text-dark text-center">TUJUAN</h3>
                    <div class="col-12"> <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="bi bi-people-fill fs-1 me-3" style="color: var(--primary-color);"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1" style="color: var(--secondary-color);">Membangun Jaringan</h5>
                                        <p class="mb-0" style="color: var(--p-color);">Kolaborasi antar anggota & organisasi lain.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="bi bi-box-seam fs-1 me-3" style="color: var(--primary-color);"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1" style="color: var(--secondary-color);">Pengembangan Diri</h5>
                                        <p class="mb-0" style="color: var(--p-color);">Meningkatkan profesionalisme & kepercayaan diri.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="bi bi-image fs-1 me-3" style="color: var(--primary-color);"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1" style="color: var(--secondary-color);">Berbagi Pengetahuan</h5>
                                        <p class="mb-0" style="color: var(--p-color);">Sharing ilmu & pengalaman sesama anggota.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="bi bi-shield-check fs-1 me-3" style="color: var(--primary-color);"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1" style="color: var(--secondary-color);">Proyek Bersama</h5>
                                        <p class="mb-0" style="color: var(--p-color);">Mengerjakan kegiatan dalam tim.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="bi bi-shield-check fs-1 me-3" style="color: var(--primary-color);"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1" style="color: var(--secondary-color);">Proyek Bersama</h5>
                                        <p class="mb-0" style="color: var(--p-color);">Mengerjakan kegiatan dalam tim.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="bi bi-shield-check fs-1 me-3" style="color: var(--primary-color);"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1" style="color: var(--secondary-color);">Proyek Bersama</h5>
                                        <p class="mb-0" style="color: var(--p-color);">Mengerjakan kegiatan dalam tim.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
    </main>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/click-scroll.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup-options.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        // Simple text rotation for the hero section
        document.addEventListener('DOMContentLoaded', function() {
            var words = document.querySelectorAll('.cd-words-wrapper b');
            var currentIndex = 0;

            function rotateWords() {
                words[currentIndex].classList.remove('is-visible');
                currentIndex = (currentIndex + 1) % words.length;
                words[currentIndex].classList.add('is-visible');
            }

            // Initial visibility
            if (words.length > 0) {
                words[0].classList.add('is-visible');
            }

            setInterval(rotateWords, 3000); // Change word every 3 seconds
        });
    </script>

</body>

</html>