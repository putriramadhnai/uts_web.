<?php

require_once "inc/Koneksi.php";
require_once "app/Barang.php";

$id = $_GET['id'];

$bar = new Barang();
$row = $bar->delete($id);

?>

Data Berhasil Dihapus!

<a href="brg_tampil.php">Kembali</a>