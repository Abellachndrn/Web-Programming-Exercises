<?php
echo "<center><h3>Hallo, ".$_COOKIE['namauser'].", nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</h3></center>";
?>
<center>
<form method="get">
<h2>Masukan Bilangan Tebakan Anda : <input type="text" name="tebakan"></h2>
<input type="submit" name="submit" value="Submit">
</form>
</center>

<?php
$angka = $_COOKIE['random'];
if(isset($_GET['tebakan'])){
    $tebakan = $_GET['tebakan'];
    if ($tebakan == $angka){
        echo "<center>";
        echo "<p><h2>Selamat ya… Jawaban anda benar!</h2></p>";
        setcookie("random", "", time()+1*24*3600,"/");
        setcookie("random", rand(0,100), time()+1*24*3600,"/");
        echo "</center>";
        echo ("<center><h1 style=color:blue><a href='projektebakan.php'>Ayo Mulai Lagi!</a></h1></center>");
    }else if ($tebakan > $angka){
        echo "<center><p>Nilai tebakan anda terlalu besar :(</p></center>";
    }else if ($tebakan < $angka){
        echo "<center><p>Nilai tebakan anda terlalu kecil :(</p></center>";
    }
}
echo ("<p><center><h1><a href=logout.php>Log Out</a></h1></center></p>");
?>