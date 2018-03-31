<?php

require 'breaklib.php';

$l1= new breaklib();
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

$t=$l1->startPreload();
echo $t;
fwrite($myfile, $t);
$s=$_GET["bg"];
$t=$l1->loadImg("sky",$s);
echo $t;
fwrite($myfile, $t);
$s=$_GET["player"];
$t=$l1->loadImg("paddle",$s);
echo $t;
fwrite($myfile, $t);
$s=$_GET["brick"];
$t=$l1->loadImg("brick",$s);
echo $t;
fwrite($myfile, $t);
$s=$_GET["ball"];
$t=$l1->loadImg("ball",$s);
echo $t;
fwrite($myfile, $t);
$t=$l1->endFunction();
echo $t;
fwrite($myfile, $t);
$t=$l1->startCreate();
echo $t;
fwrite($myfile, $t);
$t=$l1->setBg(0,0,'sky');
echo $t;
fwrite($myfile, $t);
$t=$l1->enableLeft();
echo $t;
fwrite($myfile, $t);
$t=$l1->enableRight();
echo $t;
fwrite($myfile, $t);
$t=$l1->setpaddle(200,400);
echo $t;
fwrite($myfile, $t);
if(isset($_POST["immovable_player"]))
{
	$t=$l1->paddleImo(true);
}
else
{
	$t=$l1->paddleImo(false);
}
echo $t;
fwrite($myfile, $t);
$t=$l1->setBricks($_GET["bw"],$_GET["bh"],true);
echo $t;
fwrite($myfile, $t);
$t=$l1->setBall();
echo $t;
fwrite($myfile, $t);
$t=$l1->setBallVelocity($_POST["bSpeed"],$_POST["bSpeed"]);
echo $t;
fwrite($myfile, $t);
$t=$l1->setBallBounce(1);
echo $t;
fwrite($myfile, $t);
$t=$l1->endFunction();
echo $t;
fwrite($myfile, $t);
$t=$l1->startUpdate();
echo $t;
fwrite($myfile, $t);
if(isset($_POST["left"]))
{
	$a=$_POST["lSpeed"];
}
$t=$l1->leftdown($a);
	echo $t;
	fwrite($myfile, $t);
if(isset($_POST["right"]))
{
	$a=$_POST["rSpeed"];
}
$t=$l1->rightdown($_POST["rSpeed"]);
	echo $t;
	fwrite($myfile, $t);
$t=$l1->collidepb();
echo $t;
fwrite($myfile, $t);
$t=$l1->collidebb();
echo $t;
fwrite($myfile, $t);
$t=$l1->restart();
echo $t;
fwrite($myfile, $t);
$t=$l1->endFunction();
echo $t;
fwrite($myfile, $t);
$t=$l1->killb();
echo $t;
fwrite($myfile, $t);
$t=$l1->initgame();
echo $t;
fwrite($myfile, $t);


fclose($myfile);
header("Location: index2.php");
//Written By Katyani Mehra and Mahdi Lalani

?>
