<?php
session_start();
include "koneksi.php";

// Pastikan ID user yang akan dihapus ada di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus user berdasarkan ID
    $query = mysqli_query($kon, "DELETE FROM tb_user WHERE id = '$id'");

    if ($query) {
        // Penghapusan berhasil, alihkan kembali ke halaman user.php dengan pesan sukses
        header("Location: user.php?message=User berhasil dihapus");
        exit;
    } else {
        // Jika gagal, beri pesan error
        header("Location: user.php?message=Gagal menghapus user");
        exit;
    }
} else {
    // Jika tidak ada ID yang diberikan, arahkan kembali ke halaman user.php
    header("Location: user.php?message=ID tidak ditemukan");
    exit;
}
?>
