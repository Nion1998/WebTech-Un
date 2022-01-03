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
    .wcmsg{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
    }

</style>

<body>
    <?php include("user-nav.php"); ?>
      <div class="wcmsg">
      <h1>Welcome Your Account</h1>
          <?php
            session_start();
            echo $_SESSION["username"];
          ?>          
      </div>
    

</body>

</html>