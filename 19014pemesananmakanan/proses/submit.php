<?php
// Menghubungkan dengan file koneksi database
include "koneksi.php";

// Memeriksa apakah form telah disubmit
if (isset($_POST['input_user_validate'])) {

    // Mengambil data dari form
    $name = mysqli_real_escape_string($kon, $_POST['name']);
    $password = mysqli_real_escape_string($kon, $_POST['password']);
    $phone = mysqli_real_escape_string($kon, $_POST['nohp']);
    $level = mysqli_real_escape_string($kon, $_POST['level']);
    $username = mysqli_real_escape_string($kon, $_POST['username']);
    $address = mysqli_real_escape_string($kon, $_POST['alamat']);

    // Hashing password untuk keamanan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk memasukkan data ke tabel tb_user
    $query = "INSERT INTO tb_user (nama, username, password, nohp, level, alamat) 
              VALUES ('$name', '$username', '$hashed_password', '$phone', '$level', '$address')";

    // Menjalankan query
    if (mysqli_query($kon, $query)) {
        // Jika berhasil menambah user, redirect atau tampilkan pesan sukses
        echo "<script>alert('User berhasil ditambahkan!'); window.location.href = 'index.php';</script>";
    } else {
        // Jika gagal, tampilkan pesan error
        echo "<script>alert('Gagal menambahkan user.'); window.history.back();</script>";
    }

    // Menutup koneksi database
    mysqli_close($kon);
}
?>
