<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil detail user berdasarkan ID
    $query = mysqli_query($kon, "SELECT * FROM tb_user WHERE id = '$id'");

    if ($row = mysqli_fetch_array($query)) {
        // Menampilkan data user
        echo '<p><strong>Nama:</strong> ' . htmlspecialchars($row['name']) . '</p>';
        echo '<p><strong>Username:</strong> ' . htmlspecialchars($row['username']) . '</p>';
        echo '<p><strong>Level:</strong> ' . htmlspecialchars($row['level']) . '</p>';
        echo '<p><strong>No. Hp:</strong> ' . htmlspecialchars($row['nohp']) . '</p>';
        echo '<p><strong>Alamat:</strong> ' . nl2br(htmlspecialchars($row['alamat'])) . '</p>';
        // Anda bisa menambahkan informasi lain jika diperlukan
    } else {
        echo '<p>User tidak ditemukan.</p>';
    }
} else {
    echo '<p>ID tidak diberikan.</p>';
}
?>
