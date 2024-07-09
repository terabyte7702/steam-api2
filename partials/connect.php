<?php
$servername = "localhost";
$name = "root";
$password = "";
$database = "market";

// Create connection
$conn = mysqli_connect($servername, $name, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
	echo "Success";
};
?>