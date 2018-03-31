<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<?php
 header('Content-type: text/html; charset=utf-8');
?>
    <!-- Begin emoji-picker Stylesheets -->
    <link href="../lib/css/emoji.css" rel="stylesheet">
    <!-- End emoji-picker Stylesheets -->
	<title></title>

<style type="text/css">
    .flex-container
{
    background-color: lightgrey;
    border-radius: 16px;
    width: 500px;
    margin-left: 62%;
}
    .flex-container_1
{
    background-color: lightgrey;
    border-radius: 16px;
    width: 500px;
}
</style>
</head>
  <body class="text-center">
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
$result = mysqli_query($conn,"SELECT * FROM myemoji ORDER BY id desc");

if (mysqli_num_rows($result) > 0)
 {
    while($row = mysqli_fetch_assoc($result)) 
    {
        if($_SESSION['name'] == $row["name"])
        {
            $sub = substr($row["date"], 11,-3);
        echo "<div class='flex-container'>
        <span style='margin-left:92%; font-size:16px;' > ".$row["name"]."</span><br>
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
<!--         	              <textarea class="form-control textarea-control" rows="3" placeholder="Textarea with emoji Unicode input" data-emojiable="true" data-emoji-input="unicode" name="msg"></textarea>
-->

<form method="POST" action="send.php">
                <div style="margin-left: -10%;position: fixed;z-index: 3000">
                <p class="lead emoji-picker-container">
              <input type="textarea" class="form-control textarea-control" style="margin-left: 2%; height:60px;" placeholder="Input field" data-emojiable="true" name="msg" >
            </p>
            </div>
	<input type="submit" value="Send" class="button">
</form>
</div>
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