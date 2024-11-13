<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "userdb";
$conn = new mysqli($servername, $username, $password, $db, 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
echo "Connected successfully";
}
?>