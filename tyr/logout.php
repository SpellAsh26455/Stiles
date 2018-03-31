<?php
session_start();
unset($_SESSION["ww"]);  
unset($_SESSION['logged_in']);  
      session_destroy(); 
      // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
header("Cache-Control: no-cache, must-revalidate");
header("Location: login.php");

/*session_start();

         */clearstatcache();/*
if(session_destroy())
{
         header("Location: login.php");
}
else
{
	echo "string";
}*/
 
exit;

?>