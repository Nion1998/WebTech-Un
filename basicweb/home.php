
 
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
		     <h1>Your Post</h1>
              <div class="home-content">
                  <?php
		
              session_start();
	             if(isset($_SESSION['postt'])){
		           echo "<h3>". $_SESSION['postt']. "</h3>"; 
	             echo"<br>";
	              //echo "Posted by ". $_SESSION['user']; 
	           }
		
                  ?>
              </div>
			  

         </div>
		 <section class="post"id="post">
         <div class="max-width"> 
		     <h1>Notice</h1>
              <div class="home-content">
                  <?php
                  $file = fopen("245336089_2628680034095022_7319828807128855241_n.jpg","r");
                   echo fgets($file);
                   fclose($file);
                  ?>
              </div>
			  
         </div>
    </section>
 
 
 
 


 
 