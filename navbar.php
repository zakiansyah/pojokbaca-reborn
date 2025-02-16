<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navbar dengan Ikon User dan Tulisan "Admin"</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg sticky-top bg-dark navbar-dark shadow">
        <div class="container-fluid">
            <!-- Brand/Logo -->
            <a class="navbar-brand" href="indexPage.php" target="_blank">
                <img src="./assets/LOGO_PPK.png" alt="" width="50" height="50" /> 
                Pojok Baca Digital
            </a>

            <!-- Toggler Button untuk Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Items -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="indexPage.php">List Cerita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pengembang.php">Pengembang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="struktur.php">Struktur</a>
                    </li>
                </ul>

                <!-- Tombol Login dengan Ikon User dan Tulisan "Admin" -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="login.php">
                            <i class="fas fa-user"></i> <!-- Ikon User dari Font Awesome -->
                            <br> <!-- Baris baru untuk tulisan "Admin" -->
                            <span class="small">Admin</span> <!-- Tulisan "Admin" -->
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>