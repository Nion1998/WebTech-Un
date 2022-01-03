<?php
	if(isset($_POST['postt'])){
		$postt = $_POST['userp'];
		

		session_start();
		$_SESSION['postt'] = $postt;
		
		//echo "Hi ". $_SESSION['user'];
		header('location:home.php');// redirect to a page

	}
?>

<?php
$myfile = fopen("mycv.txt", "w") or die("Unable to open file!");
$txt = $_POST['userp'];;
fwrite($myfile, $txt);
$txt = " \n";
fwrite($myfile, $txt);
fclose($myfile);
?>


<html lang="en">
<head>
    <title>Post Page</title>
    <link rel="stylesheet"href="style.css">
</head>
<body>
  
   <nav class="navbar">
       <?php include('nav.php');?>
     </nav>
   <!--post-->
    <section class="post"id="post">
         <div class="max-width"> 
              <div class="home-content">
                  <form method="post" >
				   <textarea name="userp" id="comment" placeholder="Your Post"cols="35" rows="18"></textarea>
				   <br>
 	               <input type="submit" name="postt" value="Post Now">
                  </form>
              </div>
         </div>
    </section>

 
