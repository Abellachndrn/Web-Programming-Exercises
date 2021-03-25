<?php
$baris = 4;
$kolom = 5;
$angka = 1;
echo "<table border='1'>";
for($i = 0; $i < $baris ; $i++){
	echo ("<tr>");
 	for ($j = 0; $j < $kolom ; $j++){
			if ($angka % 2 == 0){
				echo ("<td style=color:black;background-color:red;>${angka}</td>");
			}else {
				echo ("<td style=color:red;background-color:white;>${angka}</td>");
			}
			$angka=$angka+1;
 	}
  	echo ("</tr>");
}
echo "</table>";
?>