<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Carousel</title>
    <style>
        @import url('css/bootstrap.min.css');
        body {
            background-color: rgb(23, 23, 23);
        }

        .carousel-item img {
            max-height: 100vh;
            object-fit: contain;
        }
    </style>
    <script src="js/bootstrap.bundle.min.js"></script>

</head>

<body>
<php
        include "navbar.php";
  ?>   
<!-- carousel start -->
    <div id="carouselExampleControls" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/berjalan_jalan_bersama_mama/cover.jpg" class="d-block w-100" alt="Image">
            </div>
            <div class="carousel-item">
                <img src="./assets/berjalan_jalan_bersama_mama/Screenshot_1.jpg" class="d-block w-100" alt="Image">
            </div>
            <div class="carousel-item">
                <img src="./assets/berjalan_jalan_bersama_mama/Screenshot_2.jpg" class="d-block w-100" alt="Image">
            </div>
            <div class="carousel-item">
                <img src="./assets/berjalan_jalan_bersama_mama/Screenshot_3.jpg" class="d-block w-100" alt="Image">
            </div>
            <div class="carousel-item">
                <img src="./assets/berjalan_jalan_bersama_mama/Screenshot_4.jpg" class="d-block w-100" alt="Image">
            </div>
            <div class="carousel-item">
                <img src="./assets/berjalan_jalan_bersama_mama/Screenshot_5.jpg" class="d-block w-100" alt="Image">
            </div>
            <div class="carousel-item">
                <img src="./assets/berjalan_jalan_bersama_mama/Screenshot_6.jpg" class="d-block w-100" alt="Image">
            </div>
            <div class="carousel-item">
                <img src="./assets/berjalan_jalan_bersama_mama/Screenshot_7.jpg" class="d-block w-100" alt="Image">
            </div>
            <div class="carousel-item">
                <img src="./assets/berjalan_jalan_bersama_mama/Screenshot_8.jpg" class="d-block w-100" alt="Image">
            </div>
            <div class="carousel-item">
                <img src="./assets/berjalan_jalan_bersama_mama/Screenshot_9.jpg" class="d-block w-100" alt="Image">
            </div>
            <div class="carousel-item">
                <img src="./assets/berjalan_jalan_bersama_mama/Screenshot_10.jpg" class="d-block w-100" alt="Image">
            </div>
            <div class="carousel-item">
                <img src="./assets/berjalan_jalan_bersama_mama/Screenshot_11.jpg" class="d-block w-100" alt="Image">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carousel end -->
</body>

</html>