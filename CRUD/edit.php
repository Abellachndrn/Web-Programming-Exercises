<?php
include_once("config.php");
if(isset($_POST['update']))
{
    $idkaryawan = $_POST['idkaryawan'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $alamat = $_POST['alamat'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
$result = mysqli_query($mysqli, "UPDATE karyawan SET nama='$name',email='$email',mobile='$mobile',alamat='$alamat',jeniskelamin='$jeniskelamin',tempatlahir='$tempatlahir',tanggallahir='$tanggallahir' WHERE id=$id");
header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM karyawan WHERE idkaryawan=$id");
while($user_data = mysqli_fetch_array($result))
{
    $idkaryawan =$user_data['idkaryawan'];
    $name = $user_data['nama'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
    $alamat = $user_data['alamat'];
    $jeniskelamin = $user_data['jeniskelamin'];
    $tempatlahir = $user_data['tempatlahir'];
    $tanggallahir = $user_data['tanggallahir'];
}
?>
<html>
    <head>
        <title>Edit Data Karyawan</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
        <style>
            html {
                font-family: 'Krona One', sans-serif;
            }
            ul{
                padding: 2px 10px;
            }
            .navi{
                background: #bdc773; 
                overflow: hidden;
                box-shadow: 0px 2px 10px black;
                
            }
            #box1 {
                text-align:center;
                width:40%;
                height:500px;
                background: #bdc773;
                margin: 2rem auto 8.1rem auto;
                border-radius: 12px;
            }
            button{
                padding: 14px 50px;
                margin: 20px 10px;
                background: white;
                border-radius: 12px;
            }
            button a{
                padding: 0 20px;
                text-decoration:none;
                font-size: 15px;
            }
            button:hover {
                box-shadow: 0 12px 16px 0 rgba(0,0,255,0.3), 0 17px 50px 0 rgba(0,0,255,0.3);
                background: #bdc773;
            }
            table{
                font-size: 18px;
            }
            table td{
                padding: 12px 20px;
            }
            input {
                padding: 5px 28px;
            }
            p{
                font-size: 40px;
            }
            footer {
                text-align:center;
                padding: 15px;
                background-color: #bdc773;
                color: white;
            }
        </style>
    </head>
    <body>
        <nav class="navi">
        <ul>
            <a href="#" class="navbar-brand"></a>
        </ul>
        </nav>
        <center>
        <p>EDIT DATA KARYAWAN</p>
        <div id="box1">
            <form name="update_user" method="post" action="database.php">
                <table border="0">
                <tr>
                    <td>Id Karyawan</td>
                    <td><input type="int" name="idkaryawan" value=<?php echo $idkaryawan;?>></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="nama" value=<?php echo $name;?>></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value=<?php echo $email;?>></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="enum" name="jeniskelamin" value=<?php echo $jeniskelamin;?>></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempatlahir" value=<?php echo $tempatlahir;?>></td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td><input type="date" name="tanggallahir" value=<?php echo $tanggallahir;?>></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Update"></td>
                </tr>
                </table>
            </form>
            <button><a href="index.php">Kembali</a></button>
        </div>
        <footer>
            <h3>Author: Abella Chandra Nakhwah<h3>
        </footer>
        </center>
    </body>
</html>