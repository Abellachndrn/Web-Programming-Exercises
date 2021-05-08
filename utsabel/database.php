<?php
    echo "
    <style>
        body{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 30px;
            color: white;
            text-align: center;
            background: url('https://androidcentral.us/wp-content/uploads/2014/06/low-poly-texture-18.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
    
    </style>
    ";
    function inputData($nama, $skor){
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'game';
        $port   = 3310;

        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $port);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "INSERT INTO highscore (Player, Score) VALUES ('$nama', $skor)";
        if($conn->query($sql) != TRUE){
            die ("Error: " . $sql . "<br>" . $conn->error);
        }
        $conn->close();
    }



    function ambilData(){
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'game';
        $port   = 3310;
        $no = 1;
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $port);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "SELECT * FROM highscore ORDER BY Score DESC LIMIT 10";
        $res = $conn->query($sql);
        echo("<table border=1>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Skor</th>
            </tr>");
        if ($res->num_rows >0){
            while($row = $res->fetch_assoc()){
                echo("<tr>
                    <td>{$no}</td>
                    <td>{$row['Player']}</td>
                    <td>{$row['Score']}</td>
                </tr>");
                $no++;
            }
        }
        echo("</table>");
    }
?>