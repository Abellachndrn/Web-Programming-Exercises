<html>
    <head>
        <title>Add Karyawan</title>
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
                box-shadow: 2px 2px 10px black;
            
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
        <p>TAMBAH DATA KARYAWAN</p>
        <div id="box1">
            <form action="add.php" method="post" name="form1">
                <table width="25%" border="0">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td><input type="number" name="mobile"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><input type="radio" name="jeniskelamin" value="pria">Pria</td>
                        <td><input type="radio" name="jeniskelamin" value="wanita">Wanita</td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td><input type="text" name="tempatlahir"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><input type="date" name="tanggallahir"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="Submit" value="Add"></td>
                    </tr>
                </table>
            </form>
            <button><a href="index.php">Kembali</a></button>
        </div>
        <?php
        if(isset($_POST['Submit'])) {
        $name = $_POST['nama'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $alamat = $_POST['alamat'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $tempatlahir = $_POST['tempatlahir'];
        $tanggallahir = $_POST['tanggallahir'];

        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO karyawan(nama,email,mobile,alamat,jeniskelamin,tempatlahir,tanggallahir) 
        VALUES('$name','$email','$mobile','$alamat','$jeniskelamin','$tempatlahir','$tanggallahir')");
        echo "Mahasiswa berhasil ditambahkan!";
        echo "<a href='index.php'>View Karyawan</a>";
        echo mysqli_error($mysqli);
        }
        ?>
        <br/>
        <footer>
            <h3>Author: Abella Chandra K3519001<h3>
        </footer>
        </center>
    </body>
</html>