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
        {{-- ... --}}
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
                            <a class="nav-link click-scroll" href="{{ route('news.index') }}">News</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Pioneers Structure</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('department.core') }}">Core Comittee</a></li>
                        <li><a class="dropdown-item" href="{{ route('department.academic') }}">Academic Department</a></li>
                        <li><a class="dropdown-item" href="{{ route('department.art') }}">Art Department</a></li>
                        <li><a class="dropdown-item" href="{{ route('department.media') }}">Media, Information and Communications</a></li>
                        <li><a class="dropdown-item" href="{{ route('department.pr') }}">Public Relations</a></li>
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

        <section class="events-section section-bg section-padding" id="section_news">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h2 class="mb-lg-3">Latest News</h2>
                    </div>

                    @forelse ($news as $item)
                    <div class="row custom-block mb-3">
                        <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                            <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">{{ $item->created_at->format('d') }}</h6>
                                <strong class="text-white">{{ $item->created_at->format('M Y') }}</strong>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                            <div class="custom-block-image-wrap">
                                <a href="#">
                                    <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('images/news-default.jpg') }}"
                                        class="custom-block-image img-fluid" alt="{{ $item->title }}">
                                    <i class="custom-block-icon bi-link"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 order-3 order-lg-0">
                            <div class="custom-block-info mt-2 mt-lg-0">
                                <a href="#" class="events-title mb-3">{{ $item->title }}</a>

                                <p class="mb-0">{{ Str::limit(strip_tags($item->content), 250) }}</p>

                                <div class="d-flex flex-wrap border-top mt-4 pt-3">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="custom-block-span">Posted on:</span>
                                        <p class="mb-0">{{ $item->created_at->format('d F Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center">
                        <h4 class="text-muted">There is no news yet.</h4>
                        <p>Please come back later.</p>
                    </div>
                    @endforelse

                    <div class="col-12 d-flex justify-content-center mt-5">
                        {{ $news->links() }}
                    </div>

                </div>
            </div>
        </section>

    </main>

    {{-- Script bagian bawah bisa disesuaikan dengan kebutuhan Anda --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/click-scroll.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
