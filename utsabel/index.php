<?php
    echo("<style>
        body{
            background: url('https://androidcentral.us/wp-content/uploads/2014/06/low-poly-texture-18.png');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-align: center;
            font-size:30px;
            color: white;
            margin-top:9%;
        }
    </style>");
    session_start();
    if(isset($_COOKIE['pemain'])){
        echo ("Hallo {$_COOKIE['pemain']} , selamat datang kembali di permainan ini!!!");
        echo ("<br/><a href='main.php'>Start Game</a>");
        echo ("<br/>Bukan Anda? <a href='login.html'>Klik Disini</a>");
    }else{
        header("Location:login.html");
    }


?>