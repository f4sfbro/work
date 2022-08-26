<?php
$servername = "localhost"; //or 127.0.0.1
$username = "root";
$password = "";
$dbname = "db_basic_php";

// Create connection
$conn = new mysqli ($servername,$username,$password,$dbname);

//แปลงภาษา unicode
$conn -> set_charset("utf8");

//Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
echo "Connnect Successfully!";
}

?>