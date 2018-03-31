<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dtest";

echo $dummyname = $_SESSION['dummyName'];
$img = $_POST['name'];

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE game SET img='$img' WHERE dummyName='".$dummyname."'";
if (mysqli_query($conn, $sql)) {
echo "great";
}
else
{
	echo mysqli_error($conn);
}
mysqli_close($conn);
//else
//{
$newURL = "play.php";
header('Location: '.$newURL);
//}
?>