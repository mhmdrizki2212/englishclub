<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Placement Test - English Club</title>
      <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/templatemo-tiya-golf-club.css') }}" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">

    <style>
        /* Ensure the text is centered and has a margin from the navbar */
        .placement-text {
            text-align: center;
            color: white;
            margin-top: 100px; /* Adjust to ensure space from navbar */
        }

        /* Remove the white background and container */
        .about-section {
            background-color: transparent;
            margin-top: 0;
            padding-top: 100px; /* Added padding to push text further down */
        }

        .start-button-container {
            text-align: center;
            margin-top: 20px;
        }

        .mb-4 {
            text-align: center;
        }
    </style>
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
                    <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="https://elearning.ec.librarynew.unja.ac.id"
                        role="button" aria-controls="offcanvasExample">Member Login</a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item"><a class="nav-link click-scroll" href="{{ url('/') }}#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link click-scroll" href="{{ route('about') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link click-scroll" href="{{ url('/placement') }}">Placement</a></li>
                        <li class="nav-item"><a class="nav-link click-scroll" href="{{ route('news.index') }}">News</a></li>
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
                        <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="https://elearning.ec.librarynew.unja.ac.id"
                            role="button" aria-controls="offcanvasExample">Member Login</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Member Login Offcanvas -->
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
                        <a href="tel: 010-020-0340" class="contact-link">
                            010-020-0340
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Hero Section -->
        <section class="hero-section d-flex justify-content-center align-items-center position-relative" id="home"
            style="background-image: url('{{ asset('images/background.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh;">
            <div class="section-overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.4);"></div>
        </section>

        <!-- Placement Test Info Section -->
        <section class="about-section section-padding position-relative" style="margin-top: -800px; z-index: 3;">
            <div class="container">
                        <!-- Removed the white background -->
                        <div class="placement-text">
                            <h1 class="fw-bold text-white bg-center">Placement Test</h1>
                            <p class="mb-4 text-white">
                                Welcome to the placement test, Click the button below to begin your placement test
                            </p>
                        </div>

                        <!-- Start button -->
                        <div class="start-button-container">
                            <a href="{{ route('placement.biodata') }}" class="btn custom-btn custom-border-btn">Start</a>
                        </div>
            </div>
        </section>
    </main>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
