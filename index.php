<?php
include_once("koneksi.php");

// Mengambil semua data dari database
$result = mysqli_query($mysqli, "SELECT * FROM absensi ORDER BY id DESC");

if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'] ?? ''; // Pastikan variabel diinisialisasi meskipun input kosong
    $alamat = $_POST['alamat'] ?? '';

    // Validasi data
    if (!empty($nama) && !empty($alamat)) {
        // Insert data ke database dengan waktu otomatis menggunakan NOW()
        $add = mysqli_query($mysqli, "INSERT INTO absensi (nama, alamat, waktu_kehadiran) VALUES ('$nama', '$alamat', NOW())");

        if ($add) {
            echo "<script>alert('Data berhasil ditambahkan!');</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data: " . mysqli_error($mysqli) . "');</script>";
        }
    } else {
        echo "<script>alert('Nama dan Alamat wajib diisi!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
         @import url('css/bootstrap.min.css');
         .banner{
            height: 80vh;
            background: linear-gradient(rgba(0, 0, 0, 0.889), rgba(0, 0, 0, 0.796)), url(assets/bag.jpg);
            background-size: cover;
            background-position: center;
        }
        .banner-content{
            height: 100%;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .carousel-containe{
            background-color:#ffffff;
        }
        .corousel-contain{
            background-color: #212529;
            color: white;
        }
    </style>
</head>
<body>
  <?php
        include "navbar.php";
  ?>

   <!-- carousel start -->
   <div class="container-fluid banner">
        <div class="container banner-content col-lg-6">
            <div class="text-center">
                <p class="fs-1">
                    Pojok Baca Digital Balecatur
                </p>
                <p class="d-none d-sm-block">
                    "Selamat datang di Pojok Baca Balecatur, tempat di mana pengetahuan dan hiburan berkumpul dalam satu tempat! Selamat menikmati beragam konten bermanfaat dan menghibur kami."
                </p>
            
                  <!-- <table class="my-5 table table-striped">
                    <tr class="table-dark">
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Waktu kehadiran</th>
                    </tr>

                    <?php 
                    while ($r = mysqli_fetch_array($result)){
                    ?>
                      <tr class="table-primary">
                        <td><?php echo $r['nama']; ?></td>
                        <td><?php echo $r['alamat']; ?></td>
                     <td><?php echo $r['waktu_kehadiran']; ?></td>
                      </tr>
                    <?php
                    } 
                    ?>
                  </table> -->
                </p>
              </div>
            </div>
        </div>
        
    </div>
        <div class="container-fluid carousel-containe py-5">
            <div class="container">
                <h2 class="text-center mb-5">Gallery</h2>
                <div id="carouselExampleControls" class="carousel slide col-lg-8 offset-lg-2" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item">
                        <img src="assets/bg_home_1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item active">
                        <img src="assets/TIM PPKO UKM PRAMUKA.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="assets/bg_home_3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>

        </div>
    <!-- carousel end -->
    <!--card-->
    <div class="container-fluid corousel-contain py-5">
        <div class="container">
            <h2 class="text-center mb-5">Lokasi Pojok Baca</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card mx-2 mb-4" style="width: 20rem; height: 20rem;">
                        <img class="card-img-top" src="./assets/pojokbacaartik.jpg" width="30px"
                            alt="card-body">
                            <div class="card-body">
                                <h5 class="card-title">Pasekan Kidul</h5>
                                <a href="https://maps.app.goo.gl/osyC7id3zP85pEPJ9" class="btn btn-primary">Lihat Lokasi</a>
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card mx-2 mb-4" style="width: 20rem; height: 20rem;">
                        <img class="card-img-top" src="./assets/pojok baca atlantika.jpg" width="40px"
                            alt="card-body">
                            <div class="card-body">
                                <h5 class="card-title">Gamol</h5>
                                <a href="https://maps.app.goo.gl/uReyDig8mWjRABqdA" class="btn btn-primary">Lihat Lokasi</a>
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card mx-2 mb-4" style="width: 20rem; height: 20rem;">
                        <img class="card-img-top" src="./assets/pojokbacahindia.jpg" width="30px"
                            alt="card-body">
                            <div class="card-body">
                                <h5 class="card-title">Jatisawit</h5>
                                <a href="https://maps.app.goo.gl/9A1MdK6Ap2biWRXXA" class="btn btn-primary">Lihat Lokasi</a>
                            </div>
                    </div>
                </div><div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card mx-2 mb-4" style="width: 20rem; height: 20rem;">
                        <img class="card-img-top" src="./assets/pasekan lor.jpg" width="30px"
                            alt="card-body">
                            <div class="card-body">
                                <h5 class="card-title">Pasekan Lor</h5>
                                <a href="https://maps.app.goo.gl/1ngE5BUQGtmycDPD7" class="btn btn-primary">Lihat Lokasi</a>
                            </div>
                    </div>
                </div><div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card mx-2 mb-4" style="width: 20rem; height: 20rem;">
                        <img class="card-img-top" src="./assets/perengdawe1.jpg" width="30px"
                            alt="card-body">
                            <div class="card-body">
                                <h5 class="card-title">Perengdawe</h5>
                                <a href="https://maps.app.goo.gl/py1GiFhJ8FWb3A288" class="btn btn-primary">Lihat Lokasi</a>
                            </div>
                    </div>
                </div>
        </div>
    </div>
    <!--offcard-->
        <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>