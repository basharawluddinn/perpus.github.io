<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Perpustakaan XYZ</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="img/UNPAM.png">
</head>

<body>

    <body>
        <header class="text-white text-center py-5">
            <div class="container">

                <h1>WELCOME TO E-LIBRARY UNPAM</h1>
                <p>Belajarlah Hingga Ke Negeri China dan Jadiakn Buku Sebagai Pedoman</p>
                <!-- Tambahkan tombol Login di dalam header -->
                <a href="login.php" class="btn btn-primary">Login</a>
                <link rel="stylesheet" href="style.css">
            </div>
        </header>

        <section>
            <div class="video-container">
                <video autoplay muted loop id="bg-video">
                    <source src="img/library.mp4" type="video/mp4" />
                </video>
        </section>

        <nav class="navbar navbar-expand-lg navbar-light bg-ligh">

            <a class="navbar-brand" href="#">E-LIBRARY UNPAM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#katalog">Katalog Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan_kami">Layanan Kami</a>
                    </li>
                </ul>
            </div>
        </nav>
        <section>

        </section>

        <div class="container">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/prps0.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/prps1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-item">
                            <img src="img/prps2.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <main class="container py-5">
                <section class="highlight text-center" id="katalog">
                    <h2>Temukan Buku Terbaru</h2>
                    <p>Di E-LIBRARY UNPAM, Anda dapat menemukan berbagai buku terbaru dalam berbagai genre.</p>
                    <a href="katalogbuku.php" class="btn btn-primary">Jelajahi Katalog Buku</a>
                </section>
                <main class="container py-5">
                    <!-- Ini adalah contoh daftar buku menggunakan Bootstrap -->
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="img/1.jpg" class="card-img-top" alt="Buku 1">
                                <div class="card-body">
                                    <p class="card-text">Jelajahi ragam pengetahuan di perpustakaan Universitas Pamulang
                                        melalui koleksi buku unggulan kami. Dari literatur klasik hingga riset terkini,
                                        setiap judul dipilih dengan cermat untuk memenuhi kebutuhan akademis dan minat
                                        pembaca. Temukan sumber daya yang memadai untuk mendukung pengembangan ilmu
                                        pengetahuan dan penelitian di lingkungan universitas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="img/2.jpg" class="card-img-top" alt="Buku 2">
                                <div class="card-body">
                                    <p class="card-text">Nikmati atmosfer inspiratif di ruang baca modern kami yang
                                        didesain untuk kenyamanan dan produktivitas. Dengan fasilitas teknologi terkini
                                        seperti akses internet cepat dan zona wireless, perpustakaan Universitas
                                        Pamulang menjadi tempat ideal untuk pembelajaran mandiri dan kolaboratif.
                                        Temukan sudut-sudut yang tenang untuk membaca atau ruang diskusi untuk berbagi
                                        ide dengan sesama mahasiswa.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="img/3.jpg" class="card-img-top" alt="Buku 3">
                                <div class="card-body">
                                    <p class="card-text">Manfaatkan layanan peminjaman buku yang efisien dan sistematis
                                        di perpustakaan Universitas Pamulang. Kami menyediakan proses peminjaman yang
                                        mudah, serta staf yang siap memberikan bantuan dan konsultasi ahli dalam
                                        menemukan sumber informasi yang dibutuhkan. Dengan dukungan ini, mahasiswa dapat
                                        lebih mudah mengakses dan memanfaatkan kekayaan pengetahuan yang tersedia di
                                        perpustakaan universitas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir daftar buku -->
                    <section class="services mt-5">
                        <h2 class="text-center mb-5">Layanan Kami</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="service text-center">
                                    <img src="img/skripsi.jpg" class="img-fluid" alt="Icon Layanan 1">
                                    <h3>Skripsi</h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service text-center">
                                    <img src="img/jurnal.png" class="img-fluid" alt="Icon Layanan 2"
                                        style="max-width:120px">
                                    <h3>Jurnal</h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service text-center">
                                    <img src="img/histori.png" class="img-fluid" alt="Icon Layanan 3"
                                        style="max-width:200px">
                                    <h3>Sejarah</h3>
                                </div>
                            </div>
                        </div>
                    </section>

                </main>
                <footer class="bg-dark text-white text-center py-3 w-100">
                    <p>&copy; 2023 Perpustakaan UNPAM. All rights reserved.</p>
                </footer>
                <!-- Include Bootstrap JS and jQuery -->


                <script src="bootstrap/jquery/jquery.min.js"></script>
                <script src="dist/owl.carousel.min.js"></script>
                <script src="dist/owl.carousel.js"></script>
                <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>

</html>