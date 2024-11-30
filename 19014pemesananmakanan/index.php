<?php
session_start();

if (!isset($_SESSION['username_cecafe'])) {
    header('Location: login.php');
    exit;
}

$page = "home.php"; // Default halaman jika 'x' tidak ada

if (isset($_GET['x'])) {
    switch ($_GET['x']) {
        case 'home':
            $page = "home.php";
            break;
        case 'order':
            $page = "order.php";
            break;
        case 'customer':
            $page = "customer.php";
            break;
            case 'user':
                if (isset($_SESSION['level_cecafe']) && (int)$_SESSION['level_cecafe'] === 1) { // Level admin = 1
                    $page = "user.php";
                } else {
                    header('Location:home'); // Redirect jika bukan admin
                    exit;
                }
                break;
            case 'report':
                if (isset($_SESSION['level_cecafe']) && (int)$_SESSION['level_cecafe'] === 1) { // Level admin = 1
                    $page = "report.php";
                } else {
                    header('Location:home'); // Redirect jika bukan admin
                    exit;
                }
                break;
        case 'menu':
            $page = "menu.php";
            break;
        case 'logout':
            $page = "proses/proses_logout.php";
            break;
        case 'login':
            if (!isset($_SESSION['username_cecafe'])) {
                include 'login.php';
                exit;
            } else {
                header('Location: index.php?x=home');
                exit;
            }
        default:
            echo "<h1>Halaman tidak ditemukan!</h1>";
            break;
    }
}

include 'main.php'; // Include layout utama
?>
