<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <header>
        <div class="profile-page sidebar-collapse">
            <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="400"
                style="background-color: #121212;">
                <div class="container">
                    <div class="navbar-translate"><a class="navbar-brand fira-sans-extrabold txt-primary" href=""
                            rel="tooltip" style="font-size: 36px;">Pendalungan</a>
                        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span
                                class="navbar-toggler-bar bar2"></span><span
                                class="navbar-toggler-bar bar3"></span></button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link smooth-scroll txt-primary fira-sans-regular"
                                    href="#hero" style="padding-right: 52px;">Home</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll txt-primary fira-sans-regular"
                                    href="#about" style="padding-right: 52px;">Tentang</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll txt-primary fira-sans-regular"
                                    href="#service" style="padding-right: 52px;">Layanan</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll txt-primary fira-sans-regular"
                                    href="#contact">Kontak</a></li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </header>
    <div id="hero" class="jumbotron" style="background-color: #121212;">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6 txt-primary">
                    <p>Selamat Datang</p>
                    <h1 class="fira-sans-bold txt-primary">Jelajahi Kreativitas Tanpa Batas Dengan Peralatan Penyiaran
                        Terbaik</h1>
                    <p class="txt-primary fira-sans-regular">Temukan kemampuan luar biasa dalam penyiaran dan streaming
                        dengan koleksi
                        peralatan berkualitas
                        kami. Mulai petualangan visual Anda sekarang!</p>

                    <button class="start-project-button">Start a Project</button>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="jumbotron_img">
                        <img src="{{ asset('images/hero.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="about">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-5 col-lg-5 txt-primary">
                    <div class="jumbotron_img">
                        <img src="{{ asset('images/about.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-7 col-lg-7">
                    <h1 class="fira-sans-bold txt-secondary">Tentang Perusahaan</h1>
                    <p class="txt-secondary fira-sans-regular">Pendalungan Megah Solusi adalah perusahaan teknologi
                        informasi yang
                        berfokus
                        pada pengembangan solusi terkini dalam bidang multimedia, software, dan IoT. Dengan tim yang
                        terampil dan berpengalaman, kami bertekad untuk memberikan solusi yang tepat dan inovatif bagi
                        setiap klien kami.</p>
                    <a class="button-about"><span>Selengkapnya</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="testimoni">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        <h1>Mengapa Memilih Kami</h1>
                        <p>Mendapatkan Lebih dengan Layanan Kami</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 d-flex align-items-center">
                    <div>
                        <img src="{{ asset('images/testimoni/security.png') }}" alt="Icona">
                    </div>
                    <div class="m-3">
                        <h6>Keamanan Terjamin</h6>
                        <p class="card-text lead fira-sans-regular" style="font-size: 16px">Kami mengutamakan keamanan
                            data dengan menggunakan teknologi terkini dan praktik terbaik</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <div>
                        <img src="{{ asset('images/testimoni/analysis.png') }}" alt="Icona">
                    </div>
                    <div class="m-3">
                        <h6>Kemitraan Strategis</h6>
                        <p class="card-text lead fira-sans-regular" style="font-size: 16px">Kami menjalin
                            kemitraanstrategis dengan pelanggan untuk memberikan solusi yang berkelanjutan
                        </p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <div>
                        <img src="{{ asset('images/testimoni/settings.png') }}" alt="Icona">
                    </div>
                    <div class="m-3">
                        <h6>Fleksibilitas Kustomisasi</h6>
                        <p class="card-text lead fira-sans-regular" style="font-size: 16px">Produk kami dapat
                            disesuaikan dengan kebutuhan khusus bisnis Anda memastikan solusi yang
                            efisien</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex align-items-center">
                    <div>
                        <img src="{{ asset('images/testimoni/scalability.png') }}" alt="Icona">
                    </div>
                    <div class="m-3">
                        <h6>Skalabilitas Tak Terbatas</h6>
                        <p class="card-text lead fira-sans-regular" style="font-size: 16px">Solusi kami dapat berkembang
                            seiring pertumbuhan bisnis Anda tanpa mengorbankan kinerja atau
                            keandalan</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <div>
                        <img src="{{ asset('images/testimoni/optimization.png') }}" alt="Icona">
                    </div>
                    <div class="m-3">
                        <h6>Otomatisasi Efisien</h6>
                        <p class="card-text lead fira-sans-regular" style="font-size: 16px">Kami dapat mengotomatisasi
                            proses bisnis Anda, meningkatkan efisiensi dan mengurangi biaya
                            operasional</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <div>
                        <img src="{{ asset('images/testimoni/availability.png') }}" alt="Icona">
                    </div>
                    <div class="m-3">
                        <h6>Ketersediaan Tinggi</h6>
                        <p class="card-text lead fira-sans-regular" style="font-size: 16px">Infrastruktur dirancang demi
                            ketersediaan tinggi, menjaga bisnis berjalan di kondisi yang
                            menuntut</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="service">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        <h1 class="fira-sans-bold">Layanan Kami</h1>
                        <p class="card-text lead fira-sans-regular" style="font-size: 16px; margin-top: 12px">
                            Mendapatkan Lebih dengan
                            Layanan Kami</p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 44px;">
                <div class="col-md-4">
                    <div class="card text-center bg-light shadow-sm rounded-3" style="border: none;">
                        <div class="card-body py-5">
                            <img src="{{ asset('images/service/Computer.png') }}" alt="Icona" class="mb-3">
                            <h6 class="card-title fira-sans-semibold mb-3">Software House</h6>
                            <p class="card-text lead fira-sans-regular" style="font-size: 16px">Kami Mengembangkan
                                Solusi Teknologi untuk Membangun Masa Depan
                                Bisnis</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center bg-light shadow-sm rounded-3" style="border: none;">
                        <div class="card-body py-5">
                            <img src="{{ asset('images/service/Internet.png') }}" alt="Icona" class="mb-3">
                            <h6 class="card-title fira-sans-semibold mb-3">Internet of Things</h6>
                            <p class="card-text lead fira-sans-regular" style="font-size: 16px">Layanan IoT Kami Membuka
                                Peluang dan Efisiensi Operasional Bisnis
                                Anda</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center bg-light shadow-sm rounded-3" style="border: none;">
                        <div class="card-body py-5">
                            <img src="{{ asset('images/service/Multimedia.png') }}" alt="Icona" class="mb-3">
                            <h6 class="card-title fira-sans-semibold mb-3">Multimedia</h6>
                            <p class="card-text lead fira-sans-regular" style="font-size: 16px">Kreativitas Tak Terbatas
                                Jasa Multimedia Kami Membawa Ide-ide</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="portofolio">
        <div class="container mt-5">
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/pemandangan.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/pemandangan.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/pemandangan.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="testimoni">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h1 class="fira-sans-bold">Apa kata mereka?</h1>
                    <img src="{{ asset('images/quote.png') }}" alt="Quote icon" class="img-fluid"
                        style="margin-top: 38px;">
                    <p class="lead fira-sans-light" style="margin-top: 38px; font-size: 20px;">"Solusi teknologi dari
                        perusahaan ini benar-benar mengubah
                        cara kami beroperasi.
                        Mereka tidak hanya memberikan produk berkualitas, tetapi juga dukungan yang luar biasa selama
                        proses implementasi."</p>
                    <p class="fira-sans-bold">Sarah</p>
                    <p class="fira-sans-regular">CEO PT. Maju Sejahtera</p>
                </div>
            </div>
        </div>
    </div>
    <footer id="contact" class="mt-5" style="background-color: #121212;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div style="display: flex; margin-top: 24px;">
                        <img src="{{ asset('images/footer/Logo.png') }}" alt="Footer quote icon" class="img-fluid mt-3">
                        <div class="d-flex align-items-center justify-content-center mt-4 ml-3">
                            <h2 class="fira-sans-extrabold txt-primary">Pendalungan</h2>
                        </div>
                    </div>
                    <p class="txt-primary" style="margin-top: 24px;">Pendalungan Megah Solusi adalah perusahaan
                        teknologi informasi yang
                        berfokus pada pengembangan solusi terkini dalam bidang multimedia, software, dan IoT. </p>
                    <div class="social-media" style="margin-top: 40px;">
                        <a href="#" class="text-decoration-none mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                        </a>
                        <a href="#" class="text-decoration-none mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                            </svg>
                        </a>
                        <a href="#" class="text-decoration-none mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                class="bi bi-youtube" viewBox="0 0 16 16">
                                <path
                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                            </svg>
                        </a>
                        <a href="#" class="text-decoration-none mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                            </svg>
                        </a>
                    </div>
                    <p class="txt-primary" style="margin-top: 60px;">© Copyright Pendalungan Megah Solusi</p>
                </div>

                <div class="col-md-4  text-center">
                    <h6 class="fira-sans-bold txt-primary" style="margin-bottom: 42px; margin-top: 66px; ">Menu</h6>
                    <ul class="list-unstyled mb-0 text-center">
                        <li class="txt-primary" style="margin-bottom: 24px;"><a href="#"
                                class="text-decoration-none txt-primary">Home</a></li>
                        <li class="txt-primary" style="margin-bottom: 24px;"><a href="#"
                                class="text-decoration-none txt-primary">About</a></li>
                        <li class="txt-primary" style="margin-bottom: 24px;"><a href="#"
                                class="text-decoration-none txt-primary">Service</a></li>
                        <li class="txt-primary" style="margin-bottom: 24px;"><a href="#"
                                class="text-decoration-none txt-primary">Contact</a></li>
                    </ul>
                </div>


                <div class="col-md-4">
                    <h6 class="fira-sans-bold txt-primary" style="margin-bottom: 42px; margin-top: 66px;">Kontak</h6>
                    <p class="txt-primary" style="margin-bottom: 24px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-telephone-fill" viewBox="0 0 16 16" style="margin-right: 24px;">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg>
                        0823-2250-1176
                    </p>
                    <p class="txt-primary" style="margin-bottom: 24px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-envelope-fill" viewBox="0 0 16 16" style="margin-right: 24px;">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                        </svg>
                        cvpendalunganmegahsolusi@gmail.com
                    </p>
                    <p class="txt-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt-fill" viewBox="0 0 16 16" style="margin-right: 24px;">
                            <path
                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                        </svg>
                        Jl. Semeru Raya 22, Kec. Sumbersari, Kab.Jember, Jawa Timur, 68121
                    </p>
                    <p class="txt-primary text-right" style="margin-top: 76px;">© Copyright Pendalungan Megah Solusi
                    </p>
                </div>


            </div>
        </div>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>