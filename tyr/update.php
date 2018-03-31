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
//echo $name;
//echo $email;
//echo $pass;
//echo $con_pass;

 session_start();
// echo $_SESSION['aa'];
$p=$_SESSION['aa'];
$name = $_POST['username'];
 $email = $_POST['email'];
 $pass = $_POST['pass'];
$img = $_POST['img'];

$sql = "UPDATE sign
       SET name='$name',email='$email',password='$pass' ,image='$img' WHERE id='$p' ";



if (mysqli_query($conn, $sql)) {
header("Location: viewProdemo_2.php");

} else {
    echo "Error updating record: " . mysqli_error($conn);
}

?>

