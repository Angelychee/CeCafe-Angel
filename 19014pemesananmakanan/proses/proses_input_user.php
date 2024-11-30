<?php
session_start();
include "koneksi.php";

// Ambil data dari form dengan validasi sederhana
$name = isset($_POST['name']) ? htmlentities($_POST['name']) : "";
$username = isset($_POST['username']) ? htmlentities($_POST['username']) : "";
$level = isset($_POST['level']) ? htmlentities($_POST['level']) : "";
$nohp = isset($_POST['nohp']) ? htmlentities($_POST['nohp']) : "";
$alamat = isset($_POST['alamat']) ? htmlentities($_POST['alamat']) : "";
$password = isset($_POST['password']) ? md5(htmlentities($_POST['password'])) : "";

// Periksa jika tombol submit ditekan
if (!empty($_POST['input_user_validate'])) {
    // Gunakan prepared statement untuk mencegah SQL injection
    $stmt = $kon->prepare("INSERT INTO tb_user (name, username, level, nohp, alamat, password) VALUES (?, ?, ?, ?, ?, ?)");

    // Bind parameter tanpa tanda kutip
    $stmt->bind_param("ssssss", $name, $username, $level, $nohp, $alamat, $password);
    
    if ($stmt->execute()) {
        $_SESSION['success_message'] = 'Data user berhasil ditambahkan!';
        header('Location: user.php');
        exit();
    } else {
        $_SESSION['error_message'] = 'Gagal menambahkan data user: ' . $stmt->error;
        header('Location: user.php');
        exit();
    }

    $stmt->close();
}
?>
