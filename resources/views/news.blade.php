<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Latest news and updates from English Club Jambi University">
    <meta name="author" content="English Club Universitas Jambi">

    <title>News - English Club Universitas Jambi</title>
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
                            <a class="nav-link click-scroll" href="course.html">Course</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ route('news') }}">News</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Pioneers Structure</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="pioneer_inti.blade.php">INTI</a></li>

                                <li><a class="dropdown-item" href="event-detail.html"> ACADEMIC DEPARTMENT</a></li>

                                <li><a class="dropdown-item" href="pioneer_inti.blade.php">ART DEPARTMENT</a></li>

                                <li><a class="dropdown-item" href="event-detail.html">MEDIA, INFORMATION AND COMMUNICATIONS</a></li>

                                <li><a class="dropdown-item" href="pioneer_inti.blade.php">PUBLIC RELATIONS</a></li>
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

        <section class="events-section section-bg section-padding" id="section_news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <h2 class="mb-lg-3">Latest News</h2>
                    </div>

                    <div class="row custom-block mb-3">
                        <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                            <div
                                class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">24</h6>
                                <strong class="text-white">Feb 2025</strong>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                            <div class="custom-block-image-wrap">
                                <a href="news-detail.html">
                                    <img src="{{ asset('images/news/public_speaking_training.jpg') }}"
                                        class="custom-block-image img-fluid" alt="Pelatihan Public Speaking">
                                    <i class="custom-block-icon bi-link"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 order-3 order-lg-0">
                            <div class="custom-block-info mt-2 mt-lg-0">
                                <a href="news-detail.html" class="events-title mb-3">Pelatihan Public Speaking</a>
                                <p class="mb-0">English Club Jambi University mengadakan pelatihan public speaking untuk
                                    meningkatkan kemampuan berbicara para anggotanya dalam bahasa Inggris.</p>
                                <div class="d-flex flex-wrap border-top mt-4 pt-3">
                                    <div class="mb-4 mb-lg-0">
                                        <div class="d-flex flex-wrap align-items-center mb-1">
                                            <span class="custom-block-span">Tanggal:</span>
                                            <p class="mb-0">24 Februari 2025</p>
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="custom-block-span">Lokasi:</span>
                                            <p class="mb-0">Gedung Rektorat Lt. 2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row custom-block custom-block-bg">
                        <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                            <div
                                class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">28</h6>
                                <strong class="text-white">Feb 2025</strong>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                            <div class="custom-block-image-wrap">
                                <a href="news-detail.html">
                                    <img src="{{ asset('images/news/new_member_bonding.jpg') }}"
                                        class="custom-block-image img-fluid" alt="Kegiatan Bonding Anggota Baru">
                                    <i class="custom-block-icon bi-link"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 order-3 order-lg-0">
                            <div class="custom-block-info mt-2 mt-lg-0">
                                <a href="news-detail.html" class="events-title mb-3">Kegiatan Bonding Anggota Baru</a>
                                <p class="mb-0">Sebagai bagian dari penyambutan anggota baru, English Club
                                    menyelenggarakan kegiatan bonding dengan berbagai games dan diskusi ringan berbahasa
                                    Inggris.</p>
                                <div class="d-flex flex-wrap border-top mt-4 pt-3">
                                    <div class="mb-4 mb-lg-0">
                                        <div class="d-flex flex-wrap align-items-center mb-1">
                                            <span class="custom-block-span">Tanggal:</span>
                                            <p class="mb-0">28 Februari 2025</p>
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="custom-block-span">Lokasi:</span>
                                            <p class="mb-0">Taman Kampus UNJA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                        <div class="row custom-block mb-3">
                        <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                            <div
                                class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">24</h6>
                                <strong class="text-white">Feb 2025</strong>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                            <div class="custom-block-image-wrap">
                                <a href="news-detail.html">
                                    <img src="{{ asset('images/news/public_speaking_training.jpg') }}"
                                        class="custom-block-image img-fluid" alt="Pelatihan Public Speaking">
                                    <i class="custom-block-icon bi-link"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 order-3 order-lg-0">
                            <div class="custom-block-info mt-2 mt-lg-0">
                                <a href="news-detail.html" class="events-title mb-3">Pelatihan Public Speaking</a>
                                <p class="mb-0">English Club Jambi University mengadakan pelatihan public speaking untuk
                                    meningkatkan kemampuan berbicara para anggotanya dalam bahasa Inggris.</p>
                                <div class="d-flex flex-wrap border-top mt-4 pt-3">
                                    <div class="mb-4 mb-lg-0">
                                        <div class="d-flex flex-wrap align-items-center mb-1">
                                            <span class="custom-block-span">Tanggal:</span>
                                            <p class="mb-0">24 Februari 2025</p>
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="custom-block-span">Lokasi:</span>
                                            <p class="mb-0">Gedung Rektorat Lt. 2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row custom-block custom-block-bg">
                        <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                            <div
                                class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">28</h6>
                                <strong class="text-white">Feb 2025</strong>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                            <div class="custom-block-image-wrap">
                                <a href="news-detail.html">
                                    <img src="{{ asset('images/news/new_member_bonding.jpg') }}"
                                        class="custom-block-image img-fluid" alt="Kegiatan Bonding Anggota Baru">
                                    <i class="custom-block-icon bi-link"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 order-3 order-lg-0">
                            <div class="custom-block-info mt-2 mt-lg-0">
                                <a href="news-detail.html" class="events-title mb-3">Kegiatan Bonding Anggota Baru</a>
                                <p class="mb-0">Sebagai bagian dari penyambutan anggota baru, English Club
                                    menyelenggarakan kegiatan bonding dengan berbagai games dan diskusi ringan berbahasa
                                    Inggris.</p>
                                <div class="d-flex flex-wrap border-top mt-4 pt-3">
                                    <div class="mb-4 mb-lg-0">
                                        <div class="d-flex flex-wrap align-items-center mb-1">
                                            <span class="custom-block-span">Tanggal:</span>
                                            <p class="mb-0">28 Februari 2025</p>
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="custom-block-span">Lokasi:</span>
                                            <p class="mb-0">Taman Kampus UNJA</p>
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
        // Simple text rotation (if needed on this page, otherwise remove)
        document.addEventListener('DOMContentLoaded', function() {
            var words = document.querySelectorAll('.cd-words-wrapper b');
            var currentIndex = 0;

            function rotateWords() {
                if (words.length === 0) return; // Add check if words don't exist
                words[currentIndex].classList.remove('is-visible');
                currentIndex = (currentIndex + 1) % words.length;
                words[currentIndex].classList.add('is-visible');
            }

            if (words.length > 0) {
                words[0].classList.add('is-visible');
                setInterval(rotateWords, 3000); // Change word every 3 seconds
            }
        });
    </script>

</body>

</html>
