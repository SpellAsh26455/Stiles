<!DOCTYPE html>
<html>
<head>
  <title>Snake Template</title>
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
    var value="wfile.php?";
    var b="";
    var p="";
    var o="";
    var up="";
    var down="";
    var left="";
    var right="";
    var speed="";
    function setBackgroundForCanvas(name)
        {
            var c = document.getElementById("c1");
            c.style.backgroundImage ="url(assets/"+name+")"; 
            var bg="assets/"+name; 
            b="bg="+bg;
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
            p="player="+bg;
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
            o="obj="+bg;
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
        function gogo()
        {
/*          up= document.getElementById('up').value;
          up="up="+up;
          down= document.getElementById('down').value;
          down="down="+down;
          right= document.getElementById('right').value;
          right="right="+right;
          left= document.getElementById('left').value;
          left="left="+left;*/
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
            alert("You need to select an object");
          }
          }
          else
          {
            speed= document.getElementById('speed').value;
          speed="speed="+speed;
          var h=b+"&"+p+"&"+o+"&"+speed;
          var f1 = document.getElementById('f1');
          f1.action = value+h;
          }
          check();
          
      
//          alert(h);
          //window.location.href=h;
//window.location="http://www.tutorialspoint.com";
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
            <img src="assets/b1.jpg" alt="star" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('b1.jpg')">
            &nbsp;&nbsp;
            <img src="assets/b2.jpg" alt="Forest" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('b2.jpg')"><br>
            &nbsp;
            <img src="assets/b3.jpg" alt="Ice Forest" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('b3.jpg')">
            &nbsp;&nbsp;
            <img src="assets/b4.jpg" alt="Forest G" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('b4.jpg')">
        </div><hr/>
        <div>
            <br><label>Player:</label><br><br>&nbsp;
            <img src="assets/aa.png" alt="i1" style="width:20px;height: 20px" onclick="setCardPlayer('aa.png')">&nbsp;&nbsp;
            <img src="assets/snake.png" alt="i1" style="width:20px;height: 20px" onclick="setCardPlayer('snake.png')">&nbsp;&nbsp;
            <img src="assets/apple1.png" alt="i1" style="width:20px;height: 20px" onclick="setCardPlayer('apple1.png')">&nbsp;&nbsp;
            <img src="assets/apple2.png" alt="i1" style="width:20px;height: 20px" onclick="setCardPlayer('apple2.png')">&nbsp;&nbsp;
            <img src="assets/ball1.png" alt="i1" style="width:20px;height: 20px" onclick="setCardPlayer('ball1.png')">&nbsp;&nbsp;
        </div><hr/>
        
        <div >
            <br><label>Objects:</label><br><br>&nbsp;
            <img src="assets/apple.png" alt="i1" style="width:20px;height: 20px" onclick="setCardObject('apple.png')">&nbsp;&nbsp;
            <img src="assets/apple4.png" alt="i1" style="width:20px;height: 20px" onclick="setCardObject('apple4.png')">&nbsp;&nbsp;
            <img src="assets/apple3.png" alt="i1" style="width:20px;height: 20px" onclick="setCardObject('apple3.png')">&nbsp;&nbsp;
            <img src="assets/banana.png" alt="i1" style="width:20px;height: 20px" onclick="setCardObject('banana.png')">&nbsp;&nbsp;
           <img src="assets/apple5.png" alt="i1" style="width:20px;height: 20px" onclick="setCardObject('apple5.png')">&nbsp;&nbsp;
            <br><hr/>
        </div><br>
        <label>Select the interval where speed should increase</label>
         <select id="speed">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
    <option value="5">5</option>
 </select> <hr />
<label><br> <label>Enter Name Of Game</label> <input type="text" name="gameofname" required></label> 
    </div>
    <div class="fright">
      <div class="pl">
        <br><label>Canvas </label><br><br>
        <canvas id="c1" name="canvas1" class="display1"></canvas></div><br><hr/><br>
      <div class="card">Selected:<br>
        <div class="parentabc"><img id="playerpic" class="pic player" alt="playerpic"><button id="closePlayer" class="closeabc" onclick="goclose('closePlayer','playerpic')">X</button>&nbsp;&nbsp;</div>
        <div class="parentabc"><img id="objectpic" class="pic object" alt="objectpic"><button id="closeObject" class="closeabc" onclick="goclose('closeObject','objectpic')">X</button>&nbsp;&nbsp;</div>
        
      </div><br>
      <input type="submit" value="GO" onclick="gogo();">
    </div>
  </div><br>
  <div id="myModal1" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span id="c1" class="close">&times;</span>
    <p>
      <img src="" id="p1" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>
      <font size="26"><label>PLAYER</label></font></span>
    </p><br><hr/><br>
  </div>
  </div>
  </div>
</div>

<div id="myModal2" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span id="c2" class="close">&times;</span>
    <p>
      <img src="" id="o1"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <font size="26"><label>OBJECT</label></font>
  </div>
</div>
<!-- Written By Katyani Mehra and Mahdi Lalani-->
<script>


</script>
</font>
</form>
</body>
</html>