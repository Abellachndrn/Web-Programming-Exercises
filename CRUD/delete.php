<?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM karyawan WHERE idkaryawan=$id");
header("Location:index.php");
?>