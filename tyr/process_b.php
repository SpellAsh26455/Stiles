<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

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
 $_SESSION['aa'] = $_POST['username'];
 echo $_SESSION['aa'];
}
else
{
	include'oops.html';
}
?>
<html>
<head>
	<title></title>
</head>
<body>
        <a href="logout.php"><img src="logout.png" width="60" height="60"></a>

</body>
</html>
