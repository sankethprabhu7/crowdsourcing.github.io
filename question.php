<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="style.css">	
</head>
<body>

 <header>

	       <nav>
	          <div class="main-wrapper" >
			      <ul>
				      <li><a href="index.php">HOME</a></li>
				  </ul>
			      <div class="nav-login">
				  <?php
				    if(isset($_SESSION['u_id'])){
					 echo'<form action="includes/logout.inc.php" method ="POST">				
					      <button type="submit" name="submit">Logout</button> 
					   </form>';
					
					}
					?>
						
				  </div>
	          </div>
		   </nav>
	   </header>
	   
	   <section class="main-container">
	       <div class="main-wrapper" >
		   <br>
		   <br>
		   
  <?php

   $dir="images1/";
   if($opendir =opendir($dir))
    {
	while(($file= readdir($opendir))!== FALSE)
	{
		//$fileDestination ='uploads/' ;
      if($file!="."&&$file!="..")		
			echo "<img src='$dir/$file'. width=200 height=200>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
	}
    }
	 echo" <br>";
		  echo" <br>";
	    echo "your uploaded image is :-";
		$emo= shell_exec("label_image.py");
	     echo "<strong><font size=10>".$emo."</font></strong>";
		 
	$_SESSION['send']=$emo;
?>             
				  <form class="signup-form" action="correct.php" method="POST"> 
				
				 <button   type="submit" ="submit">yes</button>
				 
				 </form>
	            <form class="signup-form" action="incorrect.php" method="POST"> 
				
				 <button type="submit" name="submit">No</button>
				 
				 </form>
		   </div>   
	   </section>
</form>
</body>
</html>
	   
	