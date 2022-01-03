<html lang="en">
<head>
    <title>Profile Page</title>
    <link rel="stylesheet"href="style.css">
</head>
<body>
  
   <nav class="navbar">
       <?php include('nav.php');?>
     </nav>
   <!--post-->
    <section class="post"id="post">
         <div class="max-width"> 
		     <h1>Your Profile</h1>
              <div class="home-content">
                  <?php
	session_start();
	if(isset($_SESSION['user'])){
		echo "User Name: ". $_SESSION['user']; 
	echo"<br>";
	echo "User Password: ". $_SESSION['pass']; 
	}
?>
              </div>
         </div>
    </section>