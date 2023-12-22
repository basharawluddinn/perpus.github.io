<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'allfunctions.php';
$peminjaman = query("SELECT * FROM peminjaman");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Data Peminjaman</title>
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
                <h1 class="mt-3">Daftar Peminjaman</h1>

                <div class="mt-3">
                    <a href="tambahpinjam.php" class="btn btn-primary">Tambah Peminjaman</a>
                </div>

                <div class="mt-3">
                    <!-- Input for Searching Data Peminjaman -->
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" name="keyword3" class="form-control" placeholder="Masukkan keyword pencarian nama peminjam" autofocus autocomplete="off">
                            <button type="submit" name="cari3" class="btn btn-primary">Cari</button>
                        </div>
                    </form>
                </div>

                <div class="table-responsive mt-4">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Aksi</th>
                                <th scope="col">Nama Peminjam</th>
                                <th scope="col">Judul Buku Dipinjam</th>
                                <th scope="col">Tanggal Peminjaman</th>
                                <th scope="col">Tanggal Pengembalian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($peminjaman as $row) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td>
                                        <div class="btn-ubah">
                                            <a href="ubahpinjam.php?id_peminjam=<?= $row["id_peminjam"]; ?>" class="btn btn-warning">Ubah</a>
                                            <a id="btnhapus" href="hapuspinjam.php?id_peminjam=<?= $row["id_peminjam"]; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                                        </div>
                                    </td>
                                    <td><?= $row["nama_peminjam"]; ?></td>
                                    <td><?= $row["judul"]; ?></td>
                                    <td><?= $row["tgl_pinjam"]; ?></td>
                                    <td><?= $row["tgl_kembali"]; ?></td>
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
