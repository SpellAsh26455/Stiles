<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="js/phaser.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<?php
 	session_start();
error_reporting(E_ALL & ~E_NOTICE); //imp

 	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dtest";
$getimg = $_GET['p'];
$l=$_POST['Like'];
$d=$_POST['Dislike'];
//echo "<br>";
 $name = $_SESSION['name'];

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($conn,"SELECT * FROM game WHERE img='$getimg' ");
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
 $path = $row['paths'];
 $id = $row['id'];
 $actualname = $row['actualName'];
$dummyname = $row['dummyName'];
$path = $row['paths'];
$nana = $row['userName'];
}
}

$result = mysqli_query($conn,"SELECT * FROM countss WHERE(dummyName='$dummyname' AND  likes='$name') ");
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
 $dn = $row['dummyName'];
 $an = $row['actualName']; 
//echo "<br>";
  $lii = $row['likes'];
    
  //  $_SESSION['uselike'] =$lii;
//    $uselike = $_SESSION['uselike'];
// $disl = $row['dislikes'];
}
}

$result = mysqli_query($conn,"SELECT * FROM countss WHERE(dummyName='$dummyname' AND  dislikes='$name') ");
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
 //$dn = $row['dummyName'];
 //$an = $row['actualName']; 
//echo "<br>";
//  $lii = $row['likes'];
 $disl = $row['dislikes'];
}
}

/*if($name= $lii)
{
    echo "a";
}
else
{
  echo "s";
}
*/
///////////
$result = mysqli_query($conn,"SELECT * FROM game WHERE id='$id' ");
    if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) {
          $likes = $row['likes'];
          $dislikes = $row['dislikes'];
          $actualName = $row['actualName'];

    }
    }else{
    // "Connection failed: " . mysqli_connect_error();
}
if(isset($l))
{
    $sql = "UPDATE game
       SET likes='$likes'+1 WHERE id='$id' ";
    if (mysqli_query($conn, $sql)) 
    { 
            if($name !=$lii)
            {
                $sql = "INSERT INTO countss (dummyName,actualName,paths,userName,imgs, likes)
                VALUES ('$dummyname','$actualname','$path','$nana','$getimg','$name')";
                if (mysqli_query($conn, $sql)) {
                    header('Location: playgame.php?p='.$getimg);
                } 
                else
                {
                    echo "Error updating record: " . mysqli_error($conn);
                }
            }
            else
            {
                echo "shot";
            }

    } else {
    echo "Error updating record: " . mysqli_error($conn);
    }
}
if(isset($d))
{
    $sql = "UPDATE game
       SET dislikes='$dislikes'+1 WHERE id='$id' ";
    if (mysqli_query($conn, $sql)) 
    {
            if($name !=$disl)
            {
                $sql = "INSERT INTO countss (dummyName,actualName,paths,userName,imgs, dislikes)
                VALUES ('$dummyname','$actualname',$path,'$nana','getimg','$name')";
                if (mysqli_query($conn, $sql)) {
                    header('Location: playgame.php?p='.$getimg);
                } 
                else
                {
                    echo "Error updating record: " . mysqli_error($conn);
                }
            }
            else
            {
                echo "shot";
            }

    } else {
    echo "Error updating record: " . mysqli_error($conn);
    }
}

if(isset($l))
{
  //  $likes =$likes+1; 
    echo "<div class='auto_like'>Likes = ".$likes."</div>";
    echo "<br>";
    echo "<div class='auto_dislike'>Dislikes = ".$dislikes."</div>";
} 
else if(isset($d))
{
   // $dislikes =$dislikes+1; 
    echo "<div class='auto_like'>Likes = ".$likes."</div>";
    echo "<br>";
    echo "<div class='auto_dislike'>Dislikes = ".$dislikes."</div>";
}
else
{
    echo "<div class='auto_like'>Likes = ".$likes."</div>";
    echo "<br>";
    echo "<div class='auto_dislike'>Dislikes = ".$dislikes."</div>";
}
//echo $name;
?>

 	<script type="text/javascript" src="<?php echo $path; ?>"></script>


<style type="text/css">
body
{
	margin-top: -1%;
    background-image: linear-gradient(to right, #d7d2cc 0%, #304352 100%);
    font-family: Comic Sans MS;
}
	#snakes
	{
		margin-top: 2%;
	}
	button {
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
}
.bb1
{
margin-left: 37%;
position: fixed;
top:90%;
}
 .bb2
 {
margin-left: 52%;
position: fixed;
top:90%;
}
.auto_like
{
	font-size: 20px;
	color: white;
    top:93%;
	margin-left: 42%; 
	position: fixed;
}
.auto_dislike
{
	font-size: 20px;
	color: white;
    top:93%;
	margin-left: 56.5%; 
	position: fixed;
}
</style>
</head>
<body bgcolor="#333333">
	<?php
 	 include 'head_test.php';
	?>
<center><div id="snakes"></div></center> 

  <form method="POST" id="Likeform">
        <button type="submit" name="Like" value="Like" style="width: 50px;height: 50px;" class="bb1"
        <?php 
        if($name == $lii || $name == $disl)
        {?>
            disabled
        <?php
        }
        ?>>
        <img src="like.png" width="50" height="50" >
        </button>
        <input type="hidden" name="Likehide" value="Like">
    </form>
    <form method="POST" action="" id="Dislikeform">
        <button type="submit" name="Dislike" value="Dislike"  style="width: 50px;height: 50px;" class="bb2"
        <?php 
        if($name == $disl || $name == $lii)
        {?>
            disabled
        <?php
        }
        ?>>

        <img src="dislike.png" width="50" height="50">
        </button>
        <input type="hidden" name="Dislikehide" value="Dislike">
    </form>


</body>
</html>