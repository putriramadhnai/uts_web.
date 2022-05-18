<?php
    require_once "inc/Koneksi.php";
    require_once "app/Barang.php";

    $bar = new Barang();
    $rows = $bar->tampil();

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
            <h1><a href="index.php"></a>TOKO GIFT BOX - PUTR</h1>
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
                        <h3>Data Barang</h3>
                        <div class="box">
                            <p><a href="brg_input.php">Tambah Data</a></p>
                            <table border="1" cellspacing="0" class="table">
                                <thead>
                                    <tr>
                                        <th width="60px">NO</th>
                                        <th>ID KATEGORI</th>        
                                        <th>NAMA BARANG</th>             
                                        <th>HARGA</th>        
                                        <th>STOK</th>        
                                        <th>EDIT</th>
                                        <th>DELETE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($rows as $row) { ?>
                                        <tr>
                                            <td><?php echo $row['id_barang'];?></td>
                                            <td><?php echo $row['id_kategori'];?></td>
                                            <td><?php echo $row['nama_barang'];?></td>
                                            <td><?php echo $row['harga'];?></td>
                                            <td><?php echo $row['stok'];?></td>
                                            <td><a href="brg_edit.php?id=<?php echo $row['id_barang']; ?>">Edit</a></td>
                                            <td><a href="brg_delete.php?id=<?php echo $row['id_barang']; ?>">Delete</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>
        </main>
           
        <footer>
            <div class="container">
                <small>Copyright &copy; 2022 | PUTRI RAMADHANI</small>
            </div>
        </footer>
    </div>
</body>
</html>