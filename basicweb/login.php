<?php
	session_start();
	if(isset($_SESSION['user'])){
			
		}
	if(isset($_POST['submit'])){
		$user = $_POST['user'];// save username to user variable 
		$pass = $_POST['pass'];// save password to pass variable 

		//session_start();
		$_SESSION['user'] = $user;
		$_SESSION['pass'] = $pass;

		//echo "Hi ". $_SESSION['user'];
		header('location:profile.php');
	}
?>
<!DOCTYPE html>

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
		     <h1>Login Page</h1>
              <div class="home-content">
                  <fieldset>
		<form method="post">
		<p><input type="text" name="user" placeholder="User name" required=""></p>
		<p><input type="password" name="pass" placeholder="Password" required=""></p>

		<input type="submit" name="submit" value="Login">
		
	</form>
	</fieldset>
              </div>
         </div>
    </section>
 



