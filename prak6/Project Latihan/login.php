<?php
$file = "data.txt";
$files = fopen($file, "r") or die("Crash!");
$datauser = array();
while(!feof($files)){
    $users = explode(",", fgets($files));
    array_push($datauser, $users);
}
fclose($files);

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    foreach($datauser as $profile_user){
        if ((trim($profile_user[0]) == $username) && (trim($profile_user[2]) == $password)){
            $_COOKIE['namauser'] = trim($profile_user[1]);
            setcookie("namauser", trim($profile_user[1]), time()+1*24*3600,"/");
            setcookie("random", rand(0,100), time()+1*24*3600,"/");
        }
        if (isset($_COOKIE["namauser"])){
            header("Location: projektebakan.php");
        }
    }
    echo("<center><h2>Tidak Bisa Login!</h2></center>");
    echo("<center><h2>Login kembali <a href='formabel.html'>disini</a></h2></center>");

}
?>