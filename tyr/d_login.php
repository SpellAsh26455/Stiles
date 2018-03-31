<?php
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="login.css">	
<link rel="stylesheet" type="text/css" href="sign.css">	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
	<script type="text/javascript">

		$(document).ready(function() {
   $('.login').hide();
});
		$(document).ready(function() {
   $('.sign').hide();
});

	$(document).ready(function(){
    $("#login").click(function(){
        $(".login").show();
    });
}); 
	$(document).ready(function(){
    $("#login").click(function(){
        $(".sign").hide();
    });
}); 
	$(document).ready(function(){
    $("#sign").click(function(){
        $(".sign").show();
    });
}); 
	$(document).ready(function(){
    $("#sign").click(function(){
        $(".login").hide();
    });
}); 

	</script>

<style type="text/css">
  .sign input[type=email]
{
    color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 18px;
    width: 300px;
    height: 38px;
     border: 1px solid #c7d0d2;
    border-radius: 2px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;

}
</style>
</head>
<body>

 <button id="login"> <span>Login</span></button>
 <button id="sign"><span>Sign up</span></button>

<div class="as">
<div aria-busy="true" aria-label="Loading" role="progressbar" class="container">

  <div class="swing">
    <div class="swing-l"></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div class="swing-r"></div>
  </div>
  <div class="shadow">
    <div class="shadow-l"></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div class="shadow-r"></div>
  </div>
 </div>
</div>

<span class="login">
	<h2>Login</h2>
<form action="process.php" method="post">
   <label>Usernamme : </label>	<input type="text" name="username" placeholder="username" required>
	<br>
   <label>Password : &nbsp&nbsp&nbsp</label>	<input type="password" name="pass" placeholder="password" required>
	<br>
	<input type="submit" name="submit_l" value="submit">
</form>
</span>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$name = $_POST['username'];
$pass = $_POST['pass'];

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysql_query("SELECT name, password FROM sign WHERE name = $name");

$row = mysql_fetch_array($result);

if($row["name"]==$name && $row["password"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>

<span class="sign">
	<h2>Sign Up</h2>
<form method="POST">
   <label>Usernamme : </label>	<input type="text" name="username" placeholder="username" required>
	<br>
   <label>Email : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>	<input type="email" id="e" name="email" placeholder="Email" required>
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
$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "INSERT INTO sign (name,email,password)
VALUES ('$name', '$email', '$pass')";

if (mysqli_query($conn, $sql)) {
 if ($_POST["submit"]) {
 include'start.html' ;
 }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

</body>
</html>