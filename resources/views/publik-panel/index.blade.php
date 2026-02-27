<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>BEM FASILKOM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            scroll-behavior: smooth;
            font-family: 'Segoe UI', sans-serif;
        }

        /* NAVBAR MODERN */
        .navbar {
            backdrop-filter: blur(12px);
            background: rgba(0, 0, 0, 0.6);
            transition: all .4s ease;
            padding: 14px 0;
        }

        /* NAVBAR SAAT SCROLL */
        .navbar.scrolled {
            background: rgba(0, 0, 0, 0.9);
            box-shadow: 0 10px 30px rgba(0, 0, 0, .35);
            padding: 10px 0;
        }

        /* BRAND */
        .navbar-brand {
            font-weight: 800;
            letter-spacing: 1.5px;
        }

        /* NAV LINK */
        .navbar-nav .nav-link {
            position: relative;
            margin-left: 18px;
            font-weight: 500;
            transition: color .3s ease;
        }

        /* UNDERLINE ANIMASI */
        .navbar-nav .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 0%;
            height: 2px;
            background: #0d6efd;
            transition: width .3s ease;
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 100%;
        }

        /* HOVER COLOR */
        .navbar-nav .nav-link:hover {
            color: #0d6efd;
        }

        .hero {
            background:
                linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)),
                url('https://images.unsplash.com/photo-1522071820081-009f0129c71c');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            padding: 0 15px;
        }

        /* HERO TITLE */
        .hero-title {
            font-size: 3.8rem;
            font-weight: 800;
            letter-spacing: 3px;
            animation: glowText 3s ease-in-out infinite alternate;
        }

        /* HERO SUBTITLE */
        .hero-subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            animation: floatText 4s ease-in-out infinite;
        }

        /* HERO BUTTON */
        .hero-btn {
            margin-top: 25px;
            padding: 14px 48px;
            border-radius: 50px;
            transition: all .4s ease;
        }

        /* BUTTON HOVER EFFECT */
        .hero-btn:hover {
            transform: translateY(-6px) scale(1.05);
            box-shadow: 0 15px 35px rgba(13, 110, 253, .5);
        }


        /* GLOW EFFECT TITLE */
        @keyframes glowText {
            from {
                text-shadow: 0 0 10px rgba(13, 110, 253, .4);
            }

            to {
                text-shadow: 0 0 28px rgba(13, 110, 253, .9);
            }
        }

        /* FLOATING SUBTITLE */
        @keyframes floatText {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }

            100% {
                transform: translateY(0);
            }
        }


        section {
            padding: 90px 0;
        }

        .section-title {
            font-weight: 700;
            margin-bottom: 40px;
        }

        /* CEGAH SCROLL KE SAMPING DI HP */
        html,
        body {
            overflow-x: hidden;
        }

        /* SEMUA GAMBAR AGAR TIDAK MELEBAR */
        img {
            max-width: 100%;
            height: auto;
        }

        /* FIX BOOTSTRAP ROW AGAR TIDAK KELUAR LAYAR */
        .row {
            margin-left: 0;
            margin-right: 0;
        }

        /* HERO BIAR PAS DI HP */
        .hero {
            min-height: 100vh;
            width: 100%;
            overflow: hidden;
        }

        /* CONTAINER BIAR TIDAK KELEBARAN */
        .container {
            max-width: 100%;
        }

        /* RESPONSIVE NAVBAR + HERO + FILOSO */

        /* TABLET */
        @media (max-width: 992px) {

            /* HERO */
            .hero-title {
                font-size: 2.8rem;
                letter-spacing: 2px;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .hero-btn {
                padding: 12px 36px;
            }

            /* NAVBAR MENU */
            .navbar-nav {
                background: rgba(0, 0, 0, .9);
                padding: 15px;
                border-radius: 12px;
                margin-top: 10px;
            }

            .navbar-nav .nav-link {
                margin-left: 0;
                padding: 10px 0;
            }

            /* FILOSOFI */
            #filosofi img {
                max-width: 180px;
                margin-bottom: 20px;
            }
        }

        /* HP BESAR */
        @media (max-width: 768px) {

            section {
                padding: 70px 0;
            }

            /* HERO */
            .hero {
                text-align: center;
                padding: 0 20px;
            }

            .hero-title {
                font-size: 2.2rem;
                letter-spacing: 1px;
                line-height: 1.3;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .hero-btn {
                padding: 10px 28px;
                font-size: 14px;
            }

            /* FILOSOFI STACK KE BAWAH */
            #filosofi .row {
                text-align: center;
            }

            #filosofi .col-md-7 {
                margin-top: 20px;
            }
        }

        /* HP KECIL */
        @media (max-width: 480px) {

            .hero-title {
                font-size: 1.8rem;
            }

            .hero-subtitle {
                font-size: 0.95rem;
            }

            .navbar-brand {
                font-size: 1rem;
            }

            .hero-btn {
                padding: 9px 22px;
                font-size: 13px;
            }

            section {
                padding: 60px 0;
            }
        }


        /* filosofi */
        .filosofi-card {
            background: #ffffff;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .filosofi-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        }

        .filosofi-img {
            width: 90px;
            height: 90px;
            object-fit: contain;
            flex-shrink: 0;
        }

        /* DIVISI */
        .division-btn {
            cursor: pointer;
            transition: all .35s ease;
            border-radius: 18px;
            border: 2px solid transparent;
        }

        /* HOVER */
        .division-btn:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, .15);
        }

        /* AKTIF */
        .division-btn.active {
            background: linear-gradient(135deg, #0d6efd, #0b5ed7);
            color: white;
            border-color: rgba(255, 255, 255, .3);
            box-shadow: 0 18px 35px rgba(13, 110, 253, .45);
        }

        .division-btn.active i,
        .division-btn.active small {
            color: white !important;
        }

        /* DEPARTEMEN ACTIVE */
        .departemen-card {
            cursor: pointer;
            transition: all .3s ease;
        }

        .departemen-card.active {
            background: linear-gradient(135deg, #0d6efd, #0b5ed7);
            color: white;
            transform: translateY(-6px);
            box-shadow: 0 18px 35px rgba(13, 110, 253, .45);
        }

        .departemen-card.active small,
        .departemen-card.active h5 {
            color: white !important;
        }

        /* ANIMASI KLIK DEPARTEMEN */
        @keyframes deptClick {
            0% {
                transform: scale(1) translateY(0);
            }

            50% {
                transform: scale(1.05) translateY(-6px);
            }

            100% {
                transform: scale(1) translateY(-6px);
            }
        }

        .departemen-card.active {
            animation: deptClick .35s ease;
        }

        /* DETAIL DEPARTEMEN ANIMASI */
        #departemen-detail {
            animation: deptDetail .45s ease;
        }

        @keyframes deptDetail {
            from {
                opacity: 0;
                transform: translateY(25px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* DETAIL BIDANG ANIMASI */
        #bidang-detail {
            animation: fadeSlide .4s ease;
        }

        @keyframes fadeSlide {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* MEMBER */
        .member-card img {
            height: 220px;
            object-fit: cover;
        }

        .member-card .card {
            border-radius: 18px;
            transition: .3s;
        }

        .member-card .card:hover {
            transform: scale(1.03);
        }


        /* BERITA UMUM */
        .news-card {
            border-radius: 18px;
            overflow: hidden;
            background: #fff;
            border: 1.5px solid rgba(13, 110, 253, 0.15);
            transition: all .35s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        /* HOVER CARD */
        .news-card:hover {
            border-color: rgba(13, 110, 253, 0.6);
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(13, 110, 253, 0.15);
        }

        /* GAMBAR */
        .news-card img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            transition: transform .5s ease;
        }

        /* ZOOM GAMBAR */
        .news-card:hover img {
            transform: scale(1.08);
        }

        /* BODY FLEX BIAR TINGGI RATA */
        .news-card .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        /* BADGE TANGGAL */
        .news-date {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(13, 110, 253, .95);
            color: white;
            font-size: .75rem;
            padding: 6px 12px;
            border-radius: 50px;
            font-weight: 600;
            backdrop-filter: blur(4px);
        }

        /* META INFO (JAM & LOKASI) */
        .news-meta {
            font-size: 13px;
            color: #6c757d;
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            align-items: center;
            margin-bottom: 8px;
        }

        .news-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* SLIDER */
        .berita-slider {
            overflow-x: auto;
            scroll-behavior: smooth;
            scroll-snap-type: x mandatory;
            padding-bottom: 10px;
        }

        .berita-slider::-webkit-scrollbar {
            height: 6px;
        }

        .berita-slider::-webkit-scrollbar-thumb {
            background: #0d6efd;
            border-radius: 10px;
        }

        /* CARD KHUSUS SLIDER */
        .berita-slider .news-card {
            width: 300px;
            flex-shrink: 0;
            scroll-snap-align: start;
        }

        /* GRID  */
        #berita-grid-container {
            overflow-x: hidden;
        }

        #berita-grid-container .news-card {
            width: 100%;
        }

        /* JUDUL GRID */
        .berita-grid-title {
            font-weight: 700;
            letter-spacing: .5px;
        }

        /* PAGINATION */
        .pagination .page-link {
            border-radius: 50px !important;
            margin: 0 4px;
            border: none;
            color: #0d6efd;
            font-weight: 600;
        }

        .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, #0d6efd, #0b5ed7);
            color: white;
            box-shadow: 0 10px 20px rgba(13, 110, 253, .35);
        }

        /* SAMAKAN TINGGI CARD DI SLIDER */
        .berita-slider {
            display: flex;
            align-items: stretch;
        }

        /* CARD PUNYA TINGGI TETAP */
        .berita-slider .news-card {
            height: 360px;
        }

        /* BATASI JUDUL 2 BARIS */
        .news-card h5 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* BATASI DESKRIPSI 3 BARIS */
        .news-card p {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* BODY FLEX BIAR RAPI */
        .news-card .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Animasi saat ganti Slider → Grid */
        #berita-slider-container,
        #berita-grid-container {
            transition: all .45s ease;
        }

        /* posisi awal */
        .berita-show {
            opacity: 1;
            transform: translateX(0);
        }

        .berita-hide-left {
            opacity: 0;
            transform: translateX(-80px);
        }

        .berita-hide-right {
            opacity: 0;
            transform: translateX(80px);
        }


        /* RESPONSIVE BERITA*/
        /* Tablet */
        @media (max-width: 992px) {
            .news-card img {
                height: 190px;
            }
        }

        /* HP */
        @media (max-width: 768px) {
            .news-card img {
                height: 170px;
            }

            .berita-slider .news-card {
                width: 85%;
            }

            .news-meta {
                font-size: 12px;
                gap: 10px;
            }
        }

        /* HP kecil */
        @media (max-width: 576px) {
            .news-card img {
                height: 160px;
            }

            .news-date {
                font-size: 10px;
                padding: 5px 10px;
            }
        }

        /* FOOTER */
        .footer-ultimate {
            background: radial-gradient(circle at top, #111, #000);
        }

        .footer-ultimate h3 {
            letter-spacing: 2px;
        }

        .footer-ultimate .form-control {
            background: #111;
            border: none;
            color: white;
        }

        .footer-ultimate .form-control::placeholder {
            color: rgba(255, 255, 255, .5);
        }

        .footer-ultimate .form-control:focus {
            box-shadow: none;
            background: #111;
            color: white;
        }

        .footer-link a {
            color: rgba(255, 255, 255, .6);
            text-decoration: none;
            display: inline-block;
            transition: all .3s ease;
        }

        .footer-link a:hover {
            color: #0d6efd;
            transform: translateX(6px);
        }

        .footer-divider {
            border-color: rgba(255, 255, 255, .1);
        }

        .social-icon {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .08);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all .35s ease;
        }

        .social-icon:hover {
            background: var(--brand-primary);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px var(--brand-glow);
        }
    </style>

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">BEM FASILKOM</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="nav" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#filosofi">Filosofi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#visi">Visi Misi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#struktur">Struktur</a></li>
                    <li class="nav-item"><a class="nav-link" href="#berita">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero">
        <div class="container text-center">

            <h1 class="hero-title" data-aos="fade-up">
                {{ $hero->title }}
            </h1>

            <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="300">
                {{ $hero->subtitle }}
            </p>

            <a href="#filosofi" class="btn btn-primary btn-lg hero-btn" data-aos="zoom-in" data-aos-delay="600">
                Jelajahi
            </a>

        </div>
    </section>


    <!-- FILOSOFI -->
    <section id="filosofi" style="scroll-margin-top:1px; overflow-x:hidden;">

        <div class="container">

            <!-- JUDUL -->
            <h2 class="text-center section-title mb-4" data-aos="fade-up">
                Filosofi Kabinet
            </h2>

            <!-- LOGO KABINET -->
            <div class="text-center mb-5" data-aos="zoom-in">
                <img src="{{ $logo && $logo->logo_kabinet ? asset('storage/' . $logo->logo_kabinet) : asset('images/default.png') }}"
                    class="img-fluid filosofi-logo" style="max-width: 300px;">
            </div>


            <!-- FILOSOFI NAMA -->
            <h4 class="fw-bold text-primary text-center mt-5 mb-4">
                Filosofi Nama
            </h4>

            <div class="mb-5">

                @forelse($filosofiNama as $item)
                    <div class="filosofi-card mb-4 p-4 rounded-4">
                        <h6 class="fw-bold mb-2">
                            {{ $item->nama_kabinet }}
                        </h6>
                        <p class="text-muted mb-0">
                            {{ $item->deskripsi_kabinet }}
                        </p>
                    </div>
                @empty
                    <div class="text-center text-muted">
                        Data filosofi belum tersedia.
                    </div>
                @endforelse

            </div>


            <!-- FILOSOFI LOGO -->
            <!-- FILOSOFI LOGO -->
            <h4 class="fw-bold text-primary text-center mt-5 mb-4">
                Filosofi Logo
            </h4>

            <div class="container">

                @forelse ($filosofiLogo as $item)
                    <div
                        class="filosofi-card mb-4 p-4 rounded-4 
            d-flex align-items-center 
            flex-column flex-md-row">

                        @if ($item->gambar_logo)
                            <img src="{{ asset('storage/' . $item->gambar_logo) }}"
                                class="filosofi-img mb-3 mb-md-0 me-md-4" width="120">
                        @endif

                        <div>
                            <h6 class="fw-bold mb-2">
                                {{ $item->nama_logo }}
                            </h6>
                            <p class="text-muted mb-0">
                                {{ $item->deskripsi_logo }}
                            </p>
                        </div>
                    </div>

                @empty
                    <div class="text-center text-muted">
                        Data filosofi logo belum tersedia.
                    </div>
                @endforelse

            </div>



        </div>
    </section>




    <!-- VISI MISI -->
    <section id="visi" class="bg-light">
        <div class="container">

            <!-- JUDUL -->
            <h2 class="text-center section-title" data-aos="fade-up">
                Visi & Misi
            </h2>

            <div class="row g-4">

                <!-- VISI -->
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card shadow-sm border-0 rounded-4">
                        <div class="card-body p-4 text-center">
                            <h4 class="fw-bold text-primary mb-3">Visi</h4>
                            <p class="mb-0 text-start">
                                {{ $vimi->visi }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- MISI -->
                <div class="col-md-6" data-aos="fade-left">
                    <div class="card h-100 shadow-sm border-0 rounded-4">
                        <div class="card-body p-4">
                            <h4 class="fw-bold text-primary text-center mb-3">Misi</h4>
                            <ul class="mb-0 ps-3">
                                @foreach (array_filter(explode("\n", $vimi->misi)) as $item)
                                    <li class="mb-3">{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STRUKTUR ORGANISASI -->
    <section id="struktur">
        <div class="container">
            <h2 class="text-center section-title" data-aos="fade-up">
                Struktur Organisasi
            </h2>

            <!-- ROW 1 -->
            <div class="row g-4 text-center mb-4">

                <!-- BPH -->
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="card division-btn p-4" onclick="showBidang('BPH', bidangData.BPH, this)">
                        <i class="bi bi-diagram-3-fill fs-1 text-primary mb-3"></i>
                        <h5 class="fw-bold">BPH</h5>
                        <small class="text-muted">Badan Pengurus Harian</small>
                    </div>
                </div>

                <!-- PSDM -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card division-btn p-4" onclick="showBidang('PSDM', bidangData.PSDM, this)">
                        <i class="bi bi-people-fill fs-1 text-success mb-3"></i>
                        <h5 class="fw-bold">Bidang PSDM</h5>
                        <small class="text-muted">Pengembangan SDM</small>
                    </div>
                </div>

                <!-- MINAT BAKAT -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card division-btn p-4" onclick="showBidang('Minat & Bakat', bidangData.MINBAT, this)">
                        <i class="bi bi-trophy-fill fs-1 text-warning mb-3"></i>
                        <h5 class="fw-bold">Bidang Minat & Bakat</h5>
                        <small class="text-muted">Potensi & Kreativitas</small>
                    </div>
                </div>

            </div>

            <!-- ROW 2 -->
            <div class="row g-4 text-center mb-5 justify-content-center">

                <!-- SOSPOL -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card division-btn p-4"
                        onclick="showBidang('Sosial Politik', bidangData.SOSPOL, this)">
                        <i class="bi bi-megaphone-fill fs-1 text-danger mb-3"></i>
                        <h5 class="fw-bold">Bidang Sosial Politik</h5>
                        <small class="text-muted">Advokasi & Kajian</small>
                    </div>
                </div>

                <!-- KOMINFO -->
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card division-btn p-4" onclick="showBidang('Kominfo', bidangData.KOMINFO, this)">
                        <i class="bi bi-wifi fs-1 text-info mb-3"></i>
                        <h5 class="fw-bold">Bidang Kominfo</h5>
                        <small class="text-muted">Media & Informasi</small>
                    </div>
                </div>

            </div>

            <!-- DETAIL BIDANG -->
            <div id="bidang-detail" class="d-none" data-aos="fade-up">
                <div class="text-center mb-5" id="bidang-header">
                    <h3 class="fw-bold" id="bidang-nama"></h3>

                    <img id="bidang-foto" class="rounded-circle shadow mb-3"
                        style="width:150px;height:150px;object-fit:cover">

                    <h5 class="fw-semibold mb-1" id="bidang-koor"></h5>
                    <p class="text-muted mb-0" id="bidang-nama-koor"></p>
                </div>

                <div class="row g-4" id="departemen-list"></div>
                <!-- DETAIL DEPARTEMEN -->
                <div id="departemen-detail" class="d-none mt-5">
                    <hr class="mb-4">

                    <h4 class="fw-bold text-center" id="dept-nama"></h4>

                    <!-- KOORDINATOR -->
                    <div class="text-center my-4">
                        <img id="dept-koor-foto" class="rounded-circle shadow mb-2"
                            style="width:130px;height:130px;object-fit:cover">
                        <h6 class="fw-bold mb-0" id="dept-koor-jabatan"></h6>
                        <p class="text-muted" id="dept-koor-nama"></p>
                    </div>

                    <!-- VISI MISI -->
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm rounded-4 p-4">
                                <h6 class="fw-bold text-primary">Visi</h6>
                                <p id="dept-visi" class="mb-0"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm rounded-4 p-4">
                                <h6 class="fw-bold text-primary">Misi</h6>
                                <ul id="dept-misi" class="mb-0"></ul>
                            </div>
                        </div>
                    </div>

                    <!-- ANGGOTA -->
                    <h5 class="fw-bold text-center mb-3">Anggota</h5>
                    <div class="row justify-content-center g-4" id="dept-anggota"></div>
                </div>

            </div>

        </div>
    </section>


    <!-- BERITA SLIDER -->
    <section id="berita">

        <h2 class="text-center section-title" data-aos="fade-up">
            Berita Fasilkom
        </h2>

        {{-- ANIMASI DARI SLIDER KE GRID --}}
        <div id="berita-slider-container" class="berita-show">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold">📰 Berita Terbaru</h4>
                <button class="btn btn-primary btn-sm rounded-pill px-4" onclick="showAllBerita()">
                    Lihat Semua
                </button>
            </div>

            <div class="berita-slider d-flex gap-4">

                <div class="card news-card position-relative">
                    <span class="news-date">20 Jan 2026</span>
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d">

                    <div class="card-body">
                        <h6 class="fw-bold mb-1">
                            Pelantikan Pengurus BEM FASILKOM
                        </h6>

                        <div class="news-meta">
                            <span>🕒 09.00 WIB</span>
                            <span>📍 Aula FASILKOM</span>
                        </div>

                        <p class="text-muted small mb-0">
                            Langkah awal kepengurusan baru BEM FASILKOM.
                        </p>
                    </div>
                </div>

                <div class="card news-card position-relative">
                    <span class="news-date">2 Feb 2026</span>
                    <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786">

                    <div class="card-body">
                        <h6 class="fw-bold mb-1">
                            Seminar Teknologi & Digitalisasi
                        </h6>

                        <div class="news-meta">
                            <span>🕒 13.00 WIB</span>
                            <span>📍 Ruang Seminar Gedung A</span>
                        </div>

                        <p class="text-muted small mb-0">
                            Meningkatkan literasi digital mahasiswa.
                        </p>
                    </div>
                </div>

            </div>
        </div>


        <!-- GRID BERITA -->


        {{-- ANIMASI DARI GRID KE SLIDER --}}
        <div id="berita-grid-container" class="berita-hide-right" style="display:none;">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="berita-grid-title">📚 Semua Berita</h4>
                <button class="btn btn-outline-secondary btn-sm rounded-pill px-4" onclick="showSlider()">
                    Kembali
                </button>
            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card news-card position-relative h-100">
                        <span class="news-date">15 Feb 2026</span>
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b">

                        <div class="card-body">
                            <h5 class="fw-bold mt-2">
                                FASILKOM Peduli Sosial
                            </h5>

                            <div class="news-meta">
                                <span>🕒 08.00 WIB</span>
                                <span>📍 Desa Binaan Karawang</span>
                            </div>

                            <p class="text-muted small">
                                Program pengabdian masyarakat sebagai bentuk kepedulian mahasiswa.
                            </p>

                            <a href="#" class="btn btn-outline-primary btn-sm rounded-pill">
                                Baca Selengkapnya →
                            </a>
                        </div>

                    </div>
                </div>

                <!-- ulangi sampai 9 -->

            </div>

            <!-- PAGINATION -->
            <nav class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link">‹</a>
                    </li>
                    <li class="page-item active"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="page-link">2</a></li>
                    <li class="page-item"><a class="page-link">3</a></li>
                    <li class="page-item">
                        <a class="page-link">›</a>
                    </li>
                </ul>
            </nav>

        </div>
    </section>


    <!-- KONTAK -->
    <section id="kontak" class="bg-dark text-white">
        <div class="container">

            <!-- JUDUL -->
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-white">Kontak Kami</h2>
                <p class="text-white-50 mt-2">
                    Media resmi BEM FASILKOM untuk aspirasi, informasi, dan kolaborasi
                </p>
            </div>

            <div class="row justify-content-center g-4">

                <!-- EMAIL -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card bg-transparent border border-light rounded-4 h-100">
                        <div class="card-body text-center text-white">
                            <i class="bi bi-envelope-fill fs-1 mb-3 text-primary"></i>
                            <h5 class="fw-bold">Email</h5>
                            <p class="mb-0">bemfasilkom@unsika.ac.id</p>
                        </div>
                    </div>
                </div>

                <!-- INSTAGRAM -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="card bg-transparent border border-light rounded-4 h-100">
                        <div class="card-body text-center text-white">
                            <i class="bi bi-instagram fs-1 mb-3 text-danger"></i>
                            <h5 class="fw-bold">Instagram</h5>
                            <p class="mb-0">@bemfasilkom</p>
                        </div>
                    </div>
                </div>

                <!-- YOUTUBE -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card bg-transparent border border-light rounded-4 h-100">
                        <div class="card-body text-center text-white">
                            <i class="bi bi-youtube fs-1 mb-3 text-danger"></i>
                            <h5 class="fw-bold">YouTube</h5>
                            <p class="mb-0">BEM FASILKOM UNSIKA</p>
                        </div>
                    </div>
                </div>

                <!-- TIKTOK -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="250">
                    <div class="card bg-transparent border border-light rounded-4 h-100">
                        <div class="card-body text-center text-white">
                            <i class="bi bi-tiktok fs-1 mb-3"></i>
                            <h5 class="fw-bold">TikTok</h5>
                            <p class="mb-0">@bemfasilkom</p>
                        </div>
                    </div>
                </div>

                <!-- LINKEDIN -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card bg-transparent border border-light rounded-4 h-100">
                        <div class="card-body text-center text-white">
                            <i class="bi bi-linkedin fs-1 mb-3 text-info"></i>
                            <h5 class="fw-bold">LinkedIn</h5>
                            <p class="mb-0">BEM FASILKOM UNSIKA</p>
                        </div>
                    </div>
                </div>

                <!-- LOKASI -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="350">
                    <div class="card bg-transparent border border-light rounded-4 h-100">
                        <div class="card-body text-center text-white">
                            <i class="bi bi-geo-alt-fill fs-1 mb-3 text-warning"></i>
                            <h5 class="fw-bold">Sekretariat</h5>
                            <p class="mb-0">
                                Fakultas Ilmu Komputer<br>
                                Universitas Singaperbangsa Karawang
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <footer class="footer-ultimate text-white pt-5">
        <div class="container">

            <div class="row g-4">

                <!-- BRAND -->
                <div class="col-lg-4">
                    <h3 class="fw-bold">BEM FASILKOM</h3>
                    <p class="text-white-50">
                        Badan Eksekutif Mahasiswa Fakultas Ilmu Komputer<br>
                        Universitas Singaperbangsa Karawang
                    </p>
                    <small class="text-white-50 fst-italic">
                        “Together Moving Forward”
                    </small>
                </div>

                <!-- LINK -->
                <div class="col-lg-2 col-md-4">
                    <h6 class="fw-semibold mb-3">Navigasi</h6>
                    <ul class="list-unstyled footer-link">
                        <li><a href="#filosofi">Filosofi</a></li>
                        <li><a href="#visi">Visi & Misi</a></li>
                        <li><a href="#struktur">Struktur</a></li>
                        <li><a href="#berita">Berita</a></li>
                    </ul>
                </div>

                <!-- KONTAK -->
                <div class="col-lg-3 col-md-4">
                    <h6 class="fw-semibold mb-3">Kontak</h6>
                    <p class="text-white-50 mb-1">
                        <i class="bi bi-geo-alt"></i> Kampus UNSIKA
                    </p>
                    <p class="text-white-50 mb-1">
                        <i class="bi bi-envelope"></i> bem@fasilkom.ac.id
                    </p>
                    <p class="text-white-50">
                        <i class="bi bi-instagram"></i> @bemfasilkom
                    </p>
                </div>

                <!-- NEWSLETTER -->
                <div class="col-lg-3 col-md-4">
                    <h6 class="fw-semibold mb-3">Newsletter</h6>
                    <p class="text-white-50 small">
                        Dapatkan info kegiatan terbaru
                    </p>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email kamu">
                        <button class="btn btn-primary">Join</button>
                    </div>
                </div>

            </div>

            <hr class="footer-divider my-4">

            <div class="d-flex justify-content-between align-items-center flex-wrap pb-3">
                <small class="text-white-50">
                    © 2026 BEM FASILKOM UNSIKA
                </small>

                <div class="d-flex gap-3">
                    <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-tiktok"></i></a>
                </div>
            </div>

        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();

        function showAllBerita() {
            const slider = document.getElementById('berita-slider-container');
            const grid = document.getElementById('berita-grid-container');

            // slider keluar ke kiri
            slider.classList.remove('berita-show');
            slider.classList.add('berita-hide-left');

            setTimeout(() => {
                slider.style.display = 'none';

                grid.style.display = 'block';

                // grid masuk dari kanan
                grid.classList.remove('berita-hide-right');
                grid.classList.add('berita-show');
            }, 400);
        }

        function showSlider() {
            const slider = document.getElementById('berita-slider-container');
            const grid = document.getElementById('berita-grid-container');

            // grid keluar ke kanan
            grid.classList.remove('berita-show');
            grid.classList.add('berita-hide-right');

            setTimeout(() => {
                grid.style.display = 'none';

                slider.style.display = 'block';

                // slider masuk dari kiri
                slider.classList.remove('berita-hide-left');
                slider.classList.add('berita-show');
            }, 400);
        }


        // Aktifkan Navbar Scroll Effect (JS)
        window.addEventListener("scroll", () => {
            const nav = document.querySelector(".navbar");
            nav.classList.toggle("scrolled", window.scrollY > 60);
        });

        // Auto Active Menu Saat Scroll
        const sections = document.querySelectorAll("section[id]");
        const navLinks = document.querySelectorAll(".nav-link");

        window.addEventListener("scroll", () => {
            let current = "";

            sections.forEach(section => {
                const sectionTop = section.offsetTop - 120;
                if (scrollY >= sectionTop) {
                    current = section.getAttribute("id");
                }
            });

            navLinks.forEach(link => {
                link.classList.remove("active");
                if (link.getAttribute("href") === "#" + current) {
                    link.classList.add("active");
                }
            });
        });

        /* DATA STRUKTUR */
        const bidangData = {
            BPH: {
                koor: "Badan Pengurus Harian",
                foto: "https://randomuser.me/api/portraits/men/10.jpg", // Ketua
                struktur: {
                    ketua: {
                        jabatan: "Ketua Umum",
                        nama: "Mulyono",
                        foto: "https://randomuser.me/api/portraits/men/10.jpg",
                        tugas: "Memimpin dan bertanggung jawab atas seluruh organisasi"
                    },
                    wakil: {
                        jabatan: "Wakil Ketua",
                        nama: "FufuFafa",
                        foto: "https://randomuser.me/api/portraits/men/11.jpg",
                        tugas: "Membantu dan menggantikan Ketua Umum"
                    },
                    sekretaris: [{
                            nama: "Gufron",
                            foto: "https://randomuser.me/api/portraits/women/20.jpg"
                        },
                        {
                            nama: "Wowo",
                            foto: "https://randomuser.me/api/portraits/women/21.jpg"
                        }
                    ],
                    bendahara: [{
                            nama: "Rusdi",
                            foto: "https://randomuser.me/api/portraits/men/22.jpg"
                        },
                        {
                            nama: "Rusman",
                            foto: "https://randomuser.me/api/portraits/men/23.jpg"
                        }
                    ]
                }
            },


            PSDM: {
                koor: "Koordinator PSDM",
                namaKoor: "Ahmad Fauzan",
                foto: "https://randomuser.me/api/portraits/men/32.jpg",
                departemen: [{
                        nama: "Departemen Kaderisasi",
                        visi: "Mencetak kader berintegritas dan berjiwa kepemimpinan",
                        misi: [
                            "Melaksanakan kaderisasi berjenjang",
                            "Meningkatkan loyalitas organisasi"
                        ],
                        koor: {
                            jabatan: "Koordinator Kaderisasi",
                            nama: "Rizky Ramadhan",
                            foto: "https://randomuser.me/api/portraits/men/45.jpg"
                        },
                        anggota: [{
                                nama: "A",
                                foto: "https://randomuser.me/api/portraits/men/60.jpg"
                            },
                            {
                                nama: "B",
                                foto: "https://randomuser.me/api/portraits/women/61.jpg"
                            }
                        ]
                    },
                    {
                        nama: "Departemen Pengembangan & Pengawasan",
                        visi: "Meningkatkan kualitas SDM mahasiswa",
                        misi: [
                            "Pengembangan soft skill",
                            "Pengawasan internal organisasi"
                        ],
                        koor: {
                            jabatan: "Koordinator Pengembangan & Pengawasan",
                            nama: "Rizky Ramadhan",
                            foto: "https://randomuser.me/api/portraits/men/45.jpg"
                        },
                        anggota: [{
                                nama: "A",
                                foto: "https://randomuser.me/api/portraits/men/60.jpg"
                            },
                            {
                                nama: "B",
                                foto: "https://randomuser.me/api/portraits/women/61.jpg"
                            }
                        ]
                    }
                ]
            },

            MINBAT: {
                koor: "Koordinator Minat & Bakat",
                namaKoor: "Ahmad Fauzan",
                foto: "https://randomuser.me/api/portraits/women/45.jpg",
                departemen: [{
                        nama: "Departemen Keilmuan",
                        visi: "Meningkatkan akademik mahasiswa",
                        misi: ["Diskusi rutin", "Pendampingan akademik"],
                        koor: {
                            jabatan: "Koordinator Keilmuan",
                            nama: "Rizky Ramadhan",
                            foto: "https://randomuser.me/api/portraits/men/45.jpg"
                        },
                        anggota: [{
                                nama: "A",
                                foto: "https://randomuser.me/api/portraits/men/60.jpg"
                            },
                            {
                                nama: "B",
                                foto: "https://randomuser.me/api/portraits/women/61.jpg"
                            }
                        ]
                    },
                    {
                        nama: "Departemen Olahraga",
                        visi: "Membangun sportivitas dan kebersamaan",
                        misi: ["Turnamen internal", "Latihan rutin"],
                        koor: {
                            jabatan: "Koordinator Olahraga",
                            nama: "Rizky Ramadhan",
                            foto: "https://randomuser.me/api/portraits/men/45.jpg"
                        },
                        anggota: [{
                                nama: "A",
                                foto: "https://randomuser.me/api/portraits/men/60.jpg"
                            },
                            {
                                nama: "B",
                                foto: "https://randomuser.me/api/portraits/women/61.jpg"
                            }
                        ]
                    },
                    {
                        nama: "Departemen Seni Budaya",
                        visi: "Mengembangkan kreativitas dan budaya mahasiswa",
                        misi: ["Event seni", "Pelestarian budaya"],
                        koor: {
                            jabatan: "Koordinator Seni Budaya",
                            nama: "Rizky Ramadhan",
                            foto: "https://randomuser.me/api/portraits/men/45.jpg"
                        },
                        anggota: [{
                                nama: "A",
                                foto: "https://randomuser.me/api/portraits/men/60.jpg"
                            },
                            {
                                nama: "B",
                                foto: "https://randomuser.me/api/portraits/women/61.jpg"
                            }
                        ]
                    }
                ]
            },

            SOSPOL: {
                koor: "Koordinator Sosial Politik",
                namaKoor: "Ahmad Fauzan",
                foto: "https://randomuser.me/api/portraits/men/41.jpg",
                departemen: [{
                        nama: "Departemen Adkesma",
                        visi: "Advokasi kesejahteraan mahasiswa",
                        misi: [
                            "Pendataan permasalahan mahasiswa",
                            "Pendampingan advokasi"
                        ],
                        koor: {
                            jabatan: "Koordinator Adkesma",
                            nama: "Rizky Ramadhan",
                            foto: "https://randomuser.me/api/portraits/men/45.jpg"
                        },
                        anggota: [{
                                nama: "A",
                                foto: "https://randomuser.me/api/portraits/men/60.jpg"
                            },
                            {
                                nama: "B",
                                foto: "https://randomuser.me/api/portraits/women/61.jpg"
                            }
                        ]
                    },
                    {
                        nama: "Departemen Kastrat",
                        visi: "Kajian strategis dan isu kebijakan",
                        misi: [
                            "Diskusi publik",
                            "Kajian kebijakan kampus"
                        ],
                        koor: {
                            jabatan: "Koordinator Kastrat",
                            nama: "Rizky Ramadhan",
                            foto: "https://randomuser.me/api/portraits/men/45.jpg"
                        },
                        anggota: [{
                                nama: "A",
                                foto: "https://randomuser.me/api/portraits/men/60.jpg"
                            },
                            {
                                nama: "B",
                                foto: "https://randomuser.me/api/portraits/women/61.jpg"
                            }
                        ]
                    },
                    {
                        nama: "Departemen Pengabdian Masyarakat",
                        visi: "Penguatan peran sosial mahasiswa",
                        misi: [
                            "Bakti sosial",
                            "Program desa binaan"
                        ],
                        koor: {
                            jabatan: "Koordinator Pengabdian Masyarakat",
                            nama: "Rizky Ramadhan",
                            foto: "https://randomuser.me/api/portraits/men/45.jpg"
                        },
                        anggota: [{
                                nama: "A",
                                foto: "https://randomuser.me/api/portraits/men/60.jpg"
                            },
                            {
                                nama: "B",
                                foto: "https://randomuser.me/api/portraits/women/61.jpg"
                            }
                        ]
                    }
                ]
            },

            KOMINFO: {
                koor: "Koordinator Kominfo",
                namaKoor: "Ahmad Fauzan",
                foto: "https://randomuser.me/api/portraits/men/52.jpg",
                departemen: [{
                        nama: "Departemen Media",
                        visi: "Menyajikan informasi yang kreatif dan edukatif",
                        misi: [
                            "Desain grafis",
                            "Dokumentasi kegiatan"
                        ],
                        koor: {
                            jabatan: "Koordinator Media",
                            nama: "Rizky Ramadhan",
                            foto: "https://randomuser.me/api/portraits/men/45.jpg"
                        },
                        anggota: [{
                                nama: "A",
                                foto: "https://randomuser.me/api/portraits/men/60.jpg"
                            },
                            {
                                nama: "B",
                                foto: "https://randomuser.me/api/portraits/women/61.jpg"
                            }
                        ]
                    },
                    {
                        nama: "Departemen PTI",
                        visi: "Pengembangan teknologi dan sistem informasi",
                        misi: [
                            "Website BEM",
                            "Sistem internal organisasi"
                        ],
                        koor: {
                            jabatan: "Koordinator PTI",
                            nama: "Rizky Ramadhan",
                            foto: "https://randomuser.me/api/portraits/men/45.jpg"
                        },
                        anggota: [{
                            nama: "A",
                            foto: "https://randomuser.me/api/portraits/men/60.jpg"
                        }]
                    },
                    {
                        nama: "Departemen Bisnis & Kemitraan",
                        visi: "Membangun kemandirian finansial organisasi",
                        misi: [
                            "Kerja sama eksternal",
                            "Pengelolaan usaha BEM"
                        ],
                        koor: {
                            jabatan: "Koordinator Bisnis & Kemitraan",
                            nama: "Rizky Ramadhan",
                            foto: "https://randomuser.me/api/portraits/men/45.jpg"
                        },
                        anggota: [{
                                nama: "A",
                                foto: "https://randomuser.me/api/portraits/men/60.jpg"
                            },
                            {
                                nama: "B",
                                foto: "https://randomuser.me/api/portraits/women/61.jpg"
                            }
                        ]
                    }
                ]
            }
        };


        /* TAMPIL BIDANG */
        let activeBidang = null;
        const fotoKoor = document.getElementById("bidang-foto");

        function showBidang(nama, data, el) {
            const detail = document.getElementById("bidang-detail");

            /* JIKA KLIK BIDANG YANG SAMA → TUTUP */
            if (activeBidang === el) {
                el.classList.remove("active");
                detail.classList.add("d-none");
                activeBidang = null;
                return;
            }

            /* RESET SEMUA BIDANG */
            document.querySelectorAll(".division-btn")
                .forEach(btn => btn.classList.remove("active"));

            // reset departemen saat ganti bidang
            document.getElementById("departemen-detail").classList.add("d-none");
            document.querySelectorAll(".departemen-card")
                .forEach(card => card.classList.remove("active"));
            activeDept = null;

            /* AKTIFKAN BIDANG BARU */
            el.classList.add("active");
            activeBidang = el;

            /* TAMPILKAN DETAIL */
            detail.classList.remove("d-none");

            /* RESET ANIMASI DETAIL */
            detail.style.animation = "none";
            detail.offsetHeight; // force reflow
            detail.style.animation = "";

            document.getElementById("bidang-nama").innerText = nama;

            // KHUSUS BPH
            if (data.struktur) {
                fotoKoor.classList.add("d-none");
                document.getElementById("bidang-nama-koor").innerText = "";
                document.getElementById("bidang-koor").innerText = "";
            } else {
                fotoKoor.classList.remove("d-none");
                fotoKoor.src = data.foto;

                document.getElementById("bidang-nama-koor").innerText = data.namaKoor;
                document.getElementById("bidang-koor").innerText = data.koor;
            }

            // KHUSUS BPH → SEMBUNYIKAN FOTO ATAS
            if (data.struktur) {
                fotoKoor.classList.add("d-none");
            } else {
                fotoKoor.classList.remove("d-none");
                fotoKoor.src = data.foto;
            }


            const container = document.getElementById("departemen-list");
            container.innerHTML = "";

            /* KHUSUS BPH */
            if (data.struktur) {
                const s = data.struktur;

                container.innerHTML = `
        <!-- KETUA -->
        <div class="col-12 text-center mb-4">
            <img src="${s.ketua.foto}" class="rounded-circle shadow mb-2"
                style="width:150px;height:150px;object-fit:cover">
            <h5 class="fw-bold">${s.ketua.jabatan}</h5>
            <p class="text-muted">${s.ketua.nama}</p>
        </div>

        <!-- WAKIL -->
        <div class="col-12 text-center mb-5">
            <img src="${s.wakil.foto}" class="rounded-circle shadow mb-2"
                style="width:130px;height:130px;object-fit:cover">
            <h6 class="fw-bold">${s.wakil.jabatan}</h6>
            <p class="text-muted">${s.wakil.nama}</p>
        </div>

        <!-- SEKRETARIS -->
        <div class="col-12">
            <h5 class="fw-bold text-center mb-3">Sekretaris</h5>
        </div>
        <div class="row justify-content-center g-4">
        ${s.sekretaris.map(sec => `
                                        <div class="col-md-3 col-sm-4 col-6 text-center">
                                            <img src="${sec.foto}" class="rounded-circle shadow mb-2"
                                                style="width:120px;height:120px;object-fit:cover">
                                            <p class="fw-semibold mb-0">${sec.nama}</p>
                                        </div>
                                    `).join("")}
        </div>

        <!-- BENDAHARA -->
        <div class="col-12 mt-4">
            <h5 class="fw-bold text-center mb-3">Bendahara</h5>
        </div>
        <div class="row justify-content-center g-4">
        ${s.bendahara.map(bend => `
                                        <div class="col-md-3 col-sm-4 col-6 text-center">
                                            <img src="${bend.foto}" class="rounded-circle shadow mb-2"
                                                style="width:120px;height:120px;object-fit:cover">
                                            <p class="fw-semibold mb-0">${bend.nama}</p>
                                        </div>
                                    `).join("")}
        </div>
    `;
                return;
            }


            /* BIDANG BIASA */
            data.departemen.forEach(dep => {
                container.innerHTML += `
        <div class="col-md-4">
            <div class="card h-100 shadow-sm rounded-4 p-4 text-center departemen-card"
                onclick='toggleDepartemen(${JSON.stringify(dep)}, this)'>
                <h5 class="fw-bold">${dep.nama}</h5>
            </div>
        </div>`;
            });
        }


        /* TAMPIL DEPARTEMEN */
        let activeDept = null;

        function toggleDepartemen(dep, el) {
            const detail = document.getElementById("departemen-detail");

            // klik departemen yang sama → tutup
            if (activeDept === el) {
                el.classList.remove("active");
                detail.classList.add("d-none");
                activeDept = null;
                return;
            }

            // reset semua departemen
            document.querySelectorAll(".departemen-card")
                .forEach(card => card.classList.remove("active"));

            // aktifkan departemen baru
            el.classList.add("active");
            activeDept = el;

            detail.classList.remove("d-none");

            /* RESET ANIMASI DETAIL */
            detail.style.animation = "none";
            detail.offsetHeight; // force reflow
            detail.style.animation = "";

            // JUDUL
            document.getElementById("dept-nama").innerText = dep.nama;

            // KOORDINATOR
            document.getElementById("dept-koor-foto").src = dep.koor.foto;
            document.getElementById("dept-koor-jabatan").innerText = dep.koor.jabatan;
            document.getElementById("dept-koor-nama").innerText = dep.koor.nama;

            // VISI
            document.getElementById("dept-visi").innerText = dep.visi;

            // MISI
            const misiList = document.getElementById("dept-misi");
            misiList.innerHTML = "";
            dep.misi.forEach(m => {
                misiList.innerHTML += `<li>${m}</li>`;
            });

            // ANGGOTA
            const anggotaContainer = document.getElementById("dept-anggota");
            anggotaContainer.innerHTML = "";
            dep.anggota.forEach(a => {
                anggotaContainer.innerHTML += `
            <div class="col-md-2 col-sm-3 col-4 text-center">
                <img src="${a.foto}" class="rounded-circle shadow mb-2"
                     style="width:100px;height:100px;object-fit:cover">
                <p class="fw-semibold mb-0">${a.nama}</p>
            </div>
        `;
            });
        }
    </script>


</body>

</html>
