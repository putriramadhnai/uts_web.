<?php

// Check connection
    //koneksi ke database 
    $hostname = 'localhost';
    $username ='root';
    $password = '';
    $dbname = 'tokoGIFTBOX';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');
?>