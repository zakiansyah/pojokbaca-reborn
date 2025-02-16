<?php
session_start();
session_destroy(); // Menghapus semua sesi
header("Location: indexPage.php"); // Redirect ke halaman login
exit();
?>
