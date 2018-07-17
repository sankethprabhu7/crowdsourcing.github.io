 <?php
				    if(isset($_SESSION['u_id'])){
					 echo'<form action="includes/logout.inc.php" method ="POST">				
					      <button type="submit" name="submit">Logout</button> 
					   </form>';
					
					}
					?>