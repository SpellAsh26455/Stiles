<html>
<head>
	<title></title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
	<script type="text/javascript">

		$(document).ready(function() {
   $('.login').hide();
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


    $(document).ready(function(){
    $(".bip").click(function(){
        $(".login").hide();
    });
}); 
    $(document).ready(function(){
    $(".bip").click(function(){
        $(".sign").show();
    });
}); 

/*  body
  {
    background-image: url('https://media.giphy.com/media/O0QCryNMAqiVW/giphy.gif');

  }
*/
	</script>

<style type="text/css">
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Comic Sans MS;
}
#login
{
    background-color: #0D3846;
    font-family: Comic Sans MS;
    color: white;
    padding: 10px 100px;
    text-align: center;
    font-size: 30px;
}
#login:hover
{
  background-image: linear-gradient(to left, #434343 0%, black 100%);
}
#sign
{
   background-color: #0D3846;
   font-family: Comic Sans MS;
    color: white;
    padding: 10px 100px;
    text-align: center;
    font-size: 30px;
    cursor: pointer;
}
.login {
  border-radius: 7px;
background: linear-gradient(-180deg, #BCC5CE 0%, #929EAD 98%), radial-gradient(at top left, rgba(255,255,255,0.30) 0%, rgba(0,0,0,0.30) 100%);
 background-blend-mode: screen;
width: 40%;
height: 50%;
}

.login h2
{
  color: black;
  font-size: 35px;
}
.login label
{
  color: black;
  font-size: 25px;

}
.login input[type=text]
{
    color: #777;
    padding-left: 10px;
    margin-left:15px;
    width: 300px;
    height: 38px;
    border: 1px solid #c7d0d2;
    border-radius: 2px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
}
.login input[type=password]
{
    color: #777;
    width: 300px;
    padding-left: 10px;
    margin-left:15px;
    height: 38px;
    border: 1px solid #c7d0d2;
    border-radius: 2px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
}
.login input[type=submit]
{
    background-color: #0D3846;
    color: white;
    padding: 5px 10px;
    text-align: center;
    font-size: 20px;
    border-radius: 7px;
    width: 100%
}
.sign {
  border-radius: 7px;
background: linear-gradient(-180deg, #BCC5CE 0%, #929EAD 98%), radial-gradient(at top left, rgba(255,255,255,0.30) 0%, rgba(0,0,0,0.30) 100%);
 background-blend-mode: screen;
  width: 50%;
  height: 66%;
}
.sign h2
{
  color: black;
  font-size: 35px;
}
.sign label
{
  color: black;
  font-size: 25px;
  margin-left: 4%;
}
.sign input[type=text]
{
    color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    width: 300px;
    height: 38px;
    border: 1px solid #c7d0d2;
    border-radius: 2px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
}

  .sign input[type=email]

{
    color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    width: 300px;
    height: 38px;
     border: 1px solid #c7d0d2;
    border-radius: 2px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;

}
.sign input[type=password]
{
    color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    width: 300px;
    height: 38px;
    border: 1px solid #c7d0d2;
    border-radius: 2px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
}
.sign input[type=submit]
{
    background-color: #0D3846;
    color: white;
    text-align: center;
    font-size: 20px;
    margin: 4px 2px;
    border-radius: 7px;
    padding: 5px;
    width: 100%;
}
#sign:hover
{
  background-image: linear-gradient(to left, #434343 0%, black 100%);
}
input[type=submit]:hover
{
  background-image: linear-gradient(to left, #434343 0%, black 100%);
}

.header {
  overflow: hidden;
  background-color: rgba(0,0,0,0.2);
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
</style>
</head>
<body style="background-image: linear-gradient(to right, #d7d2cc 0%, #304352 100%);">

<div class="header">
  <a href="#default" class="logo">ASTERI</a>
  <div class="header-right">
    <a class="active" href="Home.html">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div><br>

<div style="text-align: center;">
 <button id="login" > <span>Login</span></button>
 <button id="sign" ><span>Sign up</span></button>
</div>
<center><div class="login" style="background-color: grey;">
	<h2>Login</h2>
<form action="process.php" method="post">
  <table border="0" width="500" height="200"><tr><td>
   <label>Username : </label></td><td><input type="text" name="username" placeholder="Username: eg-raven" required></td></tr>
	<tr><td>
   <label>Password :</label></td><td><input type="password" name="pass" placeholder="Password: eg-********" required></td></tr>
	<tr><td colspan="2">
	<input type="submit" name="submit_l" value="SUBMIT"></td></tr></table>
</form>
</div></center>



<center><div class="sign" style="background-color: grey">
	<h2 align="center">Sign Up</h2>
<form  method="POST" action="signn.php">
  <table border="0" width="600" height="200"><tr>
    <td>
   <label>Username:</label></td><td>	<input type="text" name="username" placeholder="Username: eg-raven" required></td></tr>
	<tr><td>
   <label>Email:</label>	</td> <td><input type="email" id="e" name="email" placeholder="Email: eg-raven@gmail.com" required></td></tr>
	<tr><td>
   <label>Password: </label></td> <td>	<input type="password" name="pass" placeholder="Password: eg-********" id="password" required></td></tr>
	<tr><td> <label>Confirm Password: </label></td> 
    <td>
       <input type="password" name="con_pass" placeholder="Confirm Password: eg-********" id="confirm_password" required></td></tr>
       <tr><td colspan="2">
	<input type="submit" name="submit" value="SUBMIT"></td></tr></table>
</form>
</div></center>

  <script type="text/javascript">
var password = document.getElementById("password");
 var  confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
  </script>



</body>
</html>