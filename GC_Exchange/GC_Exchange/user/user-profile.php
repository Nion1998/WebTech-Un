<?php
    include '../connect.php';
    session_start();
    $name = $_SESSION['username'];

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
    body {
        width: 100%;
        height: 100vh;
        overflow-x: hidden;
    }
    .container{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-40%,-50%);
        width: 70%;
        height: 80%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2rem;
        flex-direction: column;
    }

    .container button{
      background-color: crimson;
      padding: .6rem 1rem;
      border: none;
    }
    .container button a{
      text-decoration: none;
      color: white;
    }


</style>

  <body>
    <?php include("user-nav.php"); ?>
      <div class="container">
          <div class="wcmsg">
             <h1>Welcome Your Profile</h1>
          </div>
        <?php

        $sql="Select * from `users` where username = '$name'";
        $result=mysqli_query($con, $sql);
        if($result){
          while($row=mysqli_fetch_assoc($result)){
              $id=$row['id'];
              $name=$row['username'];
              $email=$row['email'];
			  $imge=$row['imge'];
          
              echo '<h1> Name: '.$name.'</h1>
              <h1> Email '.$email.'</h1>
			  <img src ="imge/'.$imge.'" width="150px " height="175px">
			  
              <button class="btn btn-primary"><a href="user-profile-update.php?updateId= '.$id.'" class="text-light">Update</a></button>';
          }
        }
        
        ?>
                
     </div>

  </body>

</html>