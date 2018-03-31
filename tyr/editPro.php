<html>
<head>
  <title>Edit Profile</title>
<head>
    <link rel="stylesheet" type="text/css" href="editPro.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<script type="text/javascript">
            $(document).ready(function() {
   $('#bb').hide();
});

</script>
    <style type="text/css">
    body{
        height: 100%;
min-height: 600px;
width: 100%;
    }
input[type=file]
{
    position: absolute;
    top: 33%;
    left: 62%;
    color: grey;
}
 .sign input[type=email]
{
    color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 9px;
    width: 300px;
    height: 38px;
     border: 1px solid #c7d0d2;
    border-radius: 2px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;

}
.choo
{
        margin-top: -8%;
        margin-left: 65%;
        width: 80px;
        height: 20px;
        font-size: 13px;
        position: absolute;
        padding: 5px 15px;
        background:lightblue;
        color: white;
        border-radius: 8px;

}
.choo:hover
{
    background-color: green;
    border-radius: 15px;
}
::-webkit-scrollbar { 
    display: none; 
}
    </style>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
  <script type="text/javascript">

    $(document).ready(function() {
   $('.hi').hide();
});
/*
  $(document).ready(function(){
    $(".img_g").click(function(){
        $("#file").trigger('click');
        show();
    });
}); 
*/
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.img_g')
                    .attr('src', e.target.result)
                    .width(160)
                    .height(150);
                    
            };

            reader.readAsDataURL(input.files[0]);
        }
    }  //background-image: linear-gradient(to right, #868f96 0%, #596164 100%);


            $(document).ready(function() {
   $('.error').hide();
});

    function validateForm()
    {
        var a = document.getElementById('bb').value;
        if(a == "")
        {
            //alert("Please select the image");
        $(document).ready(function() {
   $('.error').fadeIn(500);
});
        $(document).ready(function() {
   $('.error').fadeOut(2000);
});

        }
    }//required

</script>

</head>

<body style="background-image: linear-gradient(to right, #d7d2cc 0%, #304352 100%);">
    
<?php include 'head_test.php';?>
<?php   


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dtest";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


@session_start();
$p= $_SESSION['aa'];

 echo "<div class='sign'>";
$result = mysqli_query($conn,"SELECT * FROM sign WHERE id='$p' ");
while($row = mysqli_fetch_array($result))
  {
 $pi =$row['image']; 
    if($row['image'] !== null)
    {
echo '<img src="'.$pi.' "class="img_g" " width="160" style="  ">';
    }
    if($row['image'] == null)
    {
echo "<img src='d.jpg' class='img_g' width='160'>";
    }

  }


   echo "<h2>Edit Profile</h2><br>
<form action='update.php' method='POST'>
    <label for='bb' class='choo' >Your Image</label>
    <input type='file' name='img' accept='.jpg, .jpeg, .png' onchange='readURL(this);' id='bb' required />
    <label>Username : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>  <input type='text' name='username' placeholder='username' required>
    <br>
    <label>Email : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>  <input type='email' name='email' placeholder='Email' required>
    <br>
   <label>Password : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label><input type='password' name='pass' placeholder='Password' required>

    <br>
    <input type='submit' name='submit' value='submit' onclick='validateForm();'>
</form>
</div> 
<h3 class='error' style='color: grey;'>Please Choose The Face Of Your Profile</h3> ";
?>
<?php include 'footer.php';?>
</body>
</html>