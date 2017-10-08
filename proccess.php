<?php
include 'connection.php';
if (isset($_POST['butt'])) {
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	// $conn->query("INSERT INTO users (name, surname, username, password, email) VALUES ('$name', '$surname', '$username', '$password', '$email')");
	//$conn->close();
	$conn = new mysqli("localhost", "root", "", "img");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (name, surname, email, password, username )
VALUES ('$name', '$surname', '$email', '$password','$username')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>