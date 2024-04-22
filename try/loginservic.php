<?php
session_start();
$user = $_POST['uname'];
$pass = $_POST['pass'];
$encr_password = md5($pass);

$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "test";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM login WHERE username ='$user' AND pasword = '$encr_password'";
$result = $conn->query($sql);
if (!$result) {
    die("Error executing the query: " . $conn->error);
}

// Check if any matching records were found
if ($result->num_rows > 0) {
    $_SESSION['username'] = $user;
    header('Location: main.php');
    exit();
} else {
    header('Location: rehisrationveiw.html'); // Corrected the redirection path
    exit();
}

$conn->close();
?>
