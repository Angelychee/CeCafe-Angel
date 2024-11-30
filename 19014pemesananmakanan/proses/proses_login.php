<?php 
session_start();
include "koneksi.php";

$username = isset($_POST['username']) ? htmlentities($_POST['username']) : "";
$password = isset($_POST['password']) ? md5(htmlentities($_POST['password'])) : "";

if (!empty($_POST['submit-validate'])) {
    // Ini buat meriksa username sm password di database
    $query = mysqli_query($kon, "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'");
    $hasil = mysqli_fetch_array($query);

    // Ini buat nek login e jadi
    if ($hasil) {
        $_SESSION['username_cecafe'] = $username;
        $_SESSION['level_cecafe'] = $hasil['level'];
        header('location:../home');
    } else { 
        // Ini buat nek login e gagal
        echo "<script>
                alert('Username atau Password salah, weh 🧐');
                window.location='../login';
              </script>";
    }
}
?>
