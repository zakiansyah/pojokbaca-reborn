<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buku-read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    include "nav.php";
    ?>

    <?php
    include "koneksi.php";
    $buku = mysqli_query($koneksi, "SELECT * FROM buku");
    ?>

<div class="container mb-5">
    <div class="card">
        <div class="card-body">
            <h1 class="mb-3">Data Buku</h1>
            <a href="buku_form.php" class="btn btn-info mb-3">Tambah Buku</a>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Sinopsis</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Link</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($buku) > 0) {
                            foreach ($buku as $key => $value) {
                                $no = $key + 1;
                        ?>
                                <tr>
                                    <th scope="row"><?= $no ?></th>
                                    <td><?= htmlspecialchars($value['judul_buku']) ?></td>
                                    <td><?= htmlspecialchars($value['kategori']) ?></td>
                                    <td><?= htmlspecialchars($value['tahun']) ?></td>
                                    <td><?= htmlspecialchars($value['pengarang']) ?></td>
                                    <td><?= htmlspecialchars($value['penerbit']) ?></td>
                                    <td class="text-truncate" style="max-width: 200px;">
                                        <?= htmlspecialchars($value['sinopsis']) ?>
                                    </td>
                                    <td>
                                        <img src="<?= htmlspecialchars($value['cover']) ?>" alt="Cover" class="img-fluid rounded" style="max-width: 100px;">
                                    </td>
                                    <td>
                                        <a href="<?= htmlspecialchars($value['link']) ?>" target="_blank" class="btn btn-sm btn-primary">View</a>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="buku_form.php?id=<?= $value['id_buku'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="buku_act.php?id_buku=<?= $value['id_buku'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='10' class='text-center'>Tidak ada data</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
                    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>