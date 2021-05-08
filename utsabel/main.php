<?php
    echo "
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background: url('https://androidcentral.us/wp-content/uploads/2014/06/low-poly-texture-18.png');
            background-repeat: no-repeat;
            background-size: cover;
            text-align:center;
            font-size: 20px;
            margin-top: 10%;
            font-color: whiite;
        }    
        h1{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-color: white;
            padding: 15px 20px;
        }
        h2{
            font-color: white;
            padding-bottom: 10px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        h3{
            font-color: red;
            padding-bottom: 10px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-top: 3%;
        }
        a{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-color: white;
        }
    </style>
    ";
    session_start();
    include('./database.php');
    if(isset($_COOKIE['pemain'])){
        $pemain = $_COOKIE['pemain'];
        $skor = $_SESSION['skor'];
        $nyawa = $_SESSION['nyawa'];
        $bil1 = $_SESSION['bil1'];
        $bil2 = $_SESSION['bil2'];
        $num = $bil1 + $bil2;
        
        if($nyawa == 0){
            echo ("Hello $pemain, Sayang permainan sudah selesai. Semoga kali lain bisa lebih baik.");
            echo ("<br/>Score Anda : $skor");
            echo ("<br/><a href='main.php'>Main Lagi</a>");
            inputData($pemain, $skor);
            ambilData();
            $_SESSION['skor'] = 0;
            $_SESSION['nyawa'] = 5;
            $_SESSION['bil1'] = random_int(0, 20);   
            $_SESSION['bil2'] = random_int(0, 20);
        }else{
            
            if(isset($_POST['submit'])){
                $jawaban = $_POST['input'];
                if(intval($jawaban) == $num){
                    $skor += 10;
                    $_SESSION['skor'] = $skor;
                    echo("Hello $pemain, Selamat jawaban Anda benar…");
                    echo("<br />Lives: $nyawa | Score: $skor");
                }else{
                    $nyawa -= 1;
                    $skor -= 2;
                    echo("Hello $pemain, sayang jawaban Anda salah… tetap semangat ya !!!");
                    echo("<br />Lives: $nyawa | Score: $skor");
                    $_SESSION['skor'] = $skor;
                    $_SESSION['nyawa'] = $nyawa;
                }
                $_SESSION['bil1'] = random_int(0, 20);
                $_SESSION['bil2'] = random_int(0, 20);
                echo(" <a href='main.php'>Soal Selanjutnya</a>");
            }else{
                echo ("Hello $pemain, tetap semangat ya… you can do the best!!");
                echo ("<br/>Lives: $nyawa | Score: $skor");
                echo("<br/>Berapakah $bil1 + $bil2 = ");
                echo('<form method="post">
                        <input type="text" name="input">
                        <button type="submit" name="submit">Submit</button>
                    </form>');
            }


        }
    }else{
        header("Location:login.html");
    }

?>