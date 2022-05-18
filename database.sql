create table tb_kategori(
    id_kategori INT (11) AUTO_INCREMENT,
    kategori_nama VARCHAR (50),
    primary key (id_kategori)
);
create table tb_barang(
    id_barang INT (11) NOT NULL AUTO_INCREMENT,
    id_kategori INT (11),
    nama_barang VARCHAR (50),
    harga INT (11),
    stok INT (11),
    primary key (id_barang),
    FOREIGN KEY (id_kategori) references tb_kategori (id_kategori)
);
create table tb_pembeli(
    id_pembeli INT (11) NOT NULL AUTO_INCREMENT,
    id_barang INT (11),
    nama_pembeli VARCHAR (100),
    no_telp VARCHAR (14),
    alamat VARCHAR (100),
    primary key (id_pembeli),
    FOREIGN KEY (id_barang) references tb_barang (id_barang)
);