<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    body{
        
        width: 100%;
        height: 100vh;
        overflow-x: hidden;
    }
    .content{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 100%;
        height: 87vh;
        text-align: center;
        color:indigo;
        font-size: 2rem;
        font-family: sans-serif;
    }

   

</style>
<body>
    <?php include("admin_nav.php"); ?>

    <div class="content">
      <h1>Admin Profile</h1>

     <?php

        echo "<br>Userame :&nbsp" . $_SESSION["username"];
        echo "<br>Name &nbsp &nbsp &nbsp:&nbsp" . $_SESSION['uname'];
        echo "<br>Email &nbsp &nbsp &nbsp:&nbsp" . $_SESSION['mail'];
        echo "<br>Phone  &nbsp &nbsp :&nbsp" . $_SESSION['phone'];

        ?>
         
     </div>

     
     
     <?php include("footer.php") ?>
</body>
</html>
