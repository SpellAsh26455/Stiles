<?php
$img =$_GET["name"];
echo $img;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO img (img) VALUES ('$img')";
mysqli_query($conn, $sql);
//<script type="text/javascript">location.href = 'newurl';</script>
?>