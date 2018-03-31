<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dtest";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
  error_reporting(E_ALL & ~E_NOTICE); //imp

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$bb = $_POST['submit'];

if(isset($bb))
{

$sql = "INSERT INTO sign (name,email,password)
VALUES ('$name', '$email', '$pass')";

if (mysqli_query($conn, $sql)) {
header("Location: p&d.php");
//ob_start();
session_start();
  $ww= $_POST['username'];
//$_SESSION['aa']
$result = mysqli_query($conn,"SELECT * FROM sign WHERE name='$ww' ");

if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
            $_SESSION['aa']=$row['id'];
            $_SESSION['name']=$row['name'];
      //  echo $_SESSION['aa'];
    }
}
}
}
 else {
    echo  mysqli_error($conn);
}

mysqli_close($conn);
?>
