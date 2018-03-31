<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
  body
{
  width: 100%;
min-width: 990px;
font-family: "Comic Sans MS";

}
		.main
		{
			background-image: linear-gradient(to right, #434343 0%, black 100%);
			width: 100%;
			height: 70px;
			position: relative;
			margin-top: -8px;
			margin-left: -8px;

		}
		p
		{
			position: absolute;
			color: white;
			font-size: 38px;
			margin-left: 11%;
			margin-top: 7px;
			font-family: "Comic Sans MS", cursive, sans-serif;
		}
		.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    border:none;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

	</style>
</head>
<body style="background-image: linear-gradient(to right, #d7d2cc 0%, #304352 100%);">
<div class="main">
  <p style="margin-left: 45%;color:white"><label>ASTERI</label></p>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="p&d.php"><label>Home</label></a>
  <a href="viewProdemo_2.php"><label>My Profile</label></a>
  <a href="#">About us</a>
</div>

	<span style="font-size:30px;cursor:pointer" onclick="openNav()">
	  <img src="http://www.tennismarket.it/images/ham.png" width="51" height="51" style="position: absolute;margin-top: 10px;margin-left: 4px; border:none">
</span>

<a href="chat_text.php">
	<img src="http://www.clker.com/cliparts/P/I/X/M/y/i/chat-room-hi.png" alt="Chat Room" width="50" height="50" style="position: absolute;margin-left: 85%;margin-top: 10px;border:none;">
</a>
<a href="logout.php">
	<img src="https://cdn4.iconfinder.com/data/icons/basic-ui-elements/700/012_power-512.png" width="50" height="50" style="position: absolute;margin-left: 94%;margin-top: 10px;border:none;">
</a>
</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>


</body>
</html>