<?php
$dir="images1/";
$fileDestination ='incorrect/' ;
if($opendir =opendir($dir))
{
	while(($file= readdir($opendir))!== FALSE)
	{
		
      if($file!="."&&$file!="..")	
		rename($dir.$file,$fileDestination.$file) ;
		
	}
}

header("Location: index.php");
