<?php
    session_start();
    if(isset($_POST['submit'])){
        setcookie("pemain", $_POST['nama'], time() + 30*24*3600);
        $_SESSION['nyawa'] = 5;
        $_SESSION['skor'] = 0;
        $_SESSION['bil1'] = random_int(0, 20);
        $_SESSION['bil2'] = random_int(0, 20);
        header("Location:main.php");
    }


?>