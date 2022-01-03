<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
    left: 55%;
    top: 50%;
    transform: translate(-42%,-50%);
    position: absolute;
    height:10rem;
    font-size: 2rem;
    color: crimson;
    text-align: center;

  }
  .large-title{
    font-size: 4.5rem;
    margin-bottom: 1rem;
    color: black;
  }

</style>

<body>
    <?php include("user-nav.php"); ?>
    <div class="container">
      <h1 class="large-title">Welcome Your Account</h1>
      <?php
        session_start();
        echo $_SESSION["username"];
      ?>  
    </div>
   
    

</body>

</html>