<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// tes koneksi database, menggunakan manager-osx (php5.6)
$servername = "db_frontend";
$port = "3306";
$username = "root";
$password = "azzam";
$dbname = "niagahoster";

// Create connection
$conn = new mysqli($servername.':'.$port, $username, $password);
// $conn = mysql_connect($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 