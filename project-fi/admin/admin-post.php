<?php
	if(isset($_POST['admin-post'])){
		$bpost = $_POST['buy'];
		session_start();
		$_SESSION['admin-post'] = $bpost;
		
    	header('location:../index.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .nav{
        position: relative;
        height: 100%;
    }
    .container{
        position: absolute;
        left: 65%;
        top: 50%;
        transform: translate(-65%,-50%);
        text-align: center;
        width: 50%;
        height: 50vh;
    }
    .container h1{
        color: crimson;
        margin-bottom:1rem ;
    }
    .container .post{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .container .post textarea{
        padding: 1rem 10rem 4rem 1rem;
        background: transparent;
        border: 1px solid crimson;
        margin-bottom: 3rem;
    }

    .container .post input{
        padding: .5rem 1rem;
        background-color: crimson;
        border: none;
        color: white;
        font-size: 1.2rem;
    }
    
   
 
</style>
<body>
    <div class="nav">
       <?php
        include("./admin-nav.php")
       ?>
    </div>  

    <div class="container">
        <h1>Create a Post</h1>
        <div class="text">
            <form method="post">
            <div class="post">
                <textarea name="buy" id="" cols="30" rows="10" placeholder="Write your post" ></textarea>
                <input type="submit" class="btn" name="admin-post" value="Post" >
             </div>
            </form>
        </div>
    </div>
 
</body>
</html>