<?php
// koneksi database
include_once("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .banner {
            height: 50vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('assets/struktur_banner.jpg') center/cover no-repeat;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .team-card img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>
<body>
<?php
        include "navbar.php";
  ?>
    <!-- Banner -->
    <div class="banner">
        <div>
            <h1>Struktur Organisasi</h1>
            <p>Tim yang Mengurus Pojok Baca Digital Balecatur</p>
        </div>
    </div>

    <!-- Struktur Organisasi -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Struktur Organisasi</h2>
        <div class="row justify-content-center">
            <!-- Ketua -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center team-card shadow">
                    <div class="card-body">
                        
                        <h5 class="card-title">Ketua</h5>
                        <p class="card-text">Bambang Suryanto</p>
                    </div>
                </div>
            </div>
            <!-- Wakil Ketua -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center team-card shadow">
                    <div class="card-body">
                        
                        <h5 class="card-title">Wakil Ketua</h5>
                        <p class="card-text">Slamet Widodo</p>
                    </div>
                </div>
            </div>
            <!-- Sekretaris -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center team-card shadow">
                    <div class="card-body">
                        
                        <h5 class="card-title">Sekretaris</h5>
                        <p class="card-text">Sri Lestari</p>
                    </div>
                </div>
            </div>
            <!-- Bendahara -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center team-card shadow">
                    <div class="card-body">
                        
                        <h5 class="card-title">Bendahara</h5>
                        <p class="card-text">Siti Aminah</p>
                    </div>
                </div>
            </div>
            <!-- Anggota -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center team-card shadow">
                    <div class="card-body">
                        
                        <h5 class="card-title">Pemeliharaan</h5>
                        <p class="card-text">Rini Setyaningsih</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Pojok Baca Digital Balecatur. All Rights Reserved.</p>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
