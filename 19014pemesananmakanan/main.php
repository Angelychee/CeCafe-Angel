<?php 
    session_start();
    if (empty($_SESSION['username_cecafe'])) {
        header('location:login');
    }

    include "proses/koneksi.php";
    $query = mysqli_query($kon, "SELECT * FROM tb_user WHERE username = '$_SESSION[username_cecafe]'");
    $hasil = mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CeCafe - Pemesanan Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="height: 3000px">
    <!-- Ini Header -->
    <?php include "header.php"; ?>

    <div class="container-lg">
        <div class="row">
            <!-- Ini Sidebar -->
            <?php include "sidebar.php"; ?>

            <!-- Ini Content -->
            <div class="col-lg-9">
            <?php
            if (isset($_GET['x'])) {
                // Tentukan halaman berdasarkan parameter 'x'
                switch ($_GET['x']) {
                    case 'home':
                        include "home.php";
                        break;
                    case 'order':
                        include "order.php";
                        break;
                    case 'customer':
                        include "customer.php";
                        break;
                    case 'user':
                        include "user.php";
                        break;
                    case 'report':
                        include "report.php";
                        break;
                    case 'menu':
                        include "menu.php";
                        break;
                    case 'logout':
                        include "proses/proses_logout.php";
                        break;
                    case 'login':
                        include 'login.php'; // Login tidak perlu layout
                        exit; // Stop eksekusi karena layout tidak dibutuhkan
                    default:
                    include "home.php"; // Default ke 'home.php'
                }
            }
            ?>
            
            </div>
        </div> <!-- Penutup row -->
    </div> <!-- Penutup container-lg -->

    <div class="fixed-bottom text-center mb-2">
        Copyright 2024 Angel Christina Grace - XI RPL
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
