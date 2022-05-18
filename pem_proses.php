<?php

require_once "inc/Koneksi.php";
require_once "app/Pembeli.php";

$pem = new Pembeli();

if (isset($_POST['btn_simpan'])) {
    $pem->simpan();
    header("location:pem_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $pem->update();
    header("location:pem_tampil.php");
}
