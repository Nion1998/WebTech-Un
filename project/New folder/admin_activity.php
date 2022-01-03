<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .content{
        width: 100%;
        height: 87vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color:indigo;
        font-size: 2rem;
        font-family: sans-serif;
    }

    .card-container{
      width: 80%;
      height: 100%;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-evenly;

    }

    .card{
      width: 300px;
      height: 200px;
      background-color: indigo;
      color: white;
      font-size: 1.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }
</style>
<body>
    <?php
      include("admin_nav.php");
    ?>
    <div class="content">

    <div class="card-container">
       <div class="card">
         <a href="admin_display_user.php">See All User</a>
       </div>
       <div class="card">
         <a href="admin_display_user.php">See Transition</a>
       </div>
       <div class="card">
         <a href="admin_currency_rate.php">Set Currency Rate</a>
       </div>
    </div>   
    </div>

    <?php
      include("footer.php");
    ?>
</body>
</html>