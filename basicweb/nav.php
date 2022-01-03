<html lang="en">
<head>
    <title>Home Page</title>
    <link rel="stylesheet"href="style.css">
</head>
<body>
  
   <nav class="navbar">
        <div class="max-width">
		           <li> <?php
$cookie_name = "user";
$cookie_value = "John Doe";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
 date_default_timezone_set('Asia/Dhaka');
 echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'];
 echo '<br> User Acces Time - '.$_SESSION['logged_in_datetime'] = date("d M Y H:i").'<br>';

?></li>
		
             
              
          <ul class="manu">
        
			  <li><a href="home.php">Home</a></li>
              <li><a href="profile.php">Profile</a></li>
              <li><a  href="post.php">Post</a></li>
              <li><a  href="login.php">Login</a></li>
			  <li><a  href="form.php">Singup</a></li>
			 
			  <li style="float:right"><a href="logout.php">Logout</a></li>
			  
			 

          </ul>
        </div>
     </nav>
   