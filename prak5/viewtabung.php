<?php
$namaFile = "datatabung.dat";
$myFile = fopen($namaFile, "r") or die("Crash!");

echo "
<style>
    h2{
        text-align: center;
        color: black;
    }
    th{
        color : black;
    }
</style>
";
echo "<h2>DATA UKURAN TABUNG</h2>";
echo "<center>";
echo "<table border='1'>";
echo("<tr>
        <th>Nama Tabung</th>
        <th>Diameter</th>
        <th>Tinggi</th>
        <th>Luas</th>
    </tr>");
while (!feof($myFile)){
    echo("<tr>");
    $tabung = explode(",", fgets($myFile));
    $func = "http://localhost/abella/prak5/rumus.php?n=$tabung[0]&d=$tabung[1]&t=$tabung[2]";
    echo("
        <td>$tabung[0]</td>
        <td>$tabung[1]</td>
        <td>$tabung[2]</td>
        <td><a href=$func target='_blank'>view</a></td>
        ");
    echo("</tr>");
};
echo("</table>");
echo "</center>";

fclose($myFile);
?>