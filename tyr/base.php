<html>
<head>
	<title></title>
</head>
<body>
<span class="sign">
	<h2>Sign Up</h2>
<form  action="process_b.php" method="post">
   <label>Usernamme : </label>	<input type="text" name="username" placeholder="username" required>
	<br>
   <label>Password : &nbsp&nbsp&nbsp</label>	<input type="password" name="pass" placeholder="Password" required>
	<br>
	<input type="submit" name="submit" value="submit">
</form>
</span>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start(); 
?>
</body>
</html>
