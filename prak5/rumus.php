<?php
echo "
<style>
    p{
        font-size: 18px;
        text-align: center;
        margin-top: 18%;
    }
</style>
";

$nama = $_GET['n'];
$diameter = $_GET['d'];
$tinggi = $_GET['t'];
$luasSelimut = (pi() * $diameter) * $tinggi;
$luasLingkaran = (pi() * ($diameter ** 2)) / 4;
$luasTabung = round($luasSelimut + $luasLingkaran, 2);
$volumeTabung = round($luasLingkaran * $tinggi);

echo ("<p>Luas tabung $nama dengan diameter $diameter dan tinggi $tinggi adalah $luasTabung satuan luas</p>");
?>