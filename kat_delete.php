<?php

require_once "inc/Koneksi.php";
require_once "app/Kategori.php";

$id = $_GET['id'];

$kat = new Kategori();
$row = $kat->delete($id);

?>

Data Berhasil Dihapus!

<a href="kat_tampil.php">Kembali</a>