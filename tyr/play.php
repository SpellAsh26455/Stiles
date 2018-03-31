<!DOCTYPE html>
<html>
<head>
	<title>Play!</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<script type="text/javascript">
$(document).ready(function(){
  $("#right_3").css("opacity", "0");
  $("#left_3").css("opacity", "0");

$(window).scroll(function() {
    var topPos = $(this).scrollTop();
if(topPos<37)
{
  $("#right").css("opacity", "1");
  $("#left").css("opacity", "1");
}
if(topPos > 37)
{
  $("#right").css("opacity", "0");
  $("#left").css("opacity", "0");
}
if(topPos <38  || topPos>90)
{
  $("#right_2").css("opacity", "0");
  $("#left_2").css("opacity", "0");
}
else
{
  $("#right_2").css("opacity", "1");
  $("#left_2").css("opacity", "1");
}

if(topPos <350)
{
  $("#right_3").css("opacity", "0");
  $("#left_3").css("opacity", "0");
}
else
{
  $("#right_3").css("opacity", "1");
  $("#left_3").css("opacity", "1");
}
});
    });

//////
var counter = 0;
    
        $(document).ready(function() {
            $("#right").click(function(){
   //   var a= counter;
   counter+=750;
                    $("#container").animate({scrollLeft: counter}, 800);
            });
        });

        $(document).ready(function() {
            $("#left").click(function(){
//      var aa= counter--;
   counter-=750;
                    $("#container").animate({scrollLeft: counter--}, 800);
            });
        });


    
        $(document).ready(function() {
            $("#right_2").click(function(){
   //   var a= counter;
   counter+=750;
                    $("#container_2").animate({scrollLeft: counter}, 800);
            });
        });

        $(document).ready(function() {
            $("#left_2").click(function(){
//      var aa= counter--;
   counter-=750;
                    $("#container_2").animate({scrollLeft: counter--}, 800);
            });
        });


        $(document).ready(function() {
            $("#right_3").click(function(){
   //   var a= counter;
   counter+=750;
                    $("#container_3").animate({scrollLeft: counter}, 800);
            });
        });

        $(document).ready(function() {
            $("#left_3").click(function(){
//      var aa= counter--;
   counter-=750;
                    $("#container_3").animate({scrollLeft: counter--}, 800);
            });
        });

</script>

	<style type="text/css">
 body
 {
  overflow-x:hidden;
 }
::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #333333; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: gray; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: aqua; 
}
	h1
{
  color: white;
	position: absolute;
	top:10%;
  left:42%;
  font-family: "Comic Sans MS", cursive, sans-serif;
}
	#container {
  position: absolute;
  height: 250px;
  width: 100.2%;
  top: 23%;
  text-align: left;
  white-space: nowrap;
  overflow-x: auto;
  overflow-y: hidden;
  vertical-align:middle;
  overflow: hidden;
}

#container div {
  display: inline-block;
  width: 250px;
  height: 230px;
  margin: 0.5;
  padding: 4px;
  white-space: normal;
  text-align: center;
}
#container img:hover {
    box-shadow: 0 8px 10px 0 rgba(208,208,208,2);
    border:5px solid rgb(208,208,208);
}
#container img
{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,2);
    border:4px solid black;
  margin-top: 11px;
	width: 240px;
	height: 190px;
}

.pop
{
	position: absolute;
	top: 60%;
}

  #container_2 {
  position: absolute;
  height: 250px;
  width: 100.2%;
  top: 75%;
  text-align: left;
  white-space: nowrap;
  overflow-x: auto;
  overflow-y: hidden;
  vertical-align:middle;
  overflow: hidden;
}

#container_2 div {
  display: inline-block;
  width: 250px;
  height: 230px;
  margin: 0.5;
  padding: 3px;
  white-space: normal;
  text-align: center;
}
#container_2 img:hover {
    box-shadow: 0 8px 10px 0 rgba(208,208,208,2);
    border:5px solid rgb(208,208,208);
}
#container_2 img
{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,2);
    border:4px solid black;
  margin-top: 11px;
  width: 240px;
  height: 190px;
}

.rec
{
	position: absolute;
	top: 112%;
}

  #container_3 {
  position: absolute;
  height: 250px;
  width: 100.2%;
  top: 124%;
  text-align: left;
  white-space: nowrap;
  overflow-x: auto;
  overflow-y: hidden;
  vertical-align:middle;
  overflow: hidden;
}

#container_3 div {
  display: inline-block;
  width: 250px;
  height: 230px;
  margin: 0.5;
  padding: 3px;
  white-space: normal;
  text-align: center;
}
#container_3 img:hover {
    box-shadow: 0 8px 10px 0 rgba(208,208,208,2);
    border:5px solid rgb(208,208,208);
}
#container_3 img
{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,2);
    border:4px solid black;
  margin-top: 11px;
  width: 240px;
  height: 190px;
}

.actualname
{
  background-color: rgba(0,0,0,.5);
  color: white;
  margin-left: -18%;
  width: 17.5%;
  margin-top:12.5%;
  position: absolute;
}



#right{
  cursor: pointer;
  position: fixed;
  top: 44%;
  background-color: #A8A8A8;
  border:2px #A8A8A8;
  opacity: 0.8;
  left: 97%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  border-radius: 3px;
  user-select: none;
  -webkit-user-select: none;
}

#left{
  cursor: pointer;
  position: fixed;
  top: 44%;
  background-color: #A8A8A8;
  border:2px #A8A8A8;
  left: -0.2%;
   opacity: 0.8;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  border-radius: 3px;
  user-select: none;
  -webkit-user-select: none;
}
#right_2:hover
{
background-color: #696969;
border:2px #696969;
  border-radius: 15px;
}
#left_2:hover
{
background-color: #696969;
border:2px #696969;
  border-radius: 15px;
}



#right_2{
  cursor: pointer;
  position: fixed;
  top: 95%;
  background-color: #A8A8A8;
  border:2px #A8A8A8;
  opacity: 0.8;
  left: 97%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  border-radius: 3px;
  user-select: none;
  -webkit-user-select: none;
}

#left_2{
  cursor: pointer;
  position: fixed;
  top: 95%;
  background-color: #A8A8A8;
  border:2px #A8A8A8;
  left: -0.2%;
   opacity: 0.8;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  border-radius: 3px;
  user-select: none;
  -webkit-user-select: none;
}
#right:hover
{
background-color: #696969;
border:2px #696969;
  border-radius: 15px;
}
#left:hover
{
background-color: #696969;
border:2px #696969;
  border-radius: 15px;
}



#right_3{
  cursor: pointer;
  position: fixed;
  top: 80%;
  background-color: #A8A8A8;
  border:2px #A8A8A8;
  opacity: 0.8;
  left: 97%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  border-radius: 3px;
  user-select: none;
  -webkit-user-select: none;
}

#left_3{
  cursor: pointer;
  position: fixed;
  top: 80%;
  background-color: #A8A8A8;
  border:2px #A8A8A8;
  left: -0.2%;
   opacity: 0.8;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  border-radius: 3px;
  user-select: none;
  -webkit-user-select: none;
}
#right_3:hover
{
background-color: #696969;
border:2px #696969;
  border-radius: 15px;
}
#left_3:hover
{
background-color: #696969;
border:2px #696969;
  border-radius: 15px;
}
#haha
{
  margin-top: 15px;
}
	</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
  <script type="text/javascript">

      $(document).ready(function(){
    $(".imgg").click(function(){
        var p =($(this).attr('src'));
        var q ="p="+p;
        //alert(q);
        window.location.replace("http://localhost/can/tyr/playgame.php?"+q);
    });
}); 

  </script>

</head>
<body>
<?php include 'head_test.php';?>
<div id="haha">

<h1>GAMES CREATED</h1>

<div id="container">
 <?php 
 @session_start();
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
$result = mysqli_query($conn,"SELECT * FROM game ");
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

}
}

?>
    <button id="left">❮</button>
    <button id="right">❯ </button>


 <div><img src="img.jpg" alt="httyd"></div>
 <div><img src="img.jpg" alt="httyd" style="width:170;height:230"></div>
 <div><img src="img.jpg" alt="httyd" style="width:170;height:230"></div>
 <div><img src="img.jpg" alt="httyd" style="width:170;height:230"></div>
 <div><img src="img.jpg" alt="httyd" style="width:170;height:230"></div>
 <div><img src="img.jpg" alt="httyd" style="width:170;height:230"></div>
 <div><img src="img.jpg" alt="httyd" style="width:170;height:230"></div>
 <div><img src="img.jpg" alt="httyd" style="width:170;height:230"></div>
 <div><img src="img.jpg" alt="httyd" style="width:170;height:230"></div>
</div>

<h1 class="pop"> POPULAR GAMES</h1>
<div id="container_2">
<?php
$result = mysqli_query($conn,"SELECT * FROM game ORDER BY likes DESC");
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
   $img = $row['img']; 
   $actualName = $row['actualName'];
   $act =substr($actualName, 0 , (strrpos($actualName, ".")));
   $userName = $row['userName'];
    $likes=$row['likes']."<br>";
//      echo '<a href="http://localhost/can/tyr/index2.php"> <div><img src="'.$img.'" style="width:170 ; height:230;" ></div> </a>';
     echo '<div> <img src="'.$img.'"style="width:170 ; height:230;" class="imgg">'
            .'<span class="actualname">Name Of Game :'.$act.'<br>Name Of Creater :'.$userName.'</span></div>'
            ;

}
}
?>
    <button id="left_2">❮</button>
    <button id="right_2">❯ </button>

 <div><img src="img.jpg" alt="httyd" style="width:170;height:230"></div>
 <div><img src="img.jpg" alt="httyd" style="width:170;height:230"></div>
 <div><img src="img.jpg" alt="httyd" style="width:170;height:230"></div>
 <div><img src="img.jpg" alt="httyd" style="width:170;height:230"></div>
 <div><img src="img.jpg" alt="httyd" style="width:170;height:230"></div>
 <div><img src="img.jpg" alt="httyd" style="width:170;height:230"></div>
 <div><img src="img.jpg" alt="httyd" style="width:170;height:230"></div>
 <div><img src="img.jpg" alt="httyd" style="width:170;height:230"></div>
 <div><img src="img.jpg" alt="httyd" style="width:170;height:230"></div>
</div>

<h1 class="rec"> FAVOURITE GAMES</h1>
<div id="container_3">

<?php
$result = mysqli_query($conn,"SELECT * FROM countss");
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
  $likes = $row['likes'];
  if($likes == $_SESSION['name'])
  {
/*    $an= $row['dummyName'];
    $result = mysqli_query($conn,"SELECT * FROM game WHERE dummyName='$an' ");
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {*/
   $img = $row['imgs']; 
   $actualName = $row['actualName'];
   $act =substr($actualName, 0 , (strrpos($actualName, ".")));
   $userName = $row['userName'];
//      echo '<a href="http://localhost/can/tyr/index2.php"> <div><img src="'.$img.'" style="width:170 ; height:230;" ></div> </a>';
     echo '<div> <img src="'.$img.'"style="width:170 ; height:230;" class="imgg">'
            .'<span class="actualname">Name Of Game :'.$act.'<br>Name Of Creater :'.$userName.'</span></div>'
            ;

  }    
  else
  {
//echo "No Games";
  }
}
}
?>
    <button id="left_3">❮</button>
    <button id="right_3">❯ </button>


 <?php 
 @session_start();

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
$result = mysqli_query($conn,"SELECT * FROM game ");
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
   $img = $row['img'];
   $dummyname = $row['dummyName'];
   $username = $row['userName'];
//   echo '<span id="hii">'.$dummyname.'</span>';
}
}
?>
</div>

</body>
</html>