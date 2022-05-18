<?php

require_once "inc/Koneksi.php";
require_once "app/Kategori.php";

$kat = new Kategori();

if (isset($_POST['btn_simpan'])) {
    $kat->simpan();
    header("location:kat_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $kat->update();
    header("location:kat_tampil.php");
}
