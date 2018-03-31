<html>
<head>
  <title>Custom Build</title>
<style type="text/css">
  .wrap {
width: 100%;
}
.fleft {
float:left; 
width: 29%;
background-color: #333332;
/*background-image: url(assets/wbg.jpg);*/
color:#b3ffff;
height: 590px;
overflow-y: scroll;
padding: 5px;
}
.fright {
float: right;
background-color: #333332;
/*background-image: url(assets/wbg.jpg);*/
color:#b3ffff;
height: 590px;
width: 69%;
overflow-y: scroll;
padding: 5px;
}
/* division of page ends here*/
.img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 50px;
    height:50px;
}

.img:hover {
    box-shadow: 0 0 2px 1px rgba(255, 140, 186, 1);
}

/*image look and feel ends here */
.display1 {
  border:3px solid #b3ffff;
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
    padding-top: 50px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.6); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #595959;
    margin: auto;
    padding: 10px;
    border: 1px solid #888;
    width: 50%;
    height:80%;
    color:#b3ffff;
}
.mCanvas{
  width: 70%;
    height:70%;
}

/* The Close Button */
.close {
    color: #b3ffff;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #b3ffff;
    text-decoration: none;
    cursor: pointer;
}

.mc
{
      overflow-y: auto;
      height:65%;
}
.myModal5mc
{
  background-color: #595959;
    margin: auto;
    padding: 5px;
    border: 1px solid #888;
    width: 95%;
    height:93%;
    color:#b3ffff;
    overflow-y: auto;
}

/*Modal box styling ends here*/
/* width */
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
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}


</style>
<script type="text/javascript" src="phaser.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
  <script type="text/javascript">
    var value="CB.php?";
    var p="";
    var b="";
    var v="";
    var i="";
    var canvastype="static";
    var wid="";
    var hei="";
    var dataString="";
        function setBackgroundForCanvas(name)
        {
            var c = document.getElementById("c1");
            c.style.backgroundImage ="url(assets/"+name+")"; 
            var bg="assets/"+name;
            b="bg="+ bg;
            //alert(c.value);
        }
        function setCardVillan(cardname)
        {
            document.getElementById("vpic").src="assets/"+cardname;
            document.getElementById("v1").src="assets/"+cardname;
            document.getElementById("pv1").src="assets/"+cardname;
            document.getElementById("pv1").style.display="inline-block";
            var div = document.getElementById("vpic");
            div.style.display = "inline-block";
            var bg="assets/"+cardname;
            v="villan="+ bg;
        }
        function setCardIncentive(cardname)
        {
            document.getElementById("ipic").src="assets/"+cardname;
            document.getElementById("i1").src="assets/"+cardname;
            document.getElementById("pi1").src="assets/"+cardname;
            document.getElementById("pi1").style.display="inline-block";
            var div = document.getElementById("ipic");
            div.style.display = "inline-block";
            var bg="assets/"+cardname;
            i="i="+ bg;
        }
        function setCardPlayer(cardname)
        {
            document.getElementById("playerpic").src="assets/"+cardname;
            document.getElementById("p1").src="assets/"+cardname;
            var div = document.getElementById("playerpic");
            div.style.display = "inline-block";
            var bg="assets/"+cardname;
            p="p="+ bg;
        }
        
        function go(){
          var g=value+b+"&"+i+"&"+p+"&"+v+"&"+canvastype;
          //alert(g);
          var f1=document.getElementById("f1");
          f1.action=g;
          value="";
        }
        function CanvasType(name){
         canvastype="ct="+name;

        }
        function cc()
        {
          var modal1 = document.getElementById('myModal1');
          modal1.style.display="block";
          var span1 = document.getElementsByClassName("close")[0];
          span1.onclick = function() {
           modal1.style.display = "none";
           var e=document.getElementById("canw");
           wid = e.options[e.selectedIndex].value;
           e=document.getElementById("canh");
           hei = e.options[e.selectedIndex].value;
           //alert(wid+" "+hei);
           var c=document.getElementById("c1");
           c.style.width=wid+"px";
           c.style.height=hei+"px";
          }
        }
        function forScore(name) 
        {
            //document.getElementById(name).style.border="3px solid #b3ffff"; 
            var c=document.getElementById(name).style.border;
            if(c==="3px solid rgb(179, 255, 255)")   
            {
              document.getElementById(name).style.border="1px solid #ddd";
            }  
            else
            {
              document.getElementById(name).style.border="3px solid #b3ffff";
            } 
        }
         function foo () {
          var g="CB.php?"+b+"&"+i+"&"+p+"&"+v+"&"+canvastype;
          alert("in");
          var playerGrav=$("#playerGrav").val();
          var e=document.getElementById("playerGravSpeed");
          var playerGravSpeed=e.options[e.selectedIndex].value;
          var gameBounds=document.getElementById("gameBounds");
          var e=document.getElementById("sw");
          var sw=e.options[e.selectedIndex].value;
          var scoreAllow=document.getElementById("scoreAllow");
          var idfs=document.getElementById("idfs");
          var starGrav=document.getElementById("starGrav");
          var e=document.getElementById("starGravSpeed");
          var starGravSpeed=e.options[e.selectedIndex].value;
          var e=document.getElementById("IncNos");
          var IncNos=e.options[e.selectedIndex].value;
          var e=document.getElementById("IncDis");
          var IncDis=e.options[e.selectedIndex].value;
          var iscore=document.getElementById("iscore").value;
          var vdfs=document.getElementById("vdfs");
          var villanGrav=document.getElementById("villanGrav");
          alert("mid");
          var e=document.getElementById("villanGravSpeed");
          var villanGravSpeed=e.options[e.selectedIndex].value;
          var e=document.getElementById("vNos");
          var vNos=e.options[e.selectedIndex].value;
          var e=document.getElementById("vDis");
          var vDis=e.options[e.selectedIndex].value;
          var vscore=document.getElementById("vscore").value;
          var left=document.getElementById("left");
          var e=document.getElementById("lSpeed");
          var lSpeed=e.options[e.selectedIndex].value;
          var right=document.getElementById("right");
          var e=document.getElementById("rSpeed");
          var rSpeed=e.options[e.selectedIndex].value;
          var up=document.getElementById("up");
          var e=document.getElementById("uSpeed");
          var uSpeed=e.options[e.selectedIndex].value;
          var Spacebar=document.getElementById("Spacebar");
          var e=document.getElementById("sSpeed");
          var sSpeed=e.options[e.selectedIndex].value;
          var e=document.getElementById("Sinc");
          var Sinc=e.options[e.selectedIndex].value;
          var e=document.getElementById("Svil");
          var Svil=e.options[e.selectedIndex].value;
          alert("in");
          dataString='canw='+wid+'&canh='+hei+'&playerGrav='+playerGrav+'&playerGravSpeed='+playerGravSpeed+
          '&gameBounds='+gameBounds+
          '&sw='+sw+
          '&scoreAllow='+scoreAllow+
          '&idfs='+idfs+
          '&starGrav='+starGrav+
          '&starGravSpeed='+starGravSpeed+
          '&IncNos='+IncNos+
          '&IncDis='+IncDis+
          '&iscore='+iscore+
          '&vdfs='+vdfs+
          '&villanGrav='+villanGrav+
          '&villanGravSpeed='+villanGravSpeed+
          '&vNos='+vNos+
          '&vDis='+vDis+
          '&vscore='+vscore+
          '&left='+left+
          '&lSpeed='+lSpeed+
          '&right='+right+
          '&rSpeed='+rSpeed+
          '&up='+up+
          '&uSpeed='+uSpeed+
          '&Spacebar='+Spacebar+
          '&sSpeed='+sSpeed+
          '&Sinc='+Sinc+
          '&Svil='+Svil;
          alert(dataString);
          createDiv();
      $.ajax({
        url:g, //the page containing php script
        type: "POST",
        data:dataString, //request type
        success:function(result){
         //alert(result+"Please wait loading game");
         var head= document.getElementsByTagName('head')[0];
      var script= document.createElement('script');
      script.type= 'text/javascript';
      script.src= 'UserCustom.js';
      head.appendChild(script);  
      delay1();
       }
     });  
      //alert("haha");
      var modal5 = document.getElementById('myModal5');
          modal5.style.display="block";
          var span1 = document.getElementsByClassName("close")[4];
          span1.onclick = function() {
           modal5.style.display = "none";}
      return false;
 }
 function createDiv() {
   if (document.getElementById("loader")) 
   {     
          var child = document.getElementById("loader");
          var parent = document.getElementById("here");
          parent.removeChild(child);
     } 
     var parent = document.getElementById("here");
          var child = document.createElement('div')
          child.id="loader";
          parent.appendChild(child);
   if (document.getElementById("myPhaserGame")) 
   {     
          var child = document.getElementById("myPhaserGame");
          var parent = document.getElementById("here");
          parent.removeChild(child);
     } 
     var parent = document.getElementById("here");
          var child = document.createElement('div')
          child.id="myPhaserGame";
          parent.appendChild(child);
 }
 function delay1() {
   for(var i=0;i<10000;i++)
   {
     for(var j=0;j<10000;j++)
   {
        
   } 
   }
   document.getElementById("loader").style.display="none";
 }
  </script>
</head>
<body onload="cc()">
  <form action="" method="post" id="f1">
  <font face="Comic Sans MS">
  <div class="wrap">
    <div class="fleft">
      <div class="bg">
            <br><label>BackGrounds:</label><br><br>&nbsp;
            <img class="img" src="assets/pinksky.png" alt="star" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('pinksky.png')">
            &nbsp;&nbsp;
            <img class="img" src="assets/bluesky.png" alt="Forest" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('bluesky.png')"><br>
            &nbsp;
            <img  class="img" src="assets/sky.png" alt="Ice Forest" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('sky.png')">
            &nbsp;&nbsp;
            <img class="img" src="assets/pbsky.png" alt="Forest G" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('pbsky.png')">
        </div><hr/>

        <div>
            <br><label>Player:</label><br><br>&nbsp;
            <img class="img" src="assets/star.png" alt="i1" style="width:50px;height: 50px" onclick="setCardPlayer('star.png')">
            &nbsp;&nbsp;
            <img class="img" src="assets/spacedancerdude.gif" alt="dancingDude" style="width:50px;height: 50px" onclick="setCardPlayer('spacedancerdude.gif')">
            &nbsp;&nbsp;
            <img class="img" src="assets/bird.png" alt="dancingDude" style="width:50px;height: 50px" onclick="setCardPlayer('bird.png')">&nbsp;&nbsp;
            <img class="img" src="assets/pipe.png" alt="i1" style="width:50px;height: 50px" onclick="setCardPlayer('pipe.png')">
            &nbsp;&nbsp;
        </div><hr/>
        
        <div>
            <br><label>Villans/ Obstacles/ Objects:</label><br><br>&nbsp;
            <img class="img" src="assets/Phantom1.png" alt="Forest" style="width:50px;height: 50px" onclick="setCardVillan('Phantom1.png')">
            &nbsp;&nbsp;
            <img class="img" src="assets/Phantom2.png" alt="Forest" style="width:50px;height: 50px" onclick="setCardVillan('Phantom2.png')">&nbsp;&nbsp;
            <img class="img" src="assets/fire1.png" alt="obs1" style="width:50px;height: 50px" onclick="setCardVillan('fire1.png')">
            &nbsp;&nbsp;
            <img class="img" src="assets/ball.png" alt="obs2" style="width:50px;height: 50px" onclick="setCardVillan('ball.png')">&nbsp;&nbsp;
            <br><hr/>
        </div>

        <div>
            <br><label>Incentives:</label><br><br>&nbsp;
            <img class="img" src="assets/star.png" alt="i1" style="width:50px;height: 50px" onclick="setCardIncentive('star.png')">
            &nbsp;&nbsp;
            <img class="img" src="assets/diamond.png" alt="i2" style="width:50px;height: 50px" onclick="setCardIncentive('diamond.png')">
            &nbsp;&nbsp;
            <img class="img" src="assets/firstaid.png" alt="i3" style="width:50px;height: 50px" onclick="setCardIncentive('firstaid.png')"><br><hr/>
        </div>
    </div>
    <div class="fright"><br><label>Canvas</label><br>
      <div><canvas id="c1" name="canvas1" class="display1"></canvas> </div>
      <br><hr/><br>
      <input type="checkbox" id="scoreAllow" name="scoreAllow" checked="true">SCORE<br>
      <input type="checkbox" id="gameBounds" name="gameBounds" checked="true">GAME BOUNDS<br>
      <div class="card"><label>Selected :</label>
        <div>&nbsp;&nbsp;
        <img id="playerpic" class="pic player img">&nbsp;&nbsp;
        <img id="vpic" class="pic villan img">&nbsp;&nbsp;
        <img id="ipic" class="pic incentive img">&nbsp;&nbsp;
      </div>
      </div><br>
      <input type="submit" value="SUBMIT" onclick="go()">
      <button id="b1" onclick="foo();return false;">PREVIEW</button>
    </div>
  </div><br>
  <div id="myModal1" class="modal">
  <!-- Modal content For Canvas-->
  <div class="modal-content mCanvas">
    <span id="c1" class="close">&times;</span>
    <p><font size="26"><label>CHOOSE CANVAS TYPE</label></font></p><hr/><br><center>
<img class="img" src="assets/c1.gif" style="width:150px;height: 200px" onclick="CanvasType('left')">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img class="img" src="assets/c2.gif" style="width:400px;height: 200px" onclick="CanvasType('static')">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img class="img" src="assets/c3.gif" style="width:200px;height: 200px" onclick="CanvasType('up')">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Moving left </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>Staying right where you are </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>Moving upwards</label><br>
<br>
<label>Select size width </label><select id="canw" name="canw">
  <option value="400">400</option>
  <option value="500">500</option>
  <option value="600">600</option>
  <option value="700">700</option>
  <option value="800">800</option>
</select> <label>and height </label><select id="canh" name="canh">
  <option value="400">400</option>
  <option value="500">500</option>
  <option value="600">600</option>
</select><label> of canvas</label>
  </div>
</div>

<div id="myModal2" class="modal">
  <!-- Modal content For Player-->
  <div class="modal-content">
    <span id="c2" class="close">&times;</span>
    <p>
      <img class="img" src="" id="p1"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <font size="15"><label>PLAYER</label></font>
    </p><hr/><br><div class="mc">
    <label>Allow Keyboard keys</label><br>
    <input type="checkbox" name="left" id="left" checked="true"><label>Left Arrow key at speed </label>
    <select name="lSpeed" id="lSpeed">
      <option value="-100">100</option>
      <option value="-150">150</option>
      <option value="-200">200</option>
      <option value="-250">250</option>
      <option value="-300">300</option>
      <option value="-350">350</option>
    </select> &nbsp;&nbsp;&nbsp;
    <input type="checkbox" id="right" name="right" checked="true"><label>Right Arrow key at speed</label> 
    <select name="rSpeed" id="rSpeed">
      <option value="100">100</option>
      <option value="150">150</option>
      <option value="200">200</option>
      <option value="250">250</option>
      <option value="300">300</option>
      <option value="350">350</option>
    </select><br><br>
    <input type="checkbox" name="up" id="up" checked="true"><label>Up Arrow key at speed </label>
    <select name="uSpeed" id="uSpeed">
      <option value="-100">100</option>
      <option value="-150">150</option>
      <option value="-200">200</option>
      <option value="-250">250</option>
      <option value="-300">300</option>
      <option value="-350">350</option>
    </select>&nbsp;&nbsp;&nbsp;
    <input type="checkbox" id="Spacebar" name="Spacebar" checked="true"><label>Spacebar at speed </label>
    <select name="sSpeed" id="sSpeed">
      <option value="-100">100</option>
      <option value="-150">150</option>
      <option value="-200">200</option>
      <option value="-250">250</option>
      <option value="-300">300</option>
      <option value="-350">350</option>
    </select><br><hr>
    <label>Spacebar will </label><select id="sw" name="sw">
      <option value="shoot">shoot</option>
      <option value="jump">jump</option>
    </select>
    </select> 
    <br><hr>
    <input type="checkbox" name="playerGrav" id="playerGrav" checked="true"><label>Add Gravity by </label>
    <select name="playerGravSpeed" id="playerGravSpeed">
      <option value="300">300</option>
      <option value="400">400</option>
      <option value="500">500</option>
      <option value="600">600</option>
      <option value="700">700</option>
      <option value="800">800</option>
    </select>
    <br><hr>
   <label> SCORE Increases as it collides through</label><br><br>
    <div style="">
    <img class="img" src="" id="pv1" style="display:none ;height:50px;width: 50px" onclick="forScore('pv1')">&nbsp;&nbsp;
    <img class="img" src="" id="pi1" style="display:none; height:50px;width: 50px" onclick="forScore('pi1')">&nbsp;&nbsp;
  </div>
  </div>
  </div>
</div>

<div id="myModal3" class="modal">
  <!-- Modal content For Incentives-->
  <div class="modal-content">
    <span id="c2" class="close">&times;</span>
    <p>
      <img class="img" src="" id="i1"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <font size="15"><label>INCENTIVES</label></font>
    </p><hr/><br><div class="mc">
    <input type="checkbox" id="idfs" name="idfs" checked="true">Drop from Sky<br>
    <label>Appear in game when score is</label> <input type="text" id="iscore" name="iscore" value="0"><br>
    <label>No of incentives </label><select name="IncNos" id="IncNos">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option></select><label> at a distance of </label>
      <select name="IncDis" id="IncDis">
        <option value="60">60</option>
        <option value="70">70</option>
        <option value="80">80</option>
        <option value="90">90</option>
      </select><br>
     <label> Score increases by </label><select name="Sinc" id="Sinc">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option></select><br>
      <input type="checkbox" name="starGrav" id="starGrav" checked="true"><label>Add Gravity by </label>
    <select name="starGravSpeed" id="starGravSpeed">
      <option value="300">300</option>
      <option value="400">400</option>
      <option value="500">500</option>
      <option value="600">600</option>
      <option value="700">700</option>
      <option value="800">800</option>
    </select>
    <br><hr>
  </div>
</div>
</div>

<div id="myModal4" class="modal">
  <!-- Modal content For Villans/Obstacles/Objects-->
  <div class="modal-content">
    <span id="c2" class="close">&times;</span>
    <p>
      <img class="img" src="" id="v1"/>&nbsp;
      <font size="15"><label>VILLANS/ OBSTACLES/ OBJECT </label></font>
    </p><hr/><br><div class="mc">
      <input type="checkbox" name="vdfs" id="vdfs" checked="true"><label>Drop from Sky</label><br>
   <label> Appear in game when score is</label> <input type="text" name="vscore" id="vscore" value="0"><br>
   <label> No of Villans</label> <select name="vNos" id="vNos">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option></select> <label>at a distance of </label> 
      <select name="vDis" id="vDis">
        <option value="60">60</option>
        <option value="70">70</option>
        <option value="80">80</option>
        <option value="90">90</option>
      </select><br>
      <label>Score increases by </label><select name="Svil" id="Svil">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option></select><br>
       <input type="checkbox" name="villanGrav" id="villanGrav" checked="true"><label>Add Gravity by </label>
    <select name="villanGravSpeed" id="villanGravSpeed">
      <option value="300">300</option>
      <option value="400">400</option>
      <option value="500">500</option>
      <option value="600">600</option>
      <option value="700">700</option>
      <option value="800">800</option>
    </select>   
  </div>
</div>
</div>

<div id="myModal5" class="modal" style="padding-top: 15px;">
  <!-- Modal content For Villans/Obstacles/Objects-->
  <div class="modal-content  myModal5mc">
    <span id="c2" class="close">&times;</span>
    <p>&nbsp;<label>GAME</label></p><hr/><br><center>
    <div id="here">
  </div></center>
</div>
</div>

<!-- Written By Katyani Mehra and Mahdi Lalani-->
<script>
var modal2 = document.getElementById('myModal2');
var btn2 = document.getElementById("playerpic");
var span2 = document.getElementsByClassName("close")[1];
btn2.onclick = function() {
    modal2.style.display = "block";
}
span2.onclick = function() {
    modal2.style.display = "none";
}

var modal3 = document.getElementById('myModal3');
var btn3 = document.getElementById("ipic");
var span3 = document.getElementsByClassName("close")[2];
btn3.onclick = function() {
    modal3.style.display = "block";
}
span3.onclick = function() {
    modal3.style.display = "none";
}

var modal4 = document.getElementById('myModal4');
var btn4 = document.getElementById("vpic");
var span4 = document.getElementsByClassName("close")[3];
btn4.onclick = function() {
    modal4.style.display = "block";
}
span4.onclick = function() {
    modal4.style.display = "none";
}

document.onclick = function(event) {
  if (event.target == modal2||event.target == modal3||event.target == modal4){
    event.target.style.display = "none";
  }
}
</script>
</font>
</form>
</body>
</html>