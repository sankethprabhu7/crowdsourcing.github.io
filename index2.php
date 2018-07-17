
	   <?php
	        include_once 'header.php';
	    ?>
	   
	   
	   
	   
	   <section class="main-container">
	       <div class="main-wrapper" >
		         <h2>Home</h2>
				 
		
				 
	 
			    <div class = "background-wrap" >
				 <video id="n" preload ="auto" autoplay="true" loop="loop" muted="mute" playbackrate=0.5> 
				 <source src="video.mp4" type="video/mp4"></video>
				 </div>
				 
				 
				 
				 <?php
				 if(isset($_SESSION['u_id'])){
					 echo "You are logged in!";
					 header("Location:index1.php");
					 
				 }
				 ?>
		   </div>   
		   		
	   </section>
	   
	   
	   <?php
	        include_once 'footer.php';
	    ?>
	   
	   
