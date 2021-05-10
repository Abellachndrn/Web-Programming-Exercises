<?php
    include_once("config.php");
    $idkaryawan =$_POST['idkaryawan'];
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $alamat = $_POST['alamat'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];

    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    if (!$conn){
        die("Connection Error".mysqli_connect_error());
    ?>
    <script>console.log('Connection Error');</script>
    <?php
    }else{
    ?>
    <script>console.log('Connection Success')</script>
    <?php
    }
    $query = "UPDATE karyawan SET 
    nama='$name', 
    email='$email', 
    mobile='$mobile', 
    alamat='$alamat', 
    jeniskelamin='$jeniskelamin',
    tempatlahir='$tempatlahir',
    tanggallahir='$tanggallahir' 
    WHERE idkaryawan=$idkaryawan";
    if(!mysqli_query($conn, $query)){
        die("Update Data Error  : ".mysqli_error($conn));
    }else{
        header("Location:index.php");
    }
    mysqli_close($conn);
?>