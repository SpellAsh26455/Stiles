<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dtest";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start(); 
$msg = $_POST['msg'];
$name = $_SESSION['name'];

$sql="insert into chat(name,msg) values('$name','$msg')";
$result = $conn->query($sql);

header("Location:chat_text.php");
?>
