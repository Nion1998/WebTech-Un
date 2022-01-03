
<?php
if(isset($_POST['submit'])){
	$file1name=$_FILES['file1']['name'];
	$file1type=$_FILES['file1']['type'];
	$file1size=$_FILES['file1']['size'];
	$file1tmpLoc=$_FILES['file1']['tmp_name'];
	$filetargetLoc="photos/";
	
	
  if (($file1size > 2097)){       
        echo 'File too large. File must be less than 2 megabytes '; 
    }
	
  if(!empty($file1name)){
	if($file1type == 'image/jpeg'|| $file1type == 'image/png'){
	move_uploaded_file($file1tmpLoc, $filetargetLoc.$file1name);
	echo"Successfully uploaded";
  }
  else{
	  echo"Select jpeg file";
  }
   
}
else{
	echo "Select a file";
	}
}
?>


<form action="fileup.php"method="post"enctype="multipart/form-data">
      <p><input type="file"name="file1"></p>   
	  <P><input type="submit"name="submit"value="Upload"></p>
</form>