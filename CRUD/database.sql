create database crud_db;
use crud_db;
CREATE TABLE `karyawan` (
    `idkaryawan` int(11) NOT NULL auto_increment,
    `nama` varchar(100),
    `email` varchar(100),
    `telepon` varchar(15),
    `alamat` text(100),
    `jeniskelamin` enum('pria','wanita'),
    `tempatlahir` varchar(),
    `tanggallahir` date,
PRIMARY KEY (`id`)
);