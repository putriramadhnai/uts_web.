<?php
   
    require_once "inc/Koneksi.php";
    require_once "app/Pembeli.php";


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
            <h1><a href="index.php"></a>TOKO GIFT BOX -PUTRI </h1>
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
                        <h3>Tambah Data Customer</h3>
                        <div class="box">
                            <form action="pem_proses.php" method="POST" >
                                <input type="text" name="id_barang" class="input-control" placeholder="ID Barang" required>
                                <input type="text" name="nama_pembeli" class="input-control" placeholder="Nama Pembeli" required>
                                <input type="text" name="no_telp" class="input-control" placeholder="No Telepon" required>
                                <input type="text" name="alamat" class="input-control" placeholder="Alamat" required>
                                <input type="submit" name="btn_simpan" value="SIMPAN">
                            </form>
                            <?php
                                if(isset($_POST['submit'])){
                                
                                    $nama = ucwords($_POST['id_barang']);
                                    
                                    $insert = mysqli_query($conn, "INSERT INTO tb_pembeli VALUES(
                                                        null,
                                                        '".$nama."')");
                                    if ($insert){
                                        echo '<script>alert("Tambah Data Berhasil")</script>';
                                        echo '<script>window.location="pem_tampil.php"</script>';

                                    } else{
                                        echo 'gagal'.mysqli_error($conn);
                                    }

                                   
                                }

                                
                            ?>

                        </div>

                    </div>

                </div>
        </main>
           
        <footer>
            <div class="container">
                <small>Copyright &copy; 2022 | toko GIFT BOS Berbasis Web By Putri Ramadhani</small>
            </div>
        </footer>
    </div>
</body>
</html>