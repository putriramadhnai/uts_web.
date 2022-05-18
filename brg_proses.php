<?php

require_once "inc/Koneksi.php";
require_once "app/Barang.php";

$bar = new Barang();

if (isset($_POST['btn_simpan'])) {
    $bar->simpan();
    header("location:brg_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $bar->update();
    header("location:brg_tampil.php");
}
