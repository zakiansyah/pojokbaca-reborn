<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Carousel</title>
    <style>
        @import url('css/bootstrap.min.css');

        .carousel-item img {
            object-fit: cover;
            height: 100vh;
            width: 100%;
        }

        .card {
            width: 100%;
            /* Lebar card menyesuaikan parent */
            max-width: 18rem;
            /* Lebar maksimum card */
            height: 100%;
            /* Tinggi card menyesuaikan parent */
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Tambahkan shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .card-img-top {
            height: 150px;
            /* Tinggi gambar cover */
            object-fit: cover;
            /* Pastikan gambar tidak terdistorsi */
        }

        .card-body {
            flex: 1;
            /* Membuat card-body mengisi sisa ruang di card */
            display: flex;
            flex-direction: column;
            padding: 0.75rem;
            /* Padding card-body diperkecil */
        }

        .card-title {
            font-size: 1.1rem;
            /* Ukuran font judul */
            margin-bottom: 0.5rem;
            /* Jarak bawah judul */
        }

        .card-text {
            font-size: 0.9rem;
            /* Ukuran font teks (pengarang, penerbit, dll) */
            margin-bottom: 0.3rem;
            /* Jarak bawah teks */
        }

        .sinopsis {
            max-height: 60px;
            /* Diperpendek dari 80px */
            overflow: hidden;
            /* Sembunyikan teks yang melebihi tinggi */
            position: relative;
            flex: 1;
            /* Membuat sinopsis mengisi sisa ruang di card-body */
            font-size: 0.85rem;
            /* Ukuran font sinopsis */
        }

        .sinopsis::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 30px;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
        }

        .sinopsis.expanded {
            max-height: none;
            /* Tampilkan semua teks saat diperluas */
        }

        .read-more {
            display: block;
            text-align: center;
            margin-top: 10px;
            cursor: pointer;
            color: #007bff;
            font-size: 0.85rem;
            /* Ukuran font tombol "Baca Selengkapnya" */
        }

        .read-more:hover {
            text-decoration: underline;
        }

        .highlight {
            background-color: yellow;
            /* Warna sorotan untuk hasil pencarian */
        }
    </style>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include "navbar.php"; ?>

    <?php
    $host = "localhost"; // Sesuaikan dengan host database
    $user = "root"; // Sesuaikan dengan username database
    $password = ""; // Sesuaikan dengan password database
    $database = "simperpus_vsga2024"; // Nama database

    // Koneksi ke database
    $conn = new mysqli($host, $user, $password, $database);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Ambil data buku dari tabel buku
    $sql = "SELECT id_buku, judul_buku, tahun, pengarang, penerbit, sinopsis, cover, link FROM buku";
    $result = $conn->query($sql);
    ?>

    <!-- Form Pencarian -->
    <div class="container mt-3">
        <form id="searchForm" class="d-flex">
            <input type="text" id="searchInput" class="form-control me-2" placeholder="Cari judul atau pengarang...">
            <!-- <button type="submit" class="btn btn-primary">Cari</button> -->
        </form>
    </div>

    <!-- Tombol Filter -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#filterModal">Filter Kategori</button>

    <!-- Modal Filter Kategori -->
    <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="filterModalLabel">Pilih Kategori Buku</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="filterForm">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kategori[]" value="Pengetahuan" id="pengetahuan">
                            <label class="form-check-label" for="pengetahuan">Pengetahuan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kategori[]" value="Cerita Anak" id="ceritaAnak">
                            <label class="form-check-label" for="ceritaAnak">Cerita Anak</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kategori[]" value="Fiksi" id="fiksi">
                            <label class="form-check-label" for="fiksi">Fiksi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kategori[]" value="Dongeng" id="dongeng">
                            <label class="form-check-label" for="dongeng">Dongeng</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" onclick="applyFilter()">Terapkan Filter</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function applyFilter() {
            let selectedCategories = [];
            document.querySelectorAll("input[name='kategori[]']:checked").forEach((checkbox) => {
                selectedCategories.push(checkbox.value);
            });

            if (selectedCategories.length > 0) {
                let url = "indexPage.php?kategori=" + encodeURIComponent(selectedCategories.join(","));
                window.location.href = url; // Reload halaman dengan parameter kategori
            } else {
                alert("Pilih minimal satu kategori!");
            }
        }
    </script>

    <?php
    $whereClause = "";
    if (isset($_GET['kategori']) && !empty($_GET['kategori'])) {
        $kategori = explode(",", $_GET['kategori']);
        $kategoriEscaped = array_map(function ($k) use ($conn) {
            return "'" . mysqli_real_escape_string($conn, $k) . "'";
        }, $kategori);

        $whereClause = "WHERE kategori IN (" . implode(",", $kategoriEscaped) . ")";
    }

    $query = "SELECT * FROM buku $whereClause";
    $result = mysqli_query($conn, $query);
    ?>


    <!-- Daftar Buku -->
    <div class="row mt-3" id="bookList">
        <?php while ($row = $result->fetch_assoc()):
            if (!empty($row['cover']) && file_exists(__DIR__ . "/admin/uploads/" . basename($row['cover']))) {
                $coverPath = "./admin/uploads/" . htmlspecialchars(basename($row['cover']));
            } else {
                $coverPath = "uploads/default-cover.jpg";
            }
        ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex">
                <div class="card">
                    <img class="card-img-top" src="<?= $coverPath ?>" alt="Cover Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= htmlspecialchars($row['judul_buku']) ?></h5>
                        <p class="card-text"><strong>Pengarang:</strong> <?= htmlspecialchars($row['pengarang']) ?></p>
                        <p class="card-text"><strong>Penerbit:</strong> <?= htmlspecialchars($row['penerbit']) ?> (<?= htmlspecialchars($row['tahun']) ?>)</p>

                        <div class="sinopsis">
                            <?= htmlspecialchars($row['sinopsis']) ?>
                        </div>
                        <span class="read-more" onclick="toggleSinopsis(this)">Baca Selengkapnya</span>

                        <div class="mt-auto">
                            <?php if (!empty($row['link'])): ?>
                                <a href="<?= htmlspecialchars($row['link']) ?>" class="btn btn-primary btn-sm mt-2" target="_blank">Baca Sekarang</a>
                            <?php else: ?>
                                <button class="btn btn-secondary btn-sm mt-2" disabled>Link Tidak Tersedia</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <script>
        function toggleSinopsis(element) {
            let sinopsis = element.previousElementSibling;
            if (sinopsis.style.whiteSpace === "nowrap") {
                sinopsis.style.whiteSpace = "normal";
                sinopsis.style.maxHeight = "none";
                element.innerText = "Tampilkan Lebih Sedikit";
            } else {
                sinopsis.style.whiteSpace = "nowrap";
                sinopsis.style.maxHeight = "60px";
                element.innerText = "Baca Selengkapnya";
            }
        }
    </script>

    <?php
    // Tutup koneksi database
    $conn->close();
    ?>

    <script>
        // Fitur Pencarian
        const searchInput = document.getElementById('searchInput');
        const bookList = document.getElementById('bookList');
        const cards = bookList.querySelectorAll('.card'); // Ambil semua card

        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase(); // Ambil kata kunci

            // Hapus sorotan sebelumnya
            document.querySelectorAll('.highlight').forEach(highlight => {
                highlight.outerHTML = highlight.innerHTML;
            });

            // Cari dan sorot kata kunci
            cards.forEach(card => {
                const title = card.querySelector('.card-title').textContent.toLowerCase(); // Judul buku
                const author = card.querySelector('.card-text strong').nextSibling.textContent.toLowerCase(); // Pengarang

                if (title.includes(searchTerm) || author.includes(searchTerm)) {
                    card.style.display = 'block'; // Tampilkan card yang sesuai
                    highlightText(card.querySelector('.card-title'), searchTerm); // Sorot judul
                    highlightText(card.querySelector('.card-text strong').nextSibling, searchTerm); // Sorot pengarang
                } else {
                    card.style.display = 'none'; // Sembunyikan card yang tidak sesuai
                }
            });

            // Jika input kosong, tampilkan semua card
            if (searchTerm === '') {
                cards.forEach(card => {
                    card.style.display = 'block';
                });
            }
        });

        // Fungsi untuk menyorot teks
        function highlightText(element, searchTerm) {
            const regex = new RegExp(`(${searchTerm})`, 'gi');
            element.innerHTML = element.textContent.replace(regex, '<span class="highlight">$1</span>');
        }

        // Fitur Baca Selengkapnya
        document.addEventListener("DOMContentLoaded", function() {
            const readMoreButtons = document.querySelectorAll('.read-more');

            readMoreButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const sinopsis = this.previousElementSibling;
                    sinopsis.classList.toggle('expanded');

                    if (sinopsis.classList.contains('expanded')) {
                        this.textContent = 'Sembunyikan';
                    } else {
                        this.textContent = 'Baca Selengkapnya';
                    }
                });
            });
        });
    </script>
</body>

</html>