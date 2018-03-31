<html>
<head>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Begin emoji-picker Stylesheets -->
    <link href="emoji.css" rel="stylesheet">
    <!-- End emoji-picker Stylesheets -->

	<title>ChatRoom</title>

<style type="text/css">
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
body
{
    width: 100%;
min-width: 990px;
margin-left: -8px;
}
    .flex-container
{
    background-color: lightgrey;
    border-radius: 16px;
    width: 500px;
    margin-left: 60%;
}
    .flex-container_1
{
    background-color: lightgrey;
    border-radius: 16px;
    width: 500px;
    margin-left: 1%;
}
input[type=submit]
{
    background-color: red;
    border:2px red;
    width: 80px;
    height: 40px;
    color: white;
    border-radius: 10px;
}
input[type=submit]:hover
{
    background-color: green;
    border:2px green;
    border-radius: 20px;   
}
input[type=text]:hover
{
background-color: black;
color: white;
border-radius: 10px;
}
</style>
</head>
<body>
 <?php include 'head_test.php';?>	

	<div id="main">
		<h1><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Green_dot.svg/2000px-Green_dot.svg.png" style="width: 20px;height: 21px;">
         <?php @session_start(); echo "<font color='white'>" .$_SESSION['name'] ."</font>" ?></h1>

<?php

//@session_start();
//	  <meta http-equiv="refresh" content="10">

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dtest";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else  
{
$result = mysqli_query($conn,"SELECT * FROM chat ORDER BY id desc");

if (mysqli_num_rows($result) > 0)
 {
    while($row = mysqli_fetch_assoc($result)) 
    {
        if($_SESSION['name'] == $row["name"])
        {
            $sub = substr($row["date"], 11,-3);
        echo "<div class='flex-container'>
        <span style='margin-left:1%; font-size:16px;' > ".$row["name"]."</span><br>
        <span style='margin-left:2%;'>" .$row["msg"]."</span><br>  
        <span style='margin-left:92%;font-size:12px;'>".$sub."</span><br>
        </div><br>"; 
        }
        else
        {
         $sub = substr($row["date"], 11,-3);
        echo "<div class='flex-container_1'>
        <span style='font-size:16px; margin-left:2%;' > ".$row["name"]."</span><br>
        <span style='margin-left:2%;font-size:16px;'>" .$row["msg"]."</span><br>  
        <span style='font-size:12px; margin-left:90%;'>".$sub."</span><br>
        </div><br>"; 
        }
//    	echo "<div class='nn'>".$row["name"]."</div>" . "<div class='msg'>".$row["msg"]."</div>"  ."<div class='date'>".$row["date"]."</div>"."<br>";
//    	echo "<div class='msg'>".$row["msg"]."</div>";
 }
}
 else {
    echo "0 results";
 }
  }
  ?>
         	

<form method="POST" action="send.php">
              <input type="text" placeholder="Your message" name="msg" style="width: 88%;height: 50px;margin-left:20px; opacity: 0.5;position: fixed;top: 540;">
	<input type="submit" value="Send" class="button" style=" position: fixed;top: 540;margin-left: 90%;">
</form>
</div>
 </div>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>


</body>
</html>