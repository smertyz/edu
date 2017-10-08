<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "img";

 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'img');
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


//$conn = new mysqli($servername, $username, $password, $dbname);

if (!$db) {
    die("Connection failed: " . $db->connect_error);
} 

$db->close();
?>