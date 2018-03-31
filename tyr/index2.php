<!DOCTYPE html>
<html>
<head>
	<title>We here
	</title>
	<script type="text/javascript" src="js/phaser.min.js"></script>
	<?php
	session_start();
	error_reporting(E_ALL & ~E_NOTICE); //imp

	$goo =  $_SESSION['nameofgame'];
	?>
 	<script type="text/javascript" src="<?php echo $goo; ?>"></script>

<style type="text/css">
	#snakes
	{
		margin-top: 2%;
	}
	#img
	{
		display: none;
	}
	.img_class
	{
		margin-top: 1%;
		margin-left: -10%;
		position: absolute;
		width: auto;
		height: auto;
		padding: 10px 15px;
		background:red;
		color: white;
		border-radius: 8px;
	}
	.img_class:hover
	{
		background:green;
	}
	.img_bt
	{
     	margin-top: 1%;
		margin-left: 7%;
		border:2px solid red;
		position: absolute;
		width: auto;
		height: auto;
		padding: 10px 15px;
		background:red;
		color: white;
		border-radius: 8px;
}
	.img_bt:hover
	{
		background:green;
    	border:2px solid green;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<script type="text/javascript">
		$(document).ready(function() {
   $('.error').hide();
});
		for(var i = 0; i <= 100; i++)
		{
		$(document).ready(function() {
   $('.pre').fadeOut(500);
});
		$(document).ready(function() {
   $('.pre').fadeIn(500);
});
		}
	function validateForm()
	{
		var a = document.getElementById('img').value;
		if(a == "")
		{
			//alert("Please select the image");
		$(document).ready(function() {
   $('.error').fadeIn(500);
});
    	$(document).ready(function() {
   $('.error').fadeOut(2000);
});

		}
	}//required
</script>
</head>
<body bgcolor="#333333">
	<?php
 	 include 'head_test.php';
	?>
<center><div id="snakes"></div></center> 
<form method="POST" action="upload.php">
<center><label for="img" class="img_class" >Face Of The Game</label>
	<input type="file" name="name" accept=".jpg,.png" id="img" required>
	<input type="submit" name="file_submit" class="img_bt" onclick="validateForm();"> </center>	
</form>
<h3 class="error" style="color: grey;">Please Choose The Face Of The Game</h3>
<h3 class="pre" style="color: black;font-size: 20px; position: absolute;margin-left:72%;">Preview Game Choose the face of the game</h3>
<?php
@session_start();
  $_SESSION['name_of_game'];
?>
</body>
</html>