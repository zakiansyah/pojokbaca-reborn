<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php
    include "nav.php";
    include "koneksi.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM buku WHERE id_buku = '$id'";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            $buku = mysqli_fetch_array($result);
        } else {
            die("Error: " . mysqli_error($koneksi));
        }
    }
    ?>

    <div class="container mt-3">
        <h3>Form Buku Perpustakaan</h3>
    </div>

    <form action="buku_act.php" method="post" enctype="multipart/form-data" class="container mt-5">
        <div class="row mb-3">
            <div class="col-4">
                <label for="judul_buku">Judul Buku</label>
            </div>
            <div class="col-lg-4">
                <input type="text" name="judul_buku" id="judul_buku" class="form-control"
                    value="<?= htmlspecialchars($buku['judul_buku'] ?? '') ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <label for="kategori">Kategori Buku</label>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-book"></i> <!-- Ikon buku dari Font Awesome -->
                    </span>
                    <select name="kategori" id="kategori" class="form-select" required>
                        <option value="" disabled <?= !isset($buku['kategori']) ? 'selected' : '' ?> hidden>
                            Pilih kategori buku
                        </option>
                        <option value="Pengetahuan" <?= isset($buku['kategori']) && $buku['kategori'] == 'Pengetahuan' ? 'selected' : '' ?>>
                            Pengetahuan
                        </option>
                        <option value="Cerita Anak" <?= isset($buku['kategori']) && $buku['kategori'] == 'Cerita Anak' ? 'selected' : '' ?>>
                            Cerita Anak
                        </option>
                        <option value="Fiksi" <?= isset($buku['kategori']) && $buku['kategori'] == 'Fiksi' ? 'selected' : '' ?>>
                            Fiksi
                        </option>
                        <option value="Dongeng" <?= isset($buku['kategori']) && $buku['kategori'] == 'Dongeng' ? 'selected' : '' ?>>
                            Dongeng
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <label for="tahun">Tahun</label>
            </div>
            <div class="col-lg-4">
                <input type="number" name="tahun" id="tahun" class="form-control"
                    value="<?= htmlspecialchars($buku['tahun'] ?? '') ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <label for="pengarang">Pengarang</label>
            </div>
            <div class="col-lg-4">
                <input type="text" name="pengarang" id="pengarang" class="form-control"
                    value="<?= htmlspecialchars($buku['pengarang'] ?? '') ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <label for="penerbit">Penerbit</label>
            </div>
            <div class="col-lg-4">
                <input type="text" name="penerbit" id="penerbit" class="form-control"
                    value="<?= htmlspecialchars($buku['penerbit'] ?? '') ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <label for="sinopsis">Sinopsis</label>
            </div>
            <div class="col-lg-4">
                <textarea name="sinopsis" id="sinopsis" class="form-control" required>
                    <?= htmlspecialchars($buku['sinopsis'] ?? '') ?>
                </textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <label for="cover">Cover Buku</label>
            </div>
            <div class="col-lg-4">
                <input type="file" name="cover" id="cover" class="form-control" accept="image/*">
                <?php if (!empty($buku['cover'])): ?>
                    <p>Cover saat ini:</p>
                    <img src="uploads/<?= htmlspecialchars($buku['cover']) ?>" width="150px">
                    <input type="hidden" name="cover_lama" value="<?= htmlspecialchars($buku['cover']) ?>">
                <?php endif; ?>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <label for="link">Masukkan Link PDF</label>
            </div>
            <div class="col-lg-4">
                <input type="url" name="link" id="link" class="form-control"
                    value="<?= htmlspecialchars($buku['link'] ?? '') ?>"
                    placeholder="https://example.com/book.pdf">
            </div>
        </div>
        <div class="col-lg-4">
            <input type="hidden" name="id_buku" value="<?= htmlspecialchars($buku['id_buku'] ?? '') ?>">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>