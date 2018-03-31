<?php

require 'lib4.php';
$l1= new lib4();
/*


*/
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

//
$dir = "C:/xampp/htdocs/can/tyr";
$user = "user";
$path_temp ="";
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
//     echo "filename:" . $file . "<br>";
    	if($file == "UserCustom.js")
    	{
echo    	 $path_temp =$path;
    	}
    }
    closedir($dh);
  }
}
else
{
	echo "Not found";
}

/*



*/
$f=$_GET["f"];
if($f==0)
{
$myfile = fopen("UserCustom.js", "w") or die("Unable to open file!");
}
if($f==1)
{
$myfile = fopen($path_temp, "w") or die("Unable to open file!");
}

$t=$l1->start();
//echo $t;
fwrite($myfile, $t);
if(isset($_GET["bg"]))
{
	$s=$_GET["bg"];
	$t=$l1->loadImg("sky",$s);
	//echo $t;
	fwrite($myfile, $t);
}
if(isset($_GET["p"]))
{
	$s=$_GET["p"];
	if($s=="assets/spacedancerdude.gif"|| $s=="assets/guystatic.png")
	{
		if($s=="assets/spacedancerdude.gif")
		{
			$s="assets/dude.png";
			$t=$l1->loadSprite($s,32,48);
		}
		if($s=="assets/guystatic.png")
		{
			$s="assets/guy1.png";
			$t=$l1->loadSprite($s,33,47);
		}
		
	}
	else
	{
		$t=$l1->loadImg("dude",$s);
	}	
	//echo $t;
	fwrite($myfile, $t);
}
if(isset($_GET["villan"]))
{
	$s=$_GET["villan"];
	$t=$l1->loadImg("villan",$s);
	//echo $t;
	fwrite($myfile, $t);
}
if(isset($_GET["i"]))
{
	$s=$_GET["i"];
	$t=$l1->loadImg("star",$s);
	//echo $t;
	fwrite($myfile, $t);
}
$t=$l1->endFunction();
//echo $t;
fwrite($myfile, $t);
//CREATE

$t=$l1->startCreate();
//echo $t;
fwrite($myfile, $t);
if(isset($_GET["bg"]))
{
	if($_GET["ct"]=="left"||$_GET["ct"]=="up")
	{
		$a=$_POST["canw"];
		$b=$_POST["canh"];
		$t=$l1->tileBg($a,$b);
		//echo $t;
		fwrite($myfile, $t);
	}
	else{
	$t=$l1->setImage(0,0,"sky",1,1);
	//echo $t;
	fwrite($myfile, $t);
	}
}
if(isset($_GET["p"]))
{
	$c="game.world.height - 150";
	$t=$l1->setSprite(32, $c,"dude");
	//echo $t;
	fwrite($myfile, $t);
	$s=$_GET["p"];
	if($s=="assets/spacedancerdude.gif")
	{
		$t=$l1->spriteLR();
		//echo $t;
		fwrite($myfile, $t);
	}
	if(isset($_POST["playerGrav"]))
	{
		$t=$l1->allowGravity("player",$_POST["playerGravSpeed"]);
		//echo $t;
		fwrite($myfile, $t);
	}
	if(isset($_POST["gameBounds"]))
	{
		$t=$l1->worldBounds("player");
		//echo $t;
		fwrite($myfile, $t);
	}
}

$t=$l1->createCursorKeys();
//echo $t;
fwrite($myfile, $t);
$sw=$_POST["sw"];
if($sw=="shoot")
{
	$t=$l1->bulletCreate();
	//echo $t;
	fwrite($myfile, $t);
}
if(isset($_POST["scoreAllow"]))
{
	$t=$l1->createScore();
	//echo $t;
	fwrite($myfile, $t);
	$t=$l1->enableScore();
	//echo $t;
	fwrite($myfile, $t);
}
if(isset($_GET["i"]))
{
	if(isset($_POST["idfs"]))
	{
		if(isset($_POST["starGrav"]))
		{
			$x=$_POST["starGravSpeed"];
		}
		else
		{
			$x=0;
		}
		if(isset($_POST["gameBounds"]))
		{
			$y=true;
		}
		else
		{
			$y=false;
		}
		$t=$l1->createStars($_POST["IncNos"],$_POST["IncDis"],$_POST["iscore"],$x,$y);
		//echo $t;
		fwrite($myfile, $t);
	}
	else
	{
		$t=$l1->setImage(50,50,"star",1,1);
		//echo $t;
		fwrite($myfile, $t);
	}
}
if(isset($_GET["villan"]))
{
	if(isset($_POST["vdfs"]))
	{
		if(isset($_POST["villanGrav"]))
		{
			$x=$_POST["villanGravSpeed"];
		}
		else
		{
			$x=0;
		}
		if(isset($_POST["gameBounds"]))
		{
			$y=true;
		}
		else
		{
			$y=false;
		}
		$t=$l1->createVillans($_POST["vNos"],$_POST["vDis"],$_POST["vscore"],$x,$y);
		//echo $t;
		fwrite($myfile, $t);
	}
	else
	{
		$t=$l1->setImage(50,50,"villan",0.5,0.5);
		//echo $t;
		fwrite($myfile, $t);
	}
}

$t=$l1->endFunction();
//echo $t;
fwrite($myfile, $t);

//UPDATE
$t=$l1->startUpdate();
//echo $t;
fwrite($myfile, $t);
if($_GET["ct"]=="left")
{
	$t=$l1->repeatLeft();
	//echo $t;
	fwrite($myfile, $t);
}
if($_GET["ct"]=="up")
{
	$t=$l1->repeatUp();
	//echo $t;
	fwrite($myfile, $t);
}
if(isset($_POST["left"]))
{
	$a=$_POST["lSpeed"];
}
else
{
	$a=0;
}
if(isset($_POST["right"]))
{
	$b=$_POST["rSpeed"];
}
else
{
	$b=0;
}
if(isset($_POST["up"]))
{
	$e=$_POST["uSpeed"];
}
else
{
	$e=0;
}
$t=$l1->moveLRU($a,$b,$e);
//echo $t;
fwrite($myfile, $t);
if(isset($_POST["Spacebar"]))
{
	$d=$_POST["sSpeed"];
}
else{
	$d=0;
}
$t=$l1->moveJump($d);
//echo $t;
fwrite($myfile, $t);
if($sw=="shoot")
{
	$t=$l1->shoot();
	//echo $t;
	fwrite($myfile, $t);
}
$t=$l1->jumpend();
//echo $t;
fwrite($myfile, $t);
if(isset($_GET["i"]))
{
	$t=$l1->collidePlayerStar();
	//echo $t;
	fwrite($myfile, $t);
}
if(isset($_GET["villan"]))
{
	$t=$l1->collideBulletVillan();
	//echo $t;
	fwrite($myfile, $t);
}

$t=$l1->endFunction();
//echo $t;
fwrite($myfile, $t);

if($sw=="shoot")
{
	$t=$l1->fireBullet();
	//echo $t;
	fwrite($myfile, $t);
	$t=$l1->resetBullet();
	//echo $t;
	fwrite($myfile, $t);
}
if(isset($_GET["i"]))
{
	$t=$l1->collectStar($_POST["Sinc"]);
	//echo $t;
	fwrite($myfile, $t);
}
if(isset($_GET["villan"]))
{
	$t=$l1->killVillan($_POST["Svil"]);
	//echo $t;
	fwrite($myfile, $t);
}

$a=$_POST['canw'];
$b=$_POST['canh'];
$t=$l1->end($a,$b);
//echo $t;
fwrite($myfile, $t);


fclose($myfile);
$newURL = "index2.php";
header('Location: '.$newURL);
?>