<?php

require_once "inc/Koneksi.php";
require_once "app/Pembeli.php";

$id = $_GET['id'];

$pem = new Pembeli();
$row = $pem->delete($id);

?>

Data Berhasil Dihapus!

<a href="pem_tampil.php">Kembali</a>