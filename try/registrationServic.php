

<?php

$newusername =$_POST['newusername'];

$newpassword =$_POST['newpassword'];

$encr_password =md5($newpassword);



$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "insert into  login values ('$newusername' ,'$encr_password')";
    $result = $conn->query($sql);







?>