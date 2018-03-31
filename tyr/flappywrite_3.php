<?php

require 'lib3.php';

$l1= new lib3();
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
//echo "great";
}
else
{
//	echo mysqli_error($conn);
}
}


//$myfile = fopen("DodgeThePillar.js", "w") or die("Unable to open file!");
$myfile = fopen($path, "w") or die("Unable to open file!");

$t=$l1->start();
echo $t;
fwrite($myfile, $t);
$s=$_GET["obj"];
$t=$l1->setImage("pipe",$s);
echo $t;
fwrite($myfile, $t);
$s=$_GET["player"];
$t=$l1->setImage("bird",$s);
echo $t;
fwrite($myfile, $t);
$s=$_GET["bg"];
$t=$l1->setImage("sky",$s);
echo $t;
fwrite($myfile, $t);
$t=$l1->endPreload();
echo $t;
fwrite($myfile, $t);
$t=$l1->startCreate();
echo $t;
fwrite($myfile, $t);
$t=$l1->addBgRepeat("sky");
echo $t;
fwrite($myfile, $t);
$t=$l1->addP("bird");
echo $t;
fwrite($myfile, $t);
$t=$l1->enablePhysicsOn("bird");
echo $t;
fwrite($myfile, $t);
$s=$_POST["gravity"];
$t=$l1->allowgravityY($s);
echo $t;
fwrite($myfile, $t);
$t=$l1->allowSpaceKey();
echo $t;
fwrite($myfile, $t);
$s=$_POST["space"];
$t=$l1->addPipes($s);
echo $t;
fwrite($myfile, $t);
$s=$_POST["fface"];
$s1=$_POST["fsize"];
$s2=$_POST["fcolor"];
$t=$l1->addScore($s1,$s,$s2);
echo $t;
fwrite($myfile, $t);
$t=$l1->endCreate();
echo $t;
fwrite($myfile, $t);
$t=$l1->startUpdate();
echo $t;
fwrite($myfile, $t);
$t=$l1->addBgRepeat2();
echo $t;
fwrite($myfile, $t);
$s=$_POST["lim1"];
$s1=$_POST["lim2"];
$t=$l1->gameover($s,$s1);
echo $t;
fwrite($myfile, $t);
$t=$l1->overlap("bird","pipes","restartGame");
echo $t;
fwrite($myfile, $t);
$t=$l1->endUpdate();
echo $t;
fwrite($myfile, $t);
$s=$_POST["jumpHeight"];
$t=$l1->jump($s);
echo $t;
fwrite($myfile, $t);
$t=$l1->restart();
echo $t;
fwrite($myfile, $t);
$s=$_POST["pipe"];
$t=$l1->pipe($s);
echo $t;
fwrite($myfile, $t);
$t=$l1->end();
echo $t;
fwrite($myfile, $t);


fclose($myfile);
header("Location: index2.php");
//Written By Katyani Mehra and Mahdi Lalani

?>