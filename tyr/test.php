<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function()  {
            $('.auto').fadeIn(100)
            }, 3000);
});
/*        $(document).ready(function() {
   $('.auto').hide();
});

        function auto()
        {
   $('.auto').fadeIn(1500);
        }

setInterval (auto,50);
*/    </script>
</head>
<style type="text/css">
button {
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
}
</style>
<body bgcolor="green">
<?php
$qq="sss";

$p="1";
//$q= "18";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$l=$_POST['Like'];
$d=$_POST['Dislike'];

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn,"SELECT * FROM l_d WHERE id='$p' ");
    if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) {
          $likes = $row['likes'];
          $dislikes = $row['dislikes'];
    }
    }else{
    echo "error";
}

//echo "<div class='auto'>".$qq;
//echo "ses"."</div>";

if(isset($l))
{
    $sql = "UPDATE l_d
       SET likes='$likes'+1 WHERE id='$p' ";
    if (mysqli_query($conn, $sql)) 
    { 
//    echo "like = ".$likes;
//    echo "<br>";
//    echo "dislike = ".$dislikes;
    } else {
    echo "Error updating record: " . mysqli_error($conn);
    }
}

echo "<br>";
if(isset($d))
{
    $sql = "UPDATE l_d
       SET dislikes='$dislikes'+1 WHERE id='$p' ";
    if (mysqli_query($conn, $sql)) 
    {
//    echo "like = ".$likes;
  //  echo "<br>";
   // echo "dislike = ".$dislikes;
    } else {
    echo "Error updating record: " . mysqli_error($conn);
    }
}
if(isset($l))
{
    $likes =$likes+1; 
    echo "<div class='auto'>like = ".$likes;
    echo "<br>";
    echo "dislike = ".$dislikes."</div>";
} 
else if(isset($d))
{
    $dislikes =$dislikes+1; 
    echo "<div class='auto'>like = ".$likes;
    echo "<br>";
    echo "dislike = ".$dislikes."</div>";
}
else
{
    echo "<div class='auto'>like = ".$likes;
    echo "<br>";
    echo "dislike = ".$dislikes."</div>";
}

?>
  <form method="POST" id="Likeform">
        <button type="submit" name="Like" value="Like" style="width: 50px;height: 50px;">
        <img src="like.png" width="50" height="50" >
        </button>
        <input type="hidden" name="Likehide" value="Like">
    </form>
    <form method="POST" action="" id="Dislikeform">
        <button type="submit" name="Dislike" value="Dislike" style="width: 50px;height: 50px;">
        <img src="dislike.png" width="50" height="50">
        </button>
        <input type="hidden" name="Dislikehide" value="Dislike">
    </form>

</body>
</html>