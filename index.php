<?php
    
    require_once "inc/Koneksi.php";
    require_once "app/Kategori.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO GIFT BOX - PUTRI| CRUD</title>
    <link rel="stylesheet" href="layout/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- header -->
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <h1><a href="index.php"></a>TOKO GIFT BOX - PUTRI</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="kat_tampil.php">Kategori</a></li>
                <li><a href="brg_tampil.php">Produk</a></li>
                <li><a href="pem_tampil.php">Customer</a></li>
                <li><a href="logout.php">LogOut</a></li>
            </ul>
        </div>
    </header>

    <div class="section">
        <div class="container">
            <div class="box">
                <h2>Selamat Datang di Toko Gas LPG Putza </h2>
                <img src="layout/assets/img/giftbox1.jpg" alt="" width="500" height="300">
                <h4>Jl Mandolin No 78, Medan</h4>
            </div>

        </div>

    </div>
           
    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 | PUTRI RAMADHANI</small>
        </div>
    </footer>
</body>
</html>