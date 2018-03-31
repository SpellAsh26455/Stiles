<html>
<head>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Begin emoji-picker Stylesheets -->
    <link href="emoji.css" rel="stylesheet">
    <!-- End emoji-picker Stylesheets -->

	<title></title>

<style type="text/css">

/*	#main
	{
		background-color: #98AFC7;
      	margin-left: -4px;
      	width: 97%;
      	height: 85%;
		padding: 17px;
		position: absolute;
	}
		.nn
		{
			color: green;
			font-size: 14px;
            width: 100px;
        	font-size: 20px;

		}
		.msg
		{
			color: black;
        	font-size: 16px;
		    width: 410px;

        }
        .date
        {
			color: #999900;
        	width: 100px;
        	margin-left:  81%;
        	margin-top: -12px;


        }
	h1
	{
		margin-top: -7px;
	}
	.button
	{
			background-color: red;  Green 
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    height: 40px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari 
    transition-duration: 0.4s;
    cursor: pointer;
    position: absolute;
    margin-left: 1%;
    border-radius: 10px;

	}
	.button:hover
	{
		background-color: green;
	}
  */
</style>
</head>
<body>
	<?php include 'head_test.php';?>

	<div id="main">
		<h1><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Green_dot.svg/2000px-Green_dot.svg.png" style="width: 20px;height: 21px;"> <?php @session_start(); echo "<font color='white'>" .$_SESSION['name'] ."</font>" ?></h1>

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
    	echo "<div class='nn'>".$row["name"]."</div>" . "<div class='msg'>".$row["msg"]."</div>"  ."<div class='date'>".$row["date"]."</div>"."<br>";
//    	echo "<div class='msg'>".$row["msg"]."</div>";
 }
}
 else {
    echo "0 results";
 }
  }
  ?>
         	

<form method="POST" action="send.php">
          <div class="text-left">
            <p class="lead emoji-picker-container">
              <textarea class="form-control textarea-control" rows="3" placeholder="Textarea with emoji Unicode input" data-emojiable="true" data-emoji-input="unicode" name="msg"></textarea>
            </p>
	<input type="submit" value="Send" class="button">
</form>
</div>
 </div>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Begin emoji-picker JavaScript -->
    <script src="../lib/js/config.js"></script>
    <script src="../lib/js/util.js"></script>
    <script src="../lib/js/jquery.emojiarea.js"></script>
    <script src="../lib/js/emoji-picker.js"></script>
    <!-- End emoji-picker JavaScript -->

    <script>
      $(function() {
        // Initializes and creates emoji set from sprite sheet
        window.emojiPicker = new EmojiPicker({
          emojiable_selector: '[data-emojiable=true]',
          assetsPath: '../lib/img/',
          popupButtonClasses: 'fa fa-smile-o'
        });
        // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
        // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
        // It can be called as many times as necessary; previously converted input fields will not be converted again
        window.emojiPicker.discover();
      });
    </script>
    <script>
      // Google Analytics
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-49610253-3', 'auto');
      ga('send', 'pageview');
    </script>


</body>
</html>