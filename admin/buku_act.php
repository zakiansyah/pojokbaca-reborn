<?php
include "koneksi.php";

$judul_buku = $_POST['judul_buku'] ?? null;
$kategori = $_POST['kategori'] ?? null;
$tahun = $_POST['tahun'] ?? null;
$pengarang = $_POST['pengarang'] ?? null;
$penerbit = $_POST['penerbit'] ?? null;
$sinopsis = $_POST['sinopsis'] ?? null;
$link = $_POST['link'] ?? null;
$cover = null; // Default cover jika tidak ada file yang diunggah

// Proses upload file cover jika ada
if (!empty($_FILES['cover']['name'])) {
    $cover_tmp = $_FILES['cover']['tmp_name'];
    $cover = "uploads/" . basename($_FILES['cover']['name']); // Path penyimpanan

    move_uploaded_file($cover_tmp, $cover); // Pindahkan file ke folder uploads
}

// Hapus buku jika ada parameter `id_buku` di GET
if (isset($_GET['id_buku'])) {
    $id = $_GET['id_buku'];
    $query = "DELETE FROM buku WHERE id_buku = '$id'";
    mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    header('Location: buku_read.php');
    exit();
}

// Update buku jika ada parameter `id_buku` di POST
if (isset($_POST['id_buku']) && !empty($_POST['id_buku'])) {
    $id = $_POST['id_buku'];
    
    // Perbarui data buku
    $query = "UPDATE buku SET 
        judul_buku = '$judul_buku',
        kategori = '$kategori',
        tahun = '$tahun',
        pengarang = '$pengarang',
        penerbit = '$penerbit',
        sinopsis = '$sinopsis',
        link = '$link'
        " . ($cover ? ", cover = '$cover'" : "") . "
        WHERE id_buku = '$id'
    ";
    
    mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    header('Location: buku_read.php');
    exit();
}

// Simpan buku baru jika tidak ada `id_buku`
$query = "INSERT INTO buku (judul_buku, kategori, tahun, pengarang, penerbit, sinopsis, cover, link) 
VALUES ('$judul_buku', '$kategori','$tahun', '$pengarang', '$penerbit', '$sinopsis', '$cover', '$link')";

mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
header('Location: buku_read.php');
exit();
?>
