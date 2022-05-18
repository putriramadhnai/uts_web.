<?php

class Kategori extends Koneksi{

    public function tampil()
    {
        $sql = "SELECT * FROM tb_kategori";
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
        $kategori_nama = $_POST['kategori_nama'];

        $sql = "INSERT INTO tb_kategori (kategori_nama) VALUES (:kategori_nama)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kategori_nama", $kategori_nama);
        $stmt->execute();
        
    }
    
    public function edit($id)
    {
        $sql = "SELECT * FROM tb_kategori WHERE id_kategori=:id_kategori";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kategori", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $kategori_nama = $_POST['kategori_nama'];
        $id_kategori = $_POST['id_kategori'];

        $sql = "UPDATE tb_kategori SET kategori_nama=:kategori_nama WHERE id_kategori=:id_kategori";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kategori_nama", $kategori_nama);
        $stmt->bindParam(":id_kategori", $id_kategori);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_kategori WHERE id_kategori=:id_kategori";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kategori", $id);
        $stmt->execute();

    }
}