
<html>
<head>
	<title></title>
<style type="text/css">
	.ii
	{
	}
</style>
</head>
<body><br>
<?php
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

$result = mysqli_query($conn,"SELECT * FROM sign WHERE name='kk' ");
while($row = mysqli_fetch_array($result))
  {
  echo $row['Id'] . " " . $row['name']. $row['email']. $row['password'];
 $p =$row['image']; 
  echo "<br />";
  	if($row['image'] != null)
  	{
//echo '<img src="'. $p .'"class='ii'>kk</div>';
echo '<img src="'.$p.'" alt="HTML5 Icon" style="width:128px;height:128px">';
  	}
  	else
  	{
  		echo "<div class='ii'>string</div>";
  	}

  }
?>
</body>
</html>
