<?php

$host = "localhost";
$uname = "root";
$pass = "";
$db = "mydb";

$conn = mysqli_connect($host, $uname, $pass, $db);

if(!$conn) {
    die('Error' + mysqli_error());
}

$username = $_POST['uname'];
$password = $_POST['pass'];

$table = "user";

$query = "SELECT * FROM $table WHERE username='$username' AND password='$password');";

$res = mysqli_query($conn, $query);
$rows = mysqli_num_rows($res); 

if($rows > 0) {
    echo "Login Success";
}

mysqli_close($conn);

?>