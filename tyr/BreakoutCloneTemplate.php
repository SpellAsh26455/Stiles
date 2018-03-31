<!DOCTYPE html>
<html>
<head>
  <title>BreakOut Clone Template</title>
  <style type="text/css">
  body
  {
    overflow-x:hidden;
    margin-top:- 2px;
  }
.wrap {
width: 100%;
min-width: 990px;
margin-left: -8px;
}
.fleft {
float:left; 
width: 29%;
background-color: #333333;
color:#f2f2f2;
height: 520px;
overflow-y: scroll;
padding: 5px;
}
.fright {
float: right;
background-color: #333333;
color:#f2f2f2;
height: 520px;
width: 69%;
overflow-y: scroll;
padding: 5px;
}
/* division of page ends here*/
img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 50px;
    height:50px;
}

img:hover {
    box-shadow: 0 0 2px 1px rgba(255, 140, 186, 1);
}
/*image look and feel ends here */
.display1 {
  height: 450px;
  width: 600px;
  border:3px solid white;
  margin:5px;
}
/* canvas look and feel ends here*/
.card{
  overflow-x: auto;
}
.pic{
  height:50px;
  width: 50px;
  background-color: rgba(255,255,255,0);
  border-radius: 2px;
  border-style: solid;
}
.ball{
  display: none;
}
.player{
  display: none;
}
.brick{
  display: none;
}


/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #595959;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
    height:70%;
    color: #f2f2f2;
}
.mcBall
{
  height: 40%;
  width:30%;
}
.mcPlayer
{
  height: 40%;
  width:30%;
}
.mcBrick
{
  height: 60%;
  width:60%;
}
/* The Close Button */
.close {
    color: #f2f2f2;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #333333; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: gray; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: aqua; 
}

.parentabc {
  position: relative;
  display: inline-block;
}
    
.closeabc {
  position: absolute;
  top: 0;
  right: 0;
  display: none;
  background-color: aqua;
}
  </style>
  <script type="text/javascript">
    var value="Breakwrite.php?";
    var p="";
    var i="";
    var b="";
    var br="";
    var bw="";
    var bh="";
    function setBackgroundForCanvas(name)
        {
            var c = document.getElementById("c1");
            c.style.backgroundImage ="url(assets/"+name+")"; 
            var bg="assets/"+name;
            b="bg="+ bg;
            //alert(c.value);
        }
        function setCardPlayer(cardname)
        {
            document.getElementById("playerpic").src="assets/"+cardname;
            document.getElementById("p1").src="assets/"+cardname;
            var div = document.getElementById("playerpic");
            div.style.display = "inline-block";
            var div1 = document.getElementById("closePlayer");
            div1.style.display = "inline-block";
            var bg="assets/"+cardname;
            p="player="+ bg;
        }
        function setCardBalls(cardname)
        {
            document.getElementById("ballpic").src="assets/"+cardname;
            document.getElementById("ball1").src="assets/"+cardname;
            var div = document.getElementById("ballpic");
            div.style.display = "inline-block";
            var div1 = document.getElementById("closeBall");
            div1.style.display = "inline-block";
            var bg="assets/"+cardname;
            i="ball="+ bg;
        }
        function setCardBricks(cardname)
        {
            document.getElementById("brickpic").src="assets/"+cardname;
            document.getElementById("b1").src="assets/"+cardname;
            var div = document.getElementById("brickpic");
            div.style.display = "inline-block";
            var div1 = document.getElementById("closeBrick");
            div1.style.display = "inline-block";
            var bg="assets/"+cardname;
            br="brick="+ bg;
        }
        function go(){
          if(b==""||p==""||br==""||i=="")
          {
            if(b=="")
          {
            alert("You need to select a background");
          }
          if(p=="")
          {
            alert("You need to select a player");
          }
          if(i=="")
          {
            alert("You need to select a ball");
          }
          if(br=="")
          {
            alert("You need to select brick");
          }
          }
          else
          {
          var g=value+b+"&"+i+"&"+p+"&"+br+"&bh="+bh+"&bw="+bw;
          //alert(g);
          var f1=document.getElementById("f1");
          f1.action=g;
          value="";
        }
        }
        function setBrickNos(w,h,name) {
          bw=w;
          bh=h;
          document.getElementById("bn1").style.border="1px solid #ddd";
          document.getElementById("bn2").style.border="1px solid #ddd";
          document.getElementById("bn3").style.border="1px solid #ddd";
          document.getElementById("bn4").style.border="1px solid #ddd";
          document.getElementById(name).style.border="3px solid #b3ffff";
        }
        function setStuff() {
          bw=5;
          bh=6;
          document.getElementById("bn1").style.border="3px solid #b3ffff";
        }
         function goclose(name,name1) {
          var div1 = document.getElementById(name);
            div1.style.display = "none";
            var div1 = document.getElementById(name1);
            div1.style.display = "none";
        }
  </script>
</head>
<?php include 'head_test.php';?>
<body onload="setStuff()"><form action="" method="post" id="f1">
  <font face="Comic Sans MS">
  <div class="wrap">
    <div class="fleft">
      <div class="bg">
            <br><label>BackGrounds:</label><br><br>&nbsp;
            <img src="assets/pinksky.png" alt="star" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('pinksky.png')">
            &nbsp;&nbsp;
            <img src="assets/bluesky.png" alt="Forest" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('bluesky.png')"><br>
            &nbsp;
            <img src="assets/sky.png" alt="Ice Forest" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('sky.png')">
            &nbsp;&nbsp;
            <img src="assets/pbsky.png" alt="Forest G" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('pbsky.png')"><br>
            &nbsp;
            <img  class="img" src="assets/blayer1.jpg" alt="blayer1" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('blayer1.jpg')">
             &nbsp;&nbsp;
            <img class="img" src="assets/blayer2.jpg" alt="blayer 2" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('blayer2.jpg')">
        </div><hr/>

        <div>
            <br><label>Player:</label><br><br>&nbsp;
            <img src="assets/paddle.png" alt="paddle" style="width:50px;height: 20px" onclick="setCardPlayer('paddle.png')">
            &nbsp;&nbsp;
            <img src="assets/paddle1.png" alt="paddle" style="width:50px;height: 20px" onclick="setCardPlayer('paddle1.png')">
            &nbsp;&nbsp;
            <img src="assets/paddle2.png" alt="paddle" style="width:50px;height: 20px" onclick="setCardPlayer('paddle2.png')">
            &nbsp;&nbsp;
            <img src="assets/paddle3.png" alt="paddle" style="width:50px;height: 20px" onclick="setCardPlayer('paddle3.png')">
            &nbsp;&nbsp;
        </div><hr/>
        
        <div>
            <br><label>Ball:</label><br><br>&nbsp;
            <img src="assets/ball.png" alt="ball1" style="width:20px;height: 20px" onclick="setCardBalls('ball.png')">
            &nbsp;&nbsp;
            <img src="assets/ball1.png" alt="ball1" style="width:20px;height: 20px" onclick="setCardBalls('ball1.png')">
            &nbsp;&nbsp;
            <img src="assets/ball3.png" alt="ball1" style="width:20px;height: 20px" onclick="setCardBalls('ball3.png')">
            &nbsp;&nbsp;
            <img src="assets/ball2.png" alt="ball1" style="width:20px;height: 20px" onclick="setCardBalls('ball2.png')">
            &nbsp;&nbsp;
            <img src="assets/ball4.png" alt="ball1" style="width:20px;height: 20px" onclick="setCardBalls('ball4.png')">
            &nbsp;&nbsp;

            <br><hr/>
        </div>
        
      
        <div>
            <br><label>Bricks:</label><br><br>&nbsp;
            <img src="assets/brick.png" alt="b1" style="width:50px;height: 20px" onclick="setCardBricks('brick.png')">
            &nbsp;&nbsp;
            <img src="assets/brick1.png" alt="b1" style="width:50px;height: 20px" onclick="setCardBricks('brick1.png')">
            &nbsp;&nbsp;
            <img src="assets/brick2.png" alt="b1" style="width:50px;height: 20px" onclick="setCardBricks('brick2.png')">
            &nbsp;&nbsp;
            <br><hr/>
        </div>
                <label> Enter Name Of Game <input type="text" name="gameofname" required></label> 
    </div>
    <div class="fright"><br><label>Canvas</label><br><br>
      <div class="pl"><canvas id="c1" name="canvas1" class="display1"></canvas></div><br><hr/><br>
      <div class="card"><label>Selected :</label><br>
        <div class="parentabc"><img id="playerpic" class="pic player" alt="playerpic" style="width:50px;height: 20px"><button id="closePlayer" class="closeabc" onclick="goclose('closePlayer','playerpic')">X</button>&nbsp;&nbsp;</div>
        <div class="parentabc"><img id="ballpic" class="pic ball" alt="ballpic" style="width:20px;height: 20px"><button id="closeBall" class="closeabc" onclick="goclose('closeBall','ballpic')">X</button>&nbsp;&nbsp;</div>
        <div class="parentabc"><img id="brickpic" class="pic brick" alt="brickpic" style="width:50px;height: 20px"><button id="closeBrick" class="closeabc" onclick="goclose('closeBrick','brickpic')">X</button>&nbsp;&nbsp;</div>
      </div><br>
      <input type="submit" value="GO" onclick="go()">
    </div>

  </div><br>
  <div id="myModal1" class="modal">
  <!-- Modal content -->
  <div class="modal-content mcPlayer">
    <span id="c1" class="close">&times;</span><br><br>
      <img src="" id="p1" style="width:50px;height: 20px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <font size="26"><label>PLAYER</label></font>
    <br><hr/><br>
    <input type="checkbox" name="
    " id="immovable_player" checked ><label>Immovable (Cant go up or down)</label><br>
    <input type="checkbox" name="left" id="left" checked="true"><label>Left Arrow key at speed </label>
    <select name="lSpeed" id="lSpeed">
      <option value="-100">100</option>
      <option value="-150">150</option>
      <option value="-200">200</option>
      <option value="-250">250</option>
      <option value="-300">300</option>
      <option value="-350">350</option>
    </select> <br>
    <input type="checkbox" id="right" name="right" checked="true"><label>Right Arrow key at speed </label>
    <select name="rSpeed" id="rSpeed">
      <option value="100">100</option>
      <option value="150">150</option>
      <option value="200">200</option>
      <option value="250">250</option>
      <option value="300">300</option>
      <option value="350">350</option>
    </select><br><br>
  </div>
  </div>


<div id="myModal2" class="modal">
  <!-- Modal content -->
  <div class="modal-content mcBall">
    <span id="c2" class="close">&times;</span><br><br>
      <img src="" id="ball1" style="width:20px;height: 20px"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <font size="26"><label>BALL</label></font>
    <br><hr/><br>
    <label>Speed of ball </label>
    <select name="bSpeed" id="bSpeed">
      <option value="100">100</option>
      <option value="150">150</option>
      <option value="200">200</option>
      <option value="250">250</option>
      <option value="300">300</option>
      <option value="350">350</option>
    </select><br><br>
  </div>
</div>

<div id="myModal3" class="modal">
  <!-- Modal content -->
  <div class="modal-content mcBrick">
    <span id="c3" class="close">&times;</span><br><br>
      <img src="" id="b1" style="width:50px;height: 20px"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <font size="26"><label>BRICK</label></font><br><hr/><br><center>
    <img src="assets/5x6.png" id="bn1" alt="5x6" style="width: 150px;height: 150px;" onclick="setBrickNos(5,6,'bn1')">&nbsp;&nbsp;&nbsp;
    <img src="assets/5x5.png" id="bn2" alt="5x5" style="width: 150px;height: 150px;" onclick="setBrickNos(5,5,'bn2')">&nbsp;&nbsp;&nbsp;
    <img src="assets/4x5.png" id="bn3" alt="4x5" style="width: 150px;height: 150px;" onclick="setBrickNos(4,5,'bn3')">&nbsp;&nbsp;&nbsp;
    <img src="assets/4x4.png" id="bn4" alt="4x4" style="width: 150px;height: 150px;" onclick="setBrickNos(4,4,'bn4')"></center>
    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5x6
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5x5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4x5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4x4
  </div>
</div>
<!-- Written By Katyani Mehra and Mahdi Lalani-->
<script>
var modal1 = document.getElementById('myModal1');
var btn1 = document.getElementById("playerpic");
var span1 = document.getElementsByClassName("close")[0];
btn1.onclick = function() {
    modal1.style.display = "block";
}
span1.onclick = function() {
    modal1.style.display = "none";
}

var modal2 = document.getElementById('myModal2');
var btn2 = document.getElementById("ballpic");
var span2 = document.getElementsByClassName("close")[1];
btn2.onclick = function() {
    modal2.style.display = "block";
}
span2.onclick = function() {
    modal2.style.display = "none";
}

var modal3 = document.getElementById('myModal3');
var btn3 = document.getElementById("brickpic");
var span3 = document.getElementsByClassName("close")[2];
btn3.onclick = function() {
    modal3.style.display = "block";
}
span3.onclick = function() {
    modal3.style.display = "none";
}

document.onclick = function(event) {
  if (event.target == modal1 || event.target == modal2 ||event.target == modal3){
    event.target.style.display = "none";
  }
}
</script>
</font>
</form>
</body>
</html>