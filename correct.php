<?php 
session_start();
?>
<?php
$emo=$_SESSION['send'];
echo $emo;
$dir="images1/";
$fileDestination ='correct/'.$emo;
$fileDestination=trim($fileDestination);
if($opendir =opendir($dir))
{
	while(($file= readdir($opendir))!== FALSE)
	{
		
      if($file!="."&&$file!="..")		
		rename($dir.$file,$fileDestination.'/'.$file) ;
		
	}
}

header("Location: index.php");



