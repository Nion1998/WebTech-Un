
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

        height: 100vh;

        display: flex;

        align-items: center;

        justify-content: center;

    }

    .signup{
         
		
		
		padding:1rem;
		
        width: 660px;

        height: auto;
		
		border-radius:20px;

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

    input{

        width: 70%;

        padding: 1rem;  

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

<div class="signup">  
          <form method="POST" action="submit.php" enctype="multipart/form-data" >
          <h1>Home Information</h1>
          <input type="text" name="discription" placeholder="Discriptions" class="form-control">
            <input type="text" name="sqfit" placeholder="Sqfit" class="form-control">
			<input type="text" name="location" placeholder="Location" class="form-control">
			<input type="text" name="room" placeholder="How many room" class="form-control">
            <input type="text" name="bath" placeholder="Haw many bathroom" class="form-control">
			<input list="browsers" name="available" id="browser" placeholder="Available">
			<datalist id="browsers">
             <option value="January">
             <option value="February">
             <option value="March">
             <option value="April">
             <option value="May">
			 <option value="June">
			 <option value="July">
			 <option value="August">
			 <option value="September">
		     <option value="October">
		     <option value="November">
			 <option value="December">
            </datalist>
			<input type="text" name="price" placeholder="Price" class="form-control">
			<h5>Upload Image</h5>
            <input type="file" name="imge" id="imge" accept=".jpg,.jpeg,.png" class="form-control">
			<input list="browsers1" name="status" id="status" placeholder="Status">
			<datalist id="browsers1">
			 <option value="Sell">
             <option value="Rent">
			 </datalist>
			<input type="text" name="userid" placeholder="Userid" class="form-control">

           

            <div class="btn">

                <input type="submit" name="signupBtn" value="Submite">

            </div>

        </form>

    </div>



</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>

</html>