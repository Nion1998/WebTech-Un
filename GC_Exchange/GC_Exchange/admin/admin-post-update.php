<?php
include '../connect.php';

session_start();
$name = $_SESSION["username"];

$id = $_GET['updateId'];

$sql = "select * from post where id = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$description=$row['description'];

if(isset($_POST['updateBtn'])){
    $description=$_POST['post'];


    $sql = "update `post` set id='$id', description='$description', name='$name' where id=$id"; 
    $result = mysqli_query($con, $sql);
    if($result){
        header('location:admin-post-controller.php');

    }else{
        die(mysqli_error($con));
    }
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
    .p-container{
        position: absolute;
        left: 65%;
        top: 50%;
        transform: translate(-65%,-50%);
        text-align: center;
        width: 50%;
        height: 50vh;
    }
    .p-container h1{
        color: crimson;
        margin-bottom:1rem ;
    }
    .p-container .post{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .p-container .post textarea{
        padding: 1rem 10rem 4rem 1rem;
        background: transparent;
        border: 1px solid crimson;
        margin-bottom: 3rem;
        resize: none;
    }

    .p-container .post .controller input,
    .p-container .post .controller a{
        padding: .5rem 1rem;
        background-color: crimson;
        border: none;
        color: white;
        font-size: 1.2rem;
    }
    .controller{
        width: 50%;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        margin: 0 auto;
    }
    a{
        color: #000;
        text-decoration: none;
    }
    

   
 
</style>
<body>
    <div class="nav">
       <?php
        include("./admin-nav.php")
       ?>
    </div>  

    <div class="p-container">
        <h1>Create a Post</h1>
        <div class="text">
            <form method="post">
            <div class="post">
                <textarea name="post" cols="30" rows="10" placeholder="Write your post" ></textarea>
                <div class="controller">
                <input type="submit" name="updateBtn" value="Update Post" >

                </div>
             </div>
            </form>

        </div>
    </div>
 
</body>
</html>