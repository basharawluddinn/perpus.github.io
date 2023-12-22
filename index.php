<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'allfunctions.php';
$anggota = query("SELECT * FROM anggota");
$buku = query("SELECT * FROM buku");
$peminjaman = query("SELECT * FROM peminjaman");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Dashboard</title>
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
                <h1 class="mt-3">Dashboard</h1>

                <div class="row">
                    <!-- Data Anggota Section -->
                    <div class="col-md-4 col-lg-4 col-sm-6 mt-4">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <img src="img/anggota.svg" width="30" class="mr-2" alt="">
                                    Data Anggota
                                </h5>
                                <?php
                                $query = "SELECT id_anggota FROM anggota";
                                $query_run = mysqli_query($conn, $query);
                                $row = mysqli_num_rows($query_run);
                                echo '<p class="card-text" id="row"> ' . $row . '</p>';
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Data Buku Section -->
                    <div class="col-md-4 col-lg-4 col-sm-6 mt-4">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <img src="img/book.svg" width="30" class="mr-2" alt="">
                                    Data Buku
                                </h5>
                                <?php
                                $query = "SELECT id_buku FROM buku";
                                $query_run = mysqli_query($conn, $query);
                                $row = mysqli_num_rows($query_run);
                                echo '<p class="card-text" id="row"> ' . $row . '</p>';
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Data Pinjaman Section -->
                    <div class="col-md-4 col-lg-4 col-sm-6 mt-4">
                        <div class="card bg-warning text-white">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <img src="img/list.svg" width="30" class="mr-2" alt="">
                                    Peminjaman
                                </h5>
                                <?php
                                $query = "SELECT id_peminjam FROM peminjaman";
                                $query_run = mysqli_query($conn, $query);
                                $row = mysqli_num_rows($query_run);
                                echo '<p class="card-text" id="row"> ' . $row . '</p>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- Content End -->
</body>

</html>