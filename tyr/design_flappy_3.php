<!DOCTYPE html>
<html>
<head>
  <title>Flappy Bird Template</title>
 
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
    var value="flappywrite_3.php?";
    var p="";
    var o="";
    var b="";
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
        function setCardObject(cardname)
        {
            document.getElementById("objectpic").src="assets/"+cardname;
            document.getElementById("o1").src="assets/"+cardname;
            var div = document.getElementById("objectpic");
            div.style.display = "inline-block";
            var div1 = document.getElementById("closeObject");
            div1.style.display = "inline-block";
            var bg="assets/"+cardname;
            o="obj="+ bg;
        }
        function showfont() {
          var c=document.getElementById("fontS");
          var f1=document.getElementById("fface");
          var f2=document.getElementById("fsize");
          var f3=document.getElementById("fcolor");
          if(c.checked)
          {
              f1.style.display="inline-block";
              f2.style.display="inline-block";
              f3.style.display="inline-block";
          }
        }
        function go(){
          if(b==""||p==""||o=="")
          {
            if(b=="")
          {
            alert("You need to select a background");
          }
          if(p=="")
          {
            alert("You need to select a player");
          }
          if(o=="")
          {
            alert("You need to select an Object");
          }
          }
          else
          {
          var g=value+b+"&"+o+"&"+p;
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
            <img src="assets/a.png" alt="i1" style="width:50px;height: 50px" onclick="setCardPlayer('a.png')">
            &nbsp;&nbsp;
            <img src="assets/d1.png" alt="dancingDude" style="width:50px;height: 50px" onclick="setCardPlayer('d1.png')">
            &nbsp;&nbsp;
            <img src="assets/bird1.png" alt="dancingDude" style="width:50px;height: 50px" onclick="setCardPlayer('bird1.png')">
            &nbsp;&nbsp;
            <img src="assets/bird2.jpg" alt="dancingDude" style="width:50px;height: 50px" onclick="setCardPlayer('bird2.jpg')">
            </div><hr/>

        <div >
            <br><label>Pipe:</label><br><br>&nbsp;
            <img src="assets/pipe.png" alt="i1" style="width:50px;height: 50px" onclick="setCardObject('pipe.png')">
            &nbsp;&nbsp;
            <img src="assets/pipe2.png" alt="i1" style="width:50px;height: 50px" onclick="setCardObject('pipe2.png')">
            &nbsp;&nbsp;
            <img src="assets/pipe3.png" alt="i1" style="width:50px;height: 50px" onclick="setCardObject('pipe3.png')">
            &nbsp;&nbsp;
            <img src="assets/bird.png" alt="dancingDude" style="width:50px;height: 50px" onclick="setCardObject('bird.png')">
            <br><hr/>

        </div>
                <label> Enter Name Of Game <input type="text" name="gameofname" required></label> 
    </div>
    <div class="fright">
      <br>
      <label>Canvas</label><br><br>
      <div class="pl"><canvas id="c1" name="canvas1" class="display1"></canvas></div><br><hr/><br>
      <div class="card"><label>Selected :</label><br>
        <div class="parentabc"><img id="playerpic" class="pic player" alt="playerpic"><button id="closePlayer" class="closeabc" onclick="goclose('closePlayer','playerpic')">X</button>&nbsp;&nbsp;</div>
        <div class="parentabc"><img id="objectpic" class="pic object" alt="objectpic"><button id="closeObject" class="closeabc" onclick="goclose('closeObject','objectpic')">X</button>&nbsp;&nbsp;</div>

      </div><br>
      <input type="submit" value="GO" onclick="go()">
    </div>
  </div><br>
  <div id="myModal1" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span id="c1" class="close">&times;</span><br><br>
      <img src="" id="p1" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>
      <font size="26"><label>PLAYER</label></font></span>
    <br><hr/><br>
    <input type="checkbox" name="grav" checked="true" disabled="true"><label>Add Gravity(to make it fall) at </label>
    <select name="gravity">
      <option value="500">500</option>
      <option value="1000">1000</option>
      <option value="1500">1500</option>
      <option value="2000">2000</option>
    </select><br><br>
    <label>Which Key to use to jump </label>
    <select name="jumpKey">
      <option value="Spacebar">SpaceBar</option>
    </select> <label>How high </label>
    <select name="jumpHeight">
      <option value="-350">-350</option>
      <option value="-360">-360</option>
      <option value="-370">-370</option>
      <option value="-380">-380</option>
    </select><br><br>
    <input type="checkbox" name="fontS" id="fontS" onclick="showfont()"><label> Add Score</label><br>
    <select id="fface" name="fface" style="display: none">
      <option value="Comic Sans MS">Comic Sans MS</option>
      <option value="Comic Sans MS">Arial</option>
    </select> &nbsp;&nbsp;
    <select id="fsize" name="fsize" style="display: none">
      <option value="30">30</option>
      <option value="40">40</option>
      <option value="50">50</option>
    </select> &nbsp;&nbsp;
    <select id="fcolor" name="fcolor" style="display: none">
      <option value="black">black</option>
      <option value="red">red</option>
    </select><br>
    <label>Limit the jump between</label> <input type="text" name="lim1" value="0" size="3" maxlength="3"><label>px and </label><input type="text" name="lim2" value="490" size="3" maxlength="3"> <label>px</label><br>
    <input type="checkbox" name="limitx" checked="true" disabled="true"><label>Limit Crossed = GAME OVER</label>
  </div>
  </div>
  </div>
</div>

<div id="myModal2" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span id="c2" class="close">&times;</span><br><br>
    
      <img src="" id="o1"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <font size="26"><label>OBJECT</label></font>
    <br><hr/><br>
    <select name="pipe">
      <option value="8">8</option>
      <option value="7">7</option>
      <option value="9">9</option>
    </select><label> Per Pipe</label> <br><br>
    <select name="random">
      <option value="2">2</option>
    </select> <label>Left empty for player to cross through</label><br><br>
    <select name="space">
      <option value="1100">1100</option>
      <option value="1200">1200</option>
      <option value="1300">1300</option>
      <option value="1400">1400</option>
      <option value="1500">1500</option>
    </select> <label>Space between each pipe </label>
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
var btn2 = document.getElementById("objectpic");
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