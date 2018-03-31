<?php

require 'lib_2.php';

$l1= new lib_2();
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
//echo "great";
}
else
{
//	echo mysqli_error($conn);
}
}

$myfile = fopen($path, "w") or die("Unable to open file!");
//$p=$POST['']

//$myfile = fopen("shooting_stars.js", "w") or die("Unable to open file!");

$bg = $_GET['bg'];
$player = $_GET['player'];
$obj = $_GET['obj'];
$bullet = $_GET['bullet'];
$enemybullet = $_GET['enemybullet'];
$speedofalien = $_GET['soa'];
$lives = $_GET['lives'];
$enemybulletspeed = $_GET['ebs'];

/*echo $bg."<br>";
echo $player."<br>";
echo $obj."<br>";
echo $bullet."<br>";
echo $enemybullet."<br>";
echo $speedofalien."<br>";
echo $lives."<br>";
echo $enemybulletspeed."<br>";
*/
$t=$l1->start($bullet,$enemybullet,$obj,$player,$bg,$lives,$speedofalien,$enemybulletspeed);
fwrite($myfile, $t);
//echo $t;

fclose($myfile);
$newURL = "index2.php";
header('Location: '.$newURL);
?>