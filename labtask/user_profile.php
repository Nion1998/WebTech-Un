
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
    <?php include("user_nav.php"); ?>

    <div class="content">
      <h1>Welcome Your Account</h1>

     <?php
       session_start();
       if(isset($_SESSION['username'])){
       echo "". $_SESSION['username'];
       }
     ?>
     <br/>
    <?php
        if(isset($_SESSION['bpost'])){
            echo "Purchase Amount: ". $_SESSION['bpost'] . "USD <br/>"; 
        }
        
        if(isset($_SESSION['spost'])){
            echo "Sell Amount: ". $_SESSION['spost']  . "USD"; 
        }
    ?>
    <?php
        
    ?>
         
     </div>

     
     
     <?php include("footer.php") ?>
</body>
</html>


