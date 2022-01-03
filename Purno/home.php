
<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>Post page</title>
</head>
<style>

    *{

        margin: 0;

        padding: 0;

    }

    body{

        width: 100%;

        height: 100vh;

        background: indigo;
		

    }


    .signup-container{
	    
        background-color:indigo;
		
        width: 100%;

        height: auto;

        display: flex;

        align-items: center;

        justify-content: center;
		

    }
    .view{
         
		
		
		padding:1rem;
		
        width: 1100px;

        height: auto;
		
		border-radius:10px;

        margin: 0 auto;

        display: flex;

        align-items: center;

        justify-content: center;

        flex-direction: column;

        text-align: center;

        color:indigo;

        background-color: white;

        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;

    }

   table {
        border-collapse: collapse;
        width: 50%;
		
     }

    th, td {
        padding: 4px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
     input{

        width: 20%;

        padding: .5rem;  

        color:indigo;

        background:transparent;

        outline: none;

        border: 1px solid indigo;

        border-radius: 5px;

        margin:10px auto;

    }
  
    .btn{

        width: 40%;

        margin: 0 auto;

     

    }
    



 

</style>



<body>
    
<?php include("nav.php") ?>
<hr>

<div class="signup-container">
<div class="view"> 

 <input type="text" name="Search" placeholder="Search" class="form-control">
 <div class="btn">

                <input type="submit" name="signupBtn" value="Submite">

  </div>
  

 <table class="table">
       

            <?php
			   $conn = mysqli_connect("localhost","root","","purno");
               $sql="Select * from `rentpost`";
               $result=mysqli_query($conn, $sql);
                  
                     while($row=mysqli_fetch_array($result)){?>
                       
					    <tbody>
						   <tr>
						     <td rowspan="7"><img src ="imge/<?php echo $row['imge'];?>" width="250px " height="175px"></td>
							 <td><h3> <?php echo $row['discription'];?></h3></td>
							 <td></td>
						    </tr>
								  
								  
								  <tr>
								   <td> <h4>Size: <?php echo $row['sqfit'];?>sqfit</h4></td>
								   <td></td>
								   </tr>
								   
								  <tr>
								   <td><h4>Location: <?php echo $row['location'];?></h4></td>
								   <td></td>
								  </tr>
								   
								   <tr>
								   <td><h4>Room: <?php echo $row['room'];?></h4></td>
								   <td></td>
								   </tr>
								   
								   <tr>
								   <td><h4>Bath: <?php echo $row['bath'];?></h4></td>
								   <td></td>
								   </tr>
								    
								  <tr>
								   <td><h4>Available For: <?php echo $row['available'];?></h4></td>
								   <td></td>
								  </tr>
								  
								   <tr>
								   <td><h4>Price: <?php echo $row['Price'];?> TK</h4></td>
								   <td>
								  

								   
								   <div class="btn">

                                   <a href="home.php">Home</a>

                                    </div></td>
								   </tr>
								  
								  
								  
						
						
                        </tbody>
             <?php  }

            ?>
          
        </table>




</div>
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>

</html>