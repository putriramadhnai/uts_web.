<?php

class Pembeli extends Koneksi{

    public function tampil()
    {
        $sql = "SELECT * FROM tb_pembeli";
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
        $id_barang = $_POST['id_barang'];
        $nama_pembeli = $_POST['nama_pembeli'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO tb_pembeli (id_barang, nama_pembeli, no_telp, alamat) VALUES (:id_barang, :nama_pembeli, :no_telp, :alamat)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_barang", $id_barang);
        $stmt->bindParam(":nama_pembeli", $nama_pembeli);
        $stmt->bindParam(":no_telp", $no_telp);
        $stmt->bindParam(":alamat", $alamat);
        $stmt->execute();
        
    }
    
    public function edit($id)
    {
        $sql = "SELECT * FROM tb_pembeli WHERE id_pembeli=:id_pembeli";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pembeli", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $id_barang = $_POST['id_barang'];
        $nama_pembeli = $_POST['nama_pembeli'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];
        $id_pembeli = $_POST['id_pembeli'];

        $sql = "UPDATE tb_pembeli SET id_barang=:id_barang, nama_pembeli=:nama_pembeli, no_telp=:no_telp, alamat=:alamat WHERE id_pembeli=:id_pembeli";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_barang", $id_barang);
        $stmt->bindParam(":nama_pembeli", $nama_pembeli);
        $stmt->bindParam(":no_telp", $no_telp);
        $stmt->bindParam(":alamat", $alamat);
        $stmt->bindParam(":id_pembeli", $id_pembeli);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_pembeli WHERE id_pembeli=:id_pembeli";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pembeli", $id);
        $stmt->execute();

    }
}