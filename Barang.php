<?php

class Barang extends Koneksi{

    public function tampil()
    {
        $sql = "SELECT * FROM tb_barang";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()){
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $id_kategori = $_POST['id_kategori'];
        $nama_barang = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $sql = "INSERT INTO tb_barang (id_kategori, nama_barang, harga, stok) VALUES (:id_kategori, :nama_barang, :harga, :stok)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kategori", $id_kategori);
        $stmt->bindParam(":nama_barang", $nama_barang);
        $stmt->bindParam(":harga", $harga);
        $stmt->bindParam(":stok", $stok);
        $stmt->execute();
        
    }
    
    public function edit($id)
    {
        $sql = "SELECT * FROM tb_barang WHERE id_barang=:id_barang";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_barang", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $id_kategori = $_POST['id_kategori'];
        $nama_barang = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $id_barang = $_POST['id_barang'];

        $sql = "UPDATE tb_barang SET id_kategori=:id_kategori, nama_barang=:nama_barang, harga=:harga, stok=:stok WHERE id_barang=:id_barang";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kategori", $id_kategori);
        $stmt->bindParam(":nama_barang", $nama_barang);
        $stmt->bindParam(":harga", $harga);
        $stmt->bindParam(":stok", $stok);
        $stmt->bindParam(":id_barang", $id_barang);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_barang WHERE id_barang=:id_barang";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_barang", $id);
        $stmt->execute();

    }
}