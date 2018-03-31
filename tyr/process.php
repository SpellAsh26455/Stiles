<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dtest";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
//mysql_select_db("test");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST['username'];
$pass = $_POST['pass'];

$re = mysqli_query($conn,"select * from sign where name ='$name' and password='$pass'")
or die("aa".mysql_error());

$row = mysqli_fetch_array($re);
if($row['name'] == $name && $row['password'] == $pass)
{
 session_start();
header("Location: p&d.php");

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
//                        echo $_SESSION['na'];

      //  echo $_SESSION['aa'];
    }
}
}
 else {
	include'oops.html';
 }

?>