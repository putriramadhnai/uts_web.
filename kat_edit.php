<?php

require_once "inc/Koneksi.php";
require_once "app/Kategori.php";

$id = $_GET['id'];

$kat = new Kategori();
$row = $kat->edit($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO GAS LPG PUTZA | CRUD</title>
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
            <h1><a href="index.php"></a>TOKO GAS LPG PUTZA</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="kat_tampil.php">Kategori</a></li>
                <li><a href="brg_tampil.php">Produk</a></li>
                <li><a href="pem_tampil.php">Customer</a></li>
                <li><a href="logout.php">LogOut</a></li>
            </ul>
        </div>
    </header>

        <main>
                <div class="section">
                    <div class="container">
                        <h3>Edit Data Kategori</h3>
                        <div class="box">
                        <form action="kat_proses.php" method="post">
                            <input type="hidden" name="id_kategori" value="<?php echo $id; ?>">
                            <table>
                                <tr>
                                    <td>Nama Kategori</td>
                                    <td><input type="text" name="kategori_nama" value="<?php echo $row['kategori_nama']; ?>"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="btn_update" value="UPDATE"></td>
                                </tr>
                            </table>
                        </form>
            
                        </div>

                    </div>

                </div>
        </main>
           
        <footer>
            <div class="container">
                <small>Copyright &copy; 2022 | Sistem Informasi Berbasis Web By Dina Amalia Putri Lubis</small>
            </div>
        </footer>
    </div>
</body>
</html>