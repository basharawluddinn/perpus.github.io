<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'allfunctions.php';
$buku = query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Data Buku</title>
    <!-- Include Bootstrap CSS from a CDN -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="img/UNPAM.png">
</head>

<body>
    <!-- Header Area Start -->
    <header class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3>E-<span>PERPUS</span></h3>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Content Start -->
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <center>
                    <img src="img/KTM foto.jpg" class="profile_image mt-5 h-auto" alt="" style="max-width:50%">
                    <h4>Bashar Awaluddin Nafsah</h4>
                </center>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <img src="img/desktop.svg" width="20" class="mr-2" alt="">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dataanggota.php">
                            <img src="img/anggota.svg" width="20" class="mr-2" alt="">
                            Data Anggota
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="databuku.php">
                            <img src="img/book.svg" width="20" class="mr-2" alt="">
                            Data Buku
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="datapinjam.php">
                            <img src="img/list.svg" width="20" class="mr-2" alt="">
                            Data Peminjaman
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <img src="img/logout.svg" width="20" class="mr-2" alt="">
                            Logout
                        </a>
                    </li>
                </ul>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h1 class="mt-3">Daftar Buku</h1>

                <div class="mt-3">
                    <a href="tambahbuku.php" class="btn btn-primary">Tambah Buku</a>
                </div>

                <div class="mt-3">
                    <!-- Input for Searching Data Buku -->
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" name="keyword2" class="form-control"
                                placeholder="Masukkan keyword pencarian buku" autofocus autocomplete="off">
                            <button type="submit" name="cari2" class="btn btn-primary">Cari</button>
                        </div>
                    </form>
                </div>

                <div class="table-responsive mt-4">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Aksi</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tahun Terbit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($buku as $row): ?>
                                <tr>
                                    <td>
                                        <?= $i; ?>
                                    </td>
                                    <td>
                                        <div class="btn-ubah">
                                            <a href="ubahbuku.php?id_buku=<?= $row["id_buku"]; ?>"
                                                class="btn btn-warning">Ubah</a>
                                            <a id="btnhapus" href="hapusbuku.php?id_buku=<?= $row["id_buku"]; ?>"
                                                class="btn btn-danger"
                                                onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                                        </div>
                                    </td>
                                    <td>
                                        <?= $row["judul"]; ?>
                                    </td>
                                    <td>
                                        <?= $row["penulis"]; ?>
                                    </td>
                                    <td>
                                        <?= $row["penerbit"]; ?>
                                    </td>
                                    <td>
                                        <?= $row["tahun_terbit"]; ?>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <!-- Content End -->
</body>

</html>