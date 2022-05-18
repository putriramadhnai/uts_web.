<?php

require_once "inc/Koneksi.php";
require_once "app/Barang.php";

$id = $_GET['id'];

$bar = new Barang();
$row = $bar->edit($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO GIFT BOX - PUTRI | CRUD</title>
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

        <main>
                <div class="section">
                    <div class="container">
                        <h3>Edit Data Barang</h3>
                        <div class="box">
                        <form action="brg_proses.php" method="post">
                            <input type="hidden" name="id_barang" value="<?php echo $id; ?>">
                            <table>
                                <tr>
                                    <td>ID Kategori</td>
                                    <td><input type="text" name="id_kategori" value="<?php echo $row['id_kategori']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Nama Barang</td>
                                    <td><input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Harga Barang</td>
                                    <td><input type="text" name="harga" value="<?php echo $row['harga']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Stok Barang</td>
                                    <td><input type="text" name="stok" value="<?php echo $row['stok']; ?>"></td>
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
                <small>Copyright &copy; 2022 | Toko Gift BOX Berbasis Web by: PUTRI RAMADHANI</small>
            </div>
        </footer>
    </div>
</body>
</html>