<?php
 @session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dtest";
$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
$result = mysqli_query($conn,"SELECT * FROM countss");
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
  $likes = $row['likes'];
  if($likes == "sehaj")
  {
    $an= $row['dummyName'];
    $result = mysqli_query($conn,"SELECT * FROM game WHERE dummyName='$an' ");
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
   $img = $row['img']; 
   $actualName = $row['actualName'];
   $act =substr($actualName, 0 , (strrpos($actualName, ".")));
   $userName = $row['userName'];
//      echo '<a href="http://localhost/can/tyr/index2.php"> <div><img src="'.$img.'" style="width:170 ; height:230;" ></div> </a>';
     echo '<div> <img src="'.$img.'"style="width:170 ; height:230;" class="imgg">'
            .'<span class="actualname">Name Of Game :'.$act.'<br>Name Of Creater :'.$userName.'</span></div>'
            ;
}}

  }    
  else
  {
//    echo "s";
  }
}
}
?>
