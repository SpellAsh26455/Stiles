<html>
<head>
	<title>Play/Develop</title>
<style type="text/css">
body
{
	width: 100%;
height: 100%;
min-height: 600px;
}
		.play
	{
		background-image: url('https://cdn.dribbble.com/users/263558/screenshots/1337078/dvsd.gif');
		background-size: cover;
		position: absolute;
		background-color: blue;
		height: 90.5%;
		margin-left: -0.6%;
		width: 51.9%;
		text-align: center;

	}
	.play h1
	{
		margin-top: 230px;
		font-size: 60px;
		color: #b3ffff;
	}
	.dep
	{
		background-image: url('https://lh3.googleusercontent.com/-bvQgMX6wevs/Vz289MmzdXI/AAAAAAAAkG8/qTf474Rn66gEN5rXTCVZwhyMlLRDR7BEQ/w600-h600/Dm-May-Gif-9c.gif');
		background-size: cover;
		position: absolute;
		background-color: red;
		margin-left: 51%;
		height: 90.5%;
		width: 48.10%;
		text-align: center;

	}
	.dep h1
	{
		color: #b3ffff;
		margin-top: 230px;
		font-size: 60px;
	}

	.dep:hover
	{
	  overflow:hidden;
  -webkit-animation: switch_d 5s infinite; /* Chrome, Safari, Opera */ 
    animation: switch_d 555s infinite;
   background-repeat:  no-repeat;
}
::-webkit-scrollbar { 
    display: none; 
}
</style>
</head>
<body>

<?php include 'head_test.php';?>
<a href="play.php"><div class="play">
<h1>PLAY</h1>
</div></a> 

<a href="choose.php"><div class="dep">
<h1>DEVELOP</h1>
</div></a>
</body>
</html>