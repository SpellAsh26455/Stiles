<?php

require 'eatstarlib.php';

$l1= new eatstarlib();
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

$t=$l1->hello();
echo $t;
fwrite($myfile, $t);
$t=$l1->startpreload();
echo $t;
fwrite($myfile,$t);
$c1=$_GET["bg"];
$t=$l1->setImage("sky",$c1);
echo $t;
fwrite($myfile,$t);
$c1=$_GET["inc"];
$t=$l1->setImage("star",$c1);
echo $t;
fwrite($myfile,$t);
$t=$l1->setImage("ground","assets/platform.png");
echo $t;
fwrite($myfile,$t);
if($_GET["player"]=="assets/spacedancerdude.gif")
{
	$t=$l1->setImageSprite("dude","assets/dude.png",32,48);
}
else
{
	$t=$l1->setImageSprite("dude","assets/guy1.png",33,47);
}
echo $t;
fwrite($myfile,$t);
$t=$l1->endpreload();
echo $t;
fwrite($myfile,$t);
$t=$l1->setVariables();
echo $t;
fwrite($myfile,$t);
$t=$l1->startCreate();
echo $t;
fwrite($myfile,$t);
$p=true;
if($p)
{
$t=$l1->addPlatforms();
echo $t;
fwrite($myfile,$t);	
}
if(isset($_POST["gravity"]))
{
	$a=$_POST["sGravity"];
}
else
{
	$a=0;
}
$t=$l1->addPlayer($a);
echo $t;
fwrite($myfile,$t);
if(isset($_POST["idfs"]))
{
	$a=300;
}
else
{
	$a=0;
}
$t=$l1->addStars($_POST["nosStars"],$a,$_POST["disStars"]);
echo $t;
fwrite($myfile,$t);
$t=$l1->createScore();
echo $t;
fwrite($myfile,$t);

$t=$l1->allowCursors();
echo $t;
fwrite($myfile,$t);


$t=$l1->endFunction();
echo $t;
fwrite($myfile,$t);

$t=$l1->startUpdate();
echo $t;
fwrite($myfile,$t);

$t=$l1->allowCollide();
echo $t;
fwrite($myfile,$t);
$t=$l1->allowOverlap();
echo $t;
fwrite($myfile,$t);
$t=$l1->setVelocity();
echo $t;
fwrite($myfile,$t);
if(isset($_POST["left"]))
{
	$a=$_POST["sLeft"];
}
else
{
	$a=0;
}
if(isset($_POST["right"]))
{
	$b=$_POST["sRight"];
}
else
{
	$b=0;
}
if(isset($_POST["up"]))
{
	$c=$_POST["sUp"];
}
else
{
	$c=0;
}
$t=$l1->setCursors($a,$b,$c);
echo $t;
fwrite($myfile,$t);

$t=$l1->endFunction();
echo $t;
fwrite($myfile,$t);
$t=$l1->killS($_POST["sInc"]);
echo $t;
fwrite($myfile,$t);

 

fclose($myfile);
$newURL = "index2.php";
header('Location: '.$newURL);

?>
