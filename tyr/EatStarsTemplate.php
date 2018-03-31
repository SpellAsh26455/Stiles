<!DOCTYPE html>
<html>
<head>
  <title>Eat The Stars Template</title>
  <link rel="stylesheet" type="text/css" href="DPV2.css">
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
.object{
  display: none;
}
.player{
  display: none;
}
.villan{
  display: none;
}
.obs{
  display: none;
}
.incentive{
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
    position: relative;
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
    var value="Estarswrite.php?";
    var p="";
    var i="";
    var b="";
    function setBackgroundForCanvas(name)
        {
            var c = document.getElementById("c1");
            c.style.backgroundImage ="url(assets/"+name+")"; 
            var bg="assets/"+name;
            b="bg="+ bg;
            //alert(c.value);
        }
        function setCardIncentive(cardname)
        {
            document.getElementById("ipic").src="assets/"+cardname;
            document.getElementById("i1").src="assets/"+cardname;
            var div = document.getElementById("ipic");
            div.style.display = "inline-block";
            var div1 = document.getElementById("closeInc");
            div1.style.display = "inline-block";
            var bg="assets/"+cardname;
            i="inc="+bg;
            //value+="inc="+ bg+"&";
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
        function showfont() {
          var c=document.getElementById("fontS");
          var f1=document.getElementById("fface");
          var f2=document.getElementById("fsize");
          var f3=document.getElementById("fcolor");
          if(c.checked)
          {
              f1.style.display="block";
              f2.style.display="block";
              f3.style.display="block";
          }
        }
        function go(){
          if(b==""||p==""||i=="")
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
            alert("You need to select an incentive");
          }
          }
          else
          {
          var g=value+b+"&"+i+"&"+p;
          alert(g);
          var f1=document.getElementById("f1");
          f1.action=g;
          value="";
        }
        }
        function goclose(name,name1) {

          var div1 = document.getElementById(name);
            div1.style.display = "none";
            var div1 = document.getElementById(name1);
            div1.style.display = "none";
        }
  </script>
</head>
<body>
  <?php include 'head_test.php';?>
  <form action="" method="post" id="f1">
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
            <img src="assets/spacedancerdude.gif" alt="dancingDude" style="width:50px;height: 50px" onclick="setCardPlayer('spacedancerdude.gif')">
            &nbsp;&nbsp;
            <img src="assets/guystatic.png" alt="dancingDude" style="width:50px;height: 50px" onclick="setCardPlayer('guystatic.png')">
            &nbsp;&nbsp;
        </div><hr/>

        <div >
            <br><label>Incentives:</label><br><br>&nbsp;
            <img src="assets/a.png" alt="i1" style="width:50px;height: 50px" onclick="setCardIncentive('a.png')">
            &nbsp;&nbsp;
            <img src="assets/diamond.png" alt="i2" style="width:50px;height: 50px" onclick="setCardIncentive('diamond.png')">
            &nbsp;&nbsp;
            <img src="assets/firstaid.png" alt="i3" style="width:50px;height: 50px" onclick="setCardIncentive('firstaid.png')"><br><hr/>
        </div>

<label> Enter Name Of Game <input type="text" name="gameofname" required></label> 
    </div>
    <div class="fright"><br><label>Canvas </label><br><br>
      <div class="pl"><canvas id="c1" name="canvas1" class="display1"></canvas></div><br><hr/><br>
      <div class="card"><label>Selected :</label><br>
        <div class="parentabc"><img id="playerpic" class="pic player" alt="playerpic"><button id="closePlayer" class="closeabc" onclick="goclose('closePlayer','playerpic')">X</button>&nbsp;&nbsp;</div>
        <div class="parentabc"> <img id="ipic" class="pic incentive"><button id="closeInc" class="closeabc" onclick="goclose('closeInc','ipic')">X</button>&nbsp;&nbsp;</div>
      </div><br>
      <input type="submit" value="GO" onclick="go()">
    </div>
  </div><br>
  <div id="myModal1" class="modal">
  <!-- Modal content For Player -->
  <div class="modal-content">
    <span id="c1" class="close">&times;</span>
    <br><br>
      <img src="" id="p1" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <font size="26"><label>PLAYER</label></font>
    <br><hr/><br>
    <input type="checkbox" name="gravity" checked="true"><label>Add Gravity</label> 
    <select name="sGravity">
      <option value="100">100</option>
      <option value="200">200</option>
      <option value="300" selected="true">300</option>
      <option value="400">400</option>
      <option value="500">500</option>
    </select><br><hr> <label>Allow Keys</label><br>
    <input type="checkbox" name="left" checked="true"><label>Left Arrow at Speed</label>
    <select name="sLeft">
      <option value="-100">100</option>
      <option value="-200">200</option>
      <option value="-300">300</option>
      <option value="-400">400</option>
      <option value="-500">500</option>
    </select>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="right" checked="true"><label>Right Arrow at Speed</label>
    <select name="sRight">
      <option value="100">100</option>
      <option value="200">200</option>
      <option value="300">300</option>
      <option name="400">400</option>
      <option value="500">500</option>
    </select><br><br>
    <input type="checkbox" name="up" checked="true"><label>Up Arrow at Speed</label>
    <select name="sUp">
      <option value="-100">100</option>
      <option value="-200">200</option>
      <option value="-300">300</option>
      <option value="-400">400</option>
      <option value="-500">500</option>
    </select><br><hr>
  </div>
  </div>


<div id="myModal2" class="modal">
  <!-- Modal content For Incentives-->
  <div class="modal-content">
    <span id="c2" class="close">&times;</span><br><br>
      <img src="" id="i1"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <font size="26"><label>INCENTIVES</label></font><br><hr/><br>
    <input type="checkbox" name="idfs" checked="true"><label>Drop From Sky</label><br><hr>
    <label>No of Stars</label>
    <select name="nosStars">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12" selected="true">12</option>
    </select>
    <label> at Distance <label>
     <select name="disStars">
       <option value="50">50</option>
      <option value="60">60</option>
      <option value="70" selected="true">70</option>
      <option value="80">80</option>
     </select><br><hr>
     <label>Score Increases By <label><select name="sInc">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10" selected="true">10</option>
    </select>
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
var btn2 = document.getElementById("ipic");
var span2 = document.getElementsByClassName("close")[1];
btn2.onclick = function() {
    modal2.style.display = "block";
}
span2.onclick = function() {
    modal2.style.display = "none";
}

document.onclick = function(event) {
  if (event.target == modal1 || event.target == modal2 ){
    event.target.style.display = "none";
  }
}
</script>
</font>
</form>
</body>
</html>