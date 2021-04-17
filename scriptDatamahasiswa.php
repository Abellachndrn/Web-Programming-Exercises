<?php
$namaFile = "datamhs.dat";
$myFile = fopen($namaFile, "r") or die("Tidak bisa buka file!");
echo "<style>
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
    h1 {
        color: black;
        text-align:center;
    }
    th {
        font-size: 25px;
        color: black;
    }
	p{
      margin-top: 20px;
      margin-left: 200px;
    }
    td{
        font-size: 20px;
    }
	.container{
      display: flex;
      flex-direction: column;
	}
	  
</style>";
echo "<h1>Data Mahasiswa</h1>";
echo "Jumlah data : ".count(file($namaFile));

$date1 = explode("-", date("Y-m-d"));
$daySkrng = $date1[2];
$monthSkrng = $date1[1];
$yearSkrng = $date1[0];
$jd2 = gregoriantojd($monthSkrng, $daySkrng, $yearSkrng);

function hitungUmur(String $dateLahir, $jd2){
    $dateLahir = explode("-", $dateLahir);
    $dayLahir = $dateLahir[2];
    $monthLahir = $dateLahir[1];
    $yearLahir = $dateLahir[0];
    $jd1 = gregoriantojd($monthLahir, $dayLahir, $yearLahir);
    $umur = intval(($jd2 - $jd1) / 365);
    return $umur;
}
echo "<br>";
echo "<table border='1'>";
echo("<tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama Mhs</th>
        <th>Tanggal Lahir</th>
        <th>Tempat Lahir</th>
        <th>Usia(Thn)</th>
    <tr>");
$nomor = 1;
while (!feof($myFile)){
    echo("<tr>");
    $datamhs = explode("|", fgets($myFile));

    if ($datamhs[0] != ''){
        $usia = hitungUmur($datamhs[2], $jd2);
        echo("
            <td>$nomor</td>
            <td>$datamhs[0]</td>
            <td>$datamhs[1]</td>
            <td>$datamhs[2]</td>
            <td>$datamhs[3]</td>
            <td>$usia</td>");
        $nomor++;
    }
    echo("</tr>");
}
echo "</table>";

fclose($myFile);

?>