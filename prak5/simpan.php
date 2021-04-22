<?php
$namaFile = "datmhs.dat";
$myFile = fopen($namaFile, "a") or die("Crash!");

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tanggallahir = $_POST['tgllhr'];
$tempatlahir = $_POST['tmptlhr'];

fwrite($myFile, "\n".$nim."|".$nama."|".$tanggallahir."|".$tempatlahir."");
fclose($myFile);

echo "Data Berhasil Ditambah!";
?>