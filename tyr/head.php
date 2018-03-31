<!DOCTYPE html>
<html>
<head>
<style>
body {
    font-family: "Lato", sans-serif;
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




.MADKAT {
  -webkit-transition: all 3s ease-out;
          transition: all 3s ease-out;
  -webkit-animation: pulsate 8s ease-out infinite;
          animation: pulsate 8s ease-out infinite;
  position: absolute;
  left: 48%;
  top: 60%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  margin: 0;
  font-family: Helvetica, Arial, Sand-serif;
  font-weight: bold;
  color: black;
  text-align: center;
  text-transform: uppercase; }

.MADKAT:hover {
  color: #5cefaf; }

/*** Keyframes - used with the "animation" property in the h1 ***/
@-webkit-keyframes pulsate {
  0%, 20% {
    -webkit-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1);
    -webkit-filter: blur(5px);
            filter: blur(5px); }
  50%, 70% {
    -webkit-transform: translate(-50%, -50%) scale(1.5);
            transform: translate(-50%, -50%) scale(1.5);
    -webkit-filter: none;
            filter: none; }
  100% {
    -webkit-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1);
    -webkit-filter: blur(5px);
            filter: blur(5px); } }
@keyframes pulsate {
  0%, 20% {
    -webkit-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1);
    -webkit-filter: blur(5px);
            filter: blur(5px); }
  50%, 70% {
    -webkit-transform: translate(-50%, -50%) scale(1.5);
            transform: translate(-50%, -50%) scale(1.5);
    -webkit-filter: none;
            filter: none; }
  100% {
    -webkit-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1);
    -webkit-filter: blur(5px);
            filter: blur(5px); } }

/*** Media queries for adjusting to different screen sizes ***/
@media only screen and (max-width: 600px) {
  h1 {
    font-size: 2em; } }

    .head
    {
      position: relative;
      margin-top: -8px;
      margin-left: -8px;
      width: 1366px;
    }
    .icon
    {
      position: absolute;
      margin-left: 1110px;
      margin-top: -4%;
    }

</style>
</head>
<body >
  <div class="head">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="p&d.php">Home</a>
  <a href="play.php">Play</a>
  <a href="viewPro.php">View Profile</a>
  <a href="editPro.php">Edit Profile</a>
  <a href="#">About us</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">
  <img src="https://www.shareicon.net/download/2016/09/10/827963_multimedia_512x512.png" width="60" height="60" >
</span>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<h1 class="MADKAT">MADKAT</h1>   
<div class="icon">
<a href="chat.php"><img src="chatroom.png" width="60" height="60"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#"><img src="notifications.png" width="60" height="60"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="logout.php"><img src="logout.png" width="60" height="60"></a>
</div>
</div>
</body>
</html> 
