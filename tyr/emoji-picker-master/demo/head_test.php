<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.main
		{
			background-image: linear-gradient(to right, #434343 0%, black 100%);
			width: 1365px;
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
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

	</style>
</head>
<body style="background-image: linear-gradient(to right, #d7d2cc 0%, #304352 100%);">
<div class="main">
  <p style="margin-left: 45%;color:white">Asteri</p>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost/text/p&d.php">Home</a>
  <a href="http://localhost/text/viewProdemo_2.php">View Profile</a>
  <a href="http://localhost/text/editPro.php">Edit Profile</a>
  <a href="#">About us</a>
</div>

	<span style="font-size:30px;cursor:pointer" onclick="openNav()">
	  <img src="https://www.skordefest.nu/wp-content/themes/skordefest.nu/img/toggle.png" width="51" height="51" style="position: 
	  absolute;margin-top: 10px;margin-left: 4px;">
</span>

<a href="chat.php">
	<img src="http://www.freepngimg.com/download/chat/12-2-chat-png.png" width="50" height="50" style="position: 
	  absolute;margin-left: 85%;margin-top: 11px;">
</a>
<a href="logout.php">
	<img src="https://cdn.oncarrot.com/uploads/sites/1868/2015/03/switch-turn-off-icon.png" width="45" height="45" style="position: 
	  absolute;margin-left: 94%;margin-top: 11px;"">
</a>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

</div>
</body>
</html>