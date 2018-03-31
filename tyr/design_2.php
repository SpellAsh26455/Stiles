<!DOCTYPE html>
<html>
<head>
  <title>Shooting Stars Template</title>
 
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
.picbullet{
  display: none;
}
.picenemybullet{
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
    var value="wfile_2.php?";
    var b="";
    var p="";
    var o="";
    var soa="";
    var ebs="";
    var lives="";
    var enemybullet="";
    var bullet="";
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
        function setCardBullet(cardname)
        {
            document.getElementById("bulletpic").src="assets/"+cardname;
            document.getElementById("bullet").src="assets/"+cardname;
            var div = document.getElementById("bulletpic");
            div.style.display = "inline-block";
            var div1 = document.getElementById("closeBullet");
            div1.style.display = "inline-block";
            var bg="assets/"+cardname; 
            bullet="bullet="+bg;
        }
       function setCardEnemyBullet(cardname)
        {
            document.getElementById("enemybulletpic").src="assets/"+cardname;
            document.getElementById("enemybullet").src="assets/"+cardname;
            var div = document.getElementById("enemybulletpic");
            div.style.display = "inline-block";
            var div1 = document.getElementById("closeEnemyBullet");
            div1.style.display = "inline-block";
            var bg="assets/"+cardname; 
            enemybullet="enemybullet="+bg;
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
          if(b==""||p==""||o==""||bullet==""||enemybullet=="")
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
          if(bullet=="")
          {
            alert("You need to select a bullet");
          }
          if(enemybullet=="")
          {
            alert("You need to select an enemybullet");
          }
          }
          else
          {
          soa= document.getElementById('soa').value;
          soa="soa="+soa;
          ebs= document.getElementById('ebs').value;
          ebs="ebs="+ebs;

          lives= document.getElementById('lives').value;
          lives="lives="+lives;
          var h=b+"&"+p+"&"+o+"&"+bullet+"&"+enemybullet+"&"+soa+"&"+ebs+"&"+lives;
          var f1 = document.getElementById('f1');
          f1.action = value+h;
        }
      
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
            <img src="assets/blayer2.jpg" alt="star" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('blayer2.jpg')">
            &nbsp;&nbsp;
            <img src="assets/starfield.png" alt="Forest" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('starfield.png')"><br>
            &nbsp;
            <img src="assets/sky.png" alt="Ice Forest" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('sky.png')">
            &nbsp;&nbsp;
            <img src="assets/wall.png" alt="Forest G" style="width:130px;height: 70px" onclick="setBackgroundForCanvas('wall.png')">
        </div><hr/>
        <div>
            <br><label>Player:</label><br><br>&nbsp;
            <img src="assets/player(1).png" alt="i1" style="width:50px;height: 50px" onclick="setCardPlayer('player(1).png')">&nbsp;&nbsp;
            <img src="assets/player(2).png" alt="i1" style="width:50px;height: 50px" onclick="setCardPlayer('player(2).png')">
            &nbsp;&nbsp;
        </div><hr/>
        
        <div >
            <br><label>Enemy</label><br><br>&nbsp;
            <img src="assets/enemy.png" alt="i1" style="width:50px;height: 50px" onclick="setCardObject('enemy.png')">&nbsp;&nbsp;
            <img src="assets/invader.png" alt="i1" style="width:50px;height: 50px" onclick="setCardObject('invader.png')">
            &nbsp;&nbsp;
            <img src="assets/Phantom2.png" alt="i1" style="width:50px;height: 50px" onclick="setCardObject('Phantom2.png')">
            &nbsp;&nbsp;
            <br><hr/>
        </div>
        <div>
            <br><label>Bullets:</label><br><br>&nbsp;
            <img src="assets/ball3.png" alt="Forest" style="width:50px;height: 50px" onclick="setCardBullet('ball3.png')">
            &nbsp;&nbsp;
            <img src="assets/bullet1.png" alt="Forest" style="width:50px;height: 50px" onclick="setCardBullet('bullet1.png')"><br><hr/>
        </div>
        <div>
            <br><label>Enemy Bullets:</label><br><br>&nbsp;
            <img src="assets/enemy-bullet.png" alt="Forest" style="width:50px;height: 50px" onclick="setCardEnemyBullet('enemy-bullet.png')">
            &nbsp;&nbsp;
            <img src="assets/ball1.png" alt="Forest" style="width:50px;height: 50px" onclick="setCardEnemyBullet('ball1.png')">&nbsp;&nbsp;
            <img src="assets/ball2.png" alt="Forest" style="width:50px;height: 50px" onclick="setCardEnemyBullet('ball2.png')">&nbsp;&nbsp;
            <br><hr/>
        </div>

        <label>Number Of Lives </label>
         <select id="lives">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
 </select>
             <br><hr/>
<label>Speed of aliens</label>
 <select id="soa">
  <option value="500">500</option>
  <option value="1000">1000</option>
  <option value="1500">1500</option>
  <option value="2000">2000</option>

 </select>

 <br><hr/>
<label>Enemy bullet speed</label>
 <select id="ebs">
  <option value="500">500</option>
  <option value="1000">1000</option>
  <option value="1500">1500</option>
  <option value="2000">2000</option>
 </select>
 <br><hr/>
 
<label> <label>Enter Name Of Game </label><input type="text" name="gameofname" required></label> 
    </div>
    <div class="fright"><br>Canvas <br><br>
      <div class="pl"><canvas id="c1" name="canvas1" class="display1"></canvas></div><br><hr/><br>
      <div class="card">Selected:<br>
        <div class="parentabc"><img id="playerpic" class="pic player" alt="playerpic"><button id="closePlayer" class="closeabc" onclick="goclose('closePlayer','playerpic')">X</button>&nbsp;&nbsp;</div>
        <div class="parentabc"><img id="objectpic" class="pic object" alt="objectpic"><button id="closeObject" class="closeabc" onclick="goclose('closeObject','objectpic')">X</button>&nbsp;&nbsp;</div>
        <div class="parentabc"><img id="bulletpic" class="picbullet"><button id="closeBullet" class="closeabc" onclick="goclose('closeBullet','bulletpic')">X</button>&nbsp;&nbsp;</div>
        <div class="parentabc"><img id="enemybulletpic" class="picenemybullet"><button id="closeEnemyBullet" class="closeabc" onclick="goclose('closeEnemyBullet','enemybulletpic')">X</button>&nbsp;&nbsp;</div>
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
      <font size="26">OBJECT</font>
  </div>
</div>

<div id="myModal3" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span id="c3" class="close">&times;</span>
    <p>
      <img src="" id="bullet"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <font size="26">OBJECT</font>
  </div>
</div>

<div id="myModal4" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span id="c4" class="close">&times;</span>
    <p>
      <img src="" id="enemybullet"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <font size="26">OBJECT</font>
  </div>
</div>

<!-- Written By Katyani Mehra and Mahdi Lalani-->
<script>


</script>
</font>
</form>
</body>
</html>