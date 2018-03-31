<html>
<head>
	<title></title>
<head>
    <link rel="stylesheet" type="text/css" href="editPro.css">  
    <style type="text/css">
input[type=file]
{
    position: absolute;
    top: 33%;
    left: 62%;
    color: grey;

}
 
    </style>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
  <script type="text/javascript">

 /*   $(document).ready(function() {
   $('#file').hide();
});

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
    }  
</script>
</head>
<body>
<?php include 'head.php';?>
<img src="http://www.3d-wallpapers.info/wp-content/uploads/Stunning-3d-lamborghini-Car-Wallpaper.jpg?189db0&189db0" height="558" width="1366" 
style="margin-left: -8px;">

<div class="sign">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Paris_-_Salon_de_la_moto_2011_-_BMW_-_S1000_RR_-_003.jpg/300px-Paris_-_Salon_de_la_moto_2011_-_BMW_-_S1000_RR_-_003.jpg" class="img_g">

    <h2>Edit Profile</h2>
<form action="">

    <input type='file' onchange="readURL(this);" />
    <label>Username : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>  <input type="text" name="username" placeholder="username">
    <br>
    <label>Email : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>  <input type="text" name="email" placeholder="Email">
    <br>
   <label>Password : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>    <input type="password" name="pass" placeholder="Password">
    <br>
   <label>Conform Password :</label><input type="password" name="pass" placeholder="Conform Password">
    <br>
    <input type="submit" name="submit" value="submit">
</form>
</div>


<?php include 'footer.php';?>
</body>
</html>