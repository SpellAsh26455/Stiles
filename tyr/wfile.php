<?php

require 'lib.php';

$l1= new lib();
//$p=$POST['']
session_start();
  $g = $_POST['gameofname'];
  $actualname = $g.".js";  
//echo "<br>";
 $nameofuser =  $_SESSION['name'];
mkdir("upload/".$nameofuser);
//echo "<br>";
 $location = "upload/".$nameofuser."/";
//echo "<br>";
 $dummyname =  $nameofuser."_".$actualname; //dummyName
//echo "<br>";
 $path= $location.$dummyname;//paths
 $_SESSION['nameofgame'] = $path;
$_SESSION['dummyName'] = $dummyname;

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
$result = mysqli_query($conn,"SELECT `dummyName` FROM `game` WHERE `dummyname` = '".$dummyname."'");
if (mysqli_num_rows($result))
{
    echo "string Rows exist";

    $sql_update = "UPDATE game SET actualName='$actualname' ,dummyName='$dummyname', paths='$path', userName='$nameofuser'
     WHERE dummyname='".$dummyname."'";

if (mysqli_query($conn, $sql_update)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

   
}
else{

$sql = "INSERT INTO game (actualName,dummyName,paths,userName)
VALUES ('$actualname', '$dummyname','$path','$nameofuser')";

if (mysqli_query($conn, $sql)) {
echo "great";
}
else
{
	echo mysqli_error($conn);
}
}

$myfile = fopen($path, "w") or die("Unable to open file!");
$player = $_GET['player'];
$obj = $_GET['obj'];

/*$up = $_GET['up'];
$down = $_GET['down'];
$right = $_GET['right'];
$left = $_GET['left'];
*/
$speed = $_GET['speed'];

$t=$l1->start();
//echo $t;
fwrite($myfile, $t);

$p="snake";
$p1=$player;
$o="apple";
$o1=$obj;

$bg="bg";
$bg1 = $_GET['bg'];


$t=$l1->setImage($p,$p1,$o,$o1,$bg,$bg1);
//echo $t;
fwrite($myfile, $t);

/*$dir1 =$right;
$dir2=$left;
$dir3=$up;
$dir4=$down;*/
$speed=$speed;
$t=$l1->update($speed);
//echo $t;
fwrite($myfile, $t);
fclose($myfile);

$newURL = "index2.php";
header('Location: '.$newURL);
?>