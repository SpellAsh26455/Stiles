
<!DOCTYPE html>
<html>
<head>
    <title></title>
<style type="text/css">
    .box
    { 
        position: absolute;
        opacity:9;
       width: 560px;
       height: 410px;
       top:43%;
       left: 45%;
       margin-top: -190px;
       margin-left: -230px;
        border-radius: 13px;
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            opacity:9.0;

    }
        .img_i
    {
      position: absolute;
      height: 150px;
      width: 160px;
      left: 4%;
      top: 15%;
      border-radius: 100px;
    }
    .box h2
    {
        position: absolute;
        left: 40%;
        top: -2%;
    }
    .box span
    {
    position: absolute;
    display: inline-block;
    color: #black;
    margin-left: 45%;
    padding-top: 15%;
    font-size: 31px;
    }
    hr
    {
        width: 56%;
        height: 1%;
        background-color: black;
        border-color: black;
        position: absolute;
        top: 48%;
        left: 42%;
    }
    .box svg
    {
        position: absolute;
        left: 16%;
        top: 55%;
    }
    .box h6
    {
        position: absolute;
        font-size: 40px;
        left: 26%;
        top: 44%;
    }
    .box h5
    {
        position: absolute;
        font-size: 25px;
        top: 80%;
        left: 13%;
        color: grey;
    }
    .box h3
    {
        position: absolute;
        font-size: 28px;
        left: 62%;
                color: grey;

    }
    .box h4
    {
        position: absolute;
        font-size: 22px;
        left: 81%;
        top: 85%;
                color: grey;

    }
 
    </style>
</head>
<body>

<?php include 'head.php';?>

<img src="http://www.3d-wallpapers.info/wp-content/uploads/Stunning-3d-lamborghini-Car-Wallpaper.jpg?189db0&189db0" height="558" width="1366" 
style="margin-left: -8px;">

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
        //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["password"]. "<br>";
            $qi=$row['image'];
 echo  ' <div class="box"> <span>'. $row['name'] . '<br><br>'. $row['email'] .'</span> </div>';

    if($row['image'] !== null)
    {
echo ' <div class="box"> <img src="'.$qi.'"class="img_i" "> </div>';
    }
    if($row['image'] == null)
    {
echo " <div class='box'> <img src='d.jpg' class='img_i'> </div>";
    }

    }
} else {
    echo "0 results";
 }
}  
echo "<div class='box'>
    <h2 >User Profile</h2>
    
    
  <a href='http://localhost/text/editPro.php'><img src='edit.png' alt='User Image' width='50' height='50' style='margin-top: 26%; margin-left: 88%;'></a>
    <hr>

    <svg height='200' width='200'>
  <circle cx='70' cy='70' r='65' stroke='black' stroke-width='3'  fill='white' style='position: absolute;' />
  <h6>1</h6>
</svg> 
  <h5>Games Created</h5>

  <h3>Coins</h3>
  <img src='coins.png' alt='User Image' width='150' height='120' class='coin' style='top: 65%;left: 61%; position: absolute;' > 
  <h4>500</h4>

</div>";
?>
<?php include 'footer.php';?>

</body>
</html>