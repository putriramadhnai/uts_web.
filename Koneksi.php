<?php

class Koneksi {
    protected object $db;

    public function __construct() {
        $this->db = new PDO("mysql:host=localhost;dbname=tokoGIFTBOX", "root", "");
    }
}