<?php
if (isset($_POST['submit'])){

	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileTmpName1 = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];


	$fileExt =explode('.', $fileName);
	$fileActualExt =strtolower(end($fileExt));

	
	$allowed = array('jpg','jpeg','png','pdf' ) ;

	if(in_array($fileActualExt,$allowed))
	{
		if($fileError === 0){
			if($fileSize <100000000){			#1GB in KBs
				$fileNameNew = 'yes'.".".'jpg';
				$fileDestination ='images0/'.$fileNameNew ;
				
			
			  // echo '<img src="images/'.$image.'" height="250px" width="150px"/ >';
			    $fileNameNew1 = uniqid('',true).".".'jpg';
			 	$fileDestination1 ='images1/'.$fileNameNew1 ;
				move_uploaded_file($fileTmpName,$fileDestination);
				copy($fileDestination,$fileDestination1);				
			    
				
        
		header("Location:question.php");
							
			}else{

				echo "Your file is too big!" ;			
			}		
	
		}else{
			echo "There was an error uploading your file!" ;
		}
	
	}else {
		echo "You cannot upload files of this type!" ;
	}

}


?>