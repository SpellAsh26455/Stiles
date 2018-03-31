<?php
$dir = "C:/xampp/htdocs/can/tyr";
$user = "user";
$path ="";
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
//     echo "filename:" . $file . "<br>";
    	if($file == "UserCustom.js")
    	{
    	echo	$path =$user;
    	}
    }
    closedir($dh);
  }
}
else
{
	echo "Not found";
}
echo $path;
?>