<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>English Club</title>

    <!-- CSS FILES -->
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
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="about.html">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/placement">Placement</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="news.html">News</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Pioneers Structure</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="event-listing.html">Event Listing</a></li>

                                <li><a class="dropdown-item" href="event-detail.html">Event Detail</a></li>
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


        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

            <div class="section-overlay"></div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200" style="display: block">
                <path fill="#3D405B" fill-opacity="1"
                    d="M0,160L34.3,140C68.6,120,137,100,206,102.7C274.3,105,343,130,411,135C480,140,549,115,617,123.7C685.7,133,754,168,823,178C891.4,188,960,172,1029,158C1097.1,144,1166,132,1234,122C1302.9,112,1371,104,1406,100.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z" />
            </svg>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <h2 class="text-white">Welcome to the club</h2>

                        <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                            <span>English Club is</span>
                            <span class="cd-words-wrapper">
                                <b class="is-visible">Modern</b>
                                <b>Creative</b>
                                <b>Lifestyle</b>
                            </span>
                        </h1>

                        <div class="custom-btn-group">
                            <a href="#section_2" class="btn custom-btn smoothscroll me-3">Our Story</a>

                            <a href="#section_3" class="link smoothscroll">Become a member</a>
                        </div>
                    </div>
                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 160">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,80L34.3,64C68.6,48,137,32,206,30.3C274.3,28,343,69.5,411,72C480,74.5,549,53.5,617,61.4C685.7,69.5,754,106.5,823,120C891.4,133.5,960,122.5,1029,112C1097.1,101,1166,90,1234,80C1302.9,69,1371,58,1406,53.3L1440,48L1440,160L1405.7,160C1371.4,160,1303,160,1234,160C1165.7,160,1097,160,1029,160C960,160,891,160,823,160C754.3,160,686,160,617,160C548.6,160,480,160,411,160C342.9,160,274,160,206,160C137.1,160,69,160,34,160L0,160Z">
                </path>
            </svg>
        </section>


        <section class="about-section section-padding" id="section_about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                        <h2 class="mb-3 fw-bold text-dark">"English Club"</h2>

                        <p class="mb-4">
                            English Club adalah salah satu organisasi mahasiswa di Universitas Jambi yang berfokus pada
                            pengembangan kemampuan bahasa Inggris melalui kegiatan edukatif, kompetitif, dan
                            kolaboratif. Kami aktif mengadakan pelatihan, lomba, hingga pengabdian masyarakat demi
                            menciptakan lingkungan belajar yang suportif.
                        </p>

                        <a href="about.html" class="btn rounded-pill px-4 py-2"
                            style="background-color: var(--custom-btn-bg-color); color: var(--dark-color); border: none;"
                            onmouseover="this.style.backgroundColor='var(--custom-btn-bg-hover-color)'"
                            onmouseout="this.style.backgroundColor='var(--custom-btn-bg-color)'">
                            Selengkapnya
                        </a>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="row g-4">

                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="bi bi-people-fill fs-1 me-3" style="color: var(--primary-color);"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1" style="color: var(--secondary-color);">Membangun
                                            Jaringan</h5>
                                        <p class="mb-0" style="color: var(--p-color);">Kolaborasi antar anggota &
                                            organisasi lain.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="bi bi-box-seam fs-1 me-3" style="color: var(--primary-color);"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1" style="color: var(--secondary-color);">Pengembangan
                                            Diri</h5>
                                        <p class="mb-0" style="color: var(--p-color);">Meningkatkan profesionalisme &
                                            kepercayaan diri.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="bi bi-image fs-1 me-3" style="color: var(--primary-color);"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1" style="color: var(--secondary-color);">Berbagi
                                            Pengetahuan</h5>
                                        <p class="mb-0" style="color: var(--p-color);">Sharing ilmu & pengalaman sesama
                                            anggota.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="bi bi-shield-check fs-1 me-3" style="color: var(--primary-color);"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1" style="color: var(--secondary-color);">Proyek Bersama
                                        </h5>
                                        <p class="mb-0" style="color: var(--p-color);">Mengerjakan kegiatan dalam tim.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="section-bg-image">
            <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)"
                    d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z"
                    stroke-width="0"></path>
            </svg>

            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8">
                        <h2 class="mb-4 text-white">Social Media</h2>

                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="#" class="d-flex align-items-center justify-content-center rounded-3 social-icon"
                                style="background-color: #FF0000;">
                                <i class="bi bi-youtube text-white fs-3"></i>
                            </a>

                            <a href="#" class="d-flex align-items-center justify-content-center rounded-3 social-icon"
                                style="background-color: #8EC6E6;">
                                <i class="bi bi-instagram text-white fs-3"></i>
                            </a>

                            <a href="#" class="d-flex align-items-center justify-content-center rounded-3 social-icon"
                                style="background-color: #25D366;">
                                <i class="bi bi-whatsapp text-white fs-3"></i>
                            </a>

                            <a href="#" class="d-flex align-items-center justify-content-center rounded-3 social-icon"
                                style="background-color: #0A66C2;">
                                <i class="bi bi-linkedin text-white fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)"
                    d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z"
                    stroke-width="0"></path>
            </svg>
        </section>

        <section class="events-section section-bg section-padding" id="section_news">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h2 class="mb-lg-3">Latest News</h2>
                    </div>

                    <!-- Berita 1 -->
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
                                    <img src="images/WhatsApp Image 2025-04-22 at 15.06.27_103bc441.jpg"
                                        class="custom-block-image img-fluid" alt="">

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

                    <!-- Berita 2 -->
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
                                    <img src="images/WhatsApp Image 2025-04-22 at 15.06.27_f34364a5.jpg"
                                        class="custom-block-image img-fluid" alt="">

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

    <footer class="simple-footer">
        <div class="footer-wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                <path fill="#81B29A" fill-opacity="1"
                    d="M0,0L60,16C120,32,240,64,360,80C480,96,600,96,720,80C840,64,960,32,1080,16C1200,0,1320,0,1380,0L1440,0L1440,100L1380,100C1320,100,1200,100,1080,100C960,100,840,100,720,100C600,100,480,100,360,100C240,100,120,100,60,100L0,100Z">
                </path>
            </svg>
        </div>
    </footer>



    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>