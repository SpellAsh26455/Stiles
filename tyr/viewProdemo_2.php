<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body
{           font-family: "Comic Sans MS", cursive, sans-serif;
}
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 25%;
    height: 62%;
    position: absolute;
    border-radius: 15px;
    margin-left: 37%;
    margin-top: 5%;
}
.coo
{
background-image: url('https://www.kingdomroyalehair-n-body.com/wp-content/uploads/2016/02/lav_bg.jpg');
    height: 70%;
    width: 100%;
    position: absolute;
}
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}
.container {
    padding: 2px 16px;
    margin-top: 75%;
    background-color: white;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    height: 10%;
    width:34%;
    border-radius: 15px;
    margin-left: 29%;
}
::-webkit-scrollbar { 
    display: none; 
}
</style>
</head>
<body style="background-image: linear-gradient(to right, #d7d2cc 0%, #304352 100%);">

    <?php include 'head_test.php';?>

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
else  {
    $p= $_SESSION['aa'];
//echo $p;

//$sql = mysqli_query($conn,"SELECT id,name,password FROM sign WHERE name='$p' ");
$result = mysqli_query($conn,"SELECT * FROM sign WHERE id='$p' ");

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $img=$row['image'];
        $name=$row['name'];
        $email= $row['email'];

        if($row['image'] == null)
        {

        }

    }
  }
}
?>

<div class="card" style="border-radius: 15px;">
  
  <div class="coo">
<a href='editPro.php'>
    <img src="http://www.clker.com/cliparts/S/B/w/9/w/8/edit-button-blue-hi.png" width="80" height="40" style="position: absolute; margin-left:74%;margin-top: 5px; ">
</a>
<img src="<?php 
if($img == null)
{
  echo 'd.jpg';
}
echo $img ?>" alt="Avatar" style="width:50%;height: 50%;position: absolute; margin-top:19%;margin-left:25%; border-radius: 20px;     box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);">  

  <div class="container">
   <center><h4 style="margin-top: 1%;"><?php echo $name ?></h4></center> 
          </div>

 <center>
    <span style="font-size: 18px; margin-top: 5%;position: absolute;margin-left: -6%;">
        <b>
            <?php echo $email ?>
        </b>
    </span>
 </center> 
    <center>
        <h4 style="font-size: 18px; margin-top: 15%;position: absolute;margin-left: 30%;">Games Created
        </h4> 
    </center>    
  </div>
</div>
</body>
</html> 
