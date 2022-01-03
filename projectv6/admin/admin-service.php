<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="astyle.css">
</head>
<style>
  .s-container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-30%, -50%);
    width: 70%;
    }
    .s-container .admin-activity{
    width: 100%;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: flex-start;
    gap: 3rem;
  }

  .admin-activity .card{
    background-color:white;
    border-radius: 5px;
    width: 250px;
    height: 250px;
    color: red;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    cursor: pointer;
  }
  .s-container .admin-activity .card a{
    color: crimson;
    text-decoration: none;
    font-size: 1.8rem;
  }

  .admin-activity .card:hover .fas,
  .admin-activity .card:hover .far,
  .admin-activity .card:hover .fab{
    transform: scale(1.5);
  }
 
  .admin-activity .card .fas,.fab,.far{
    font-size: 2rem;
    margin-bottom: .8rem;
    transition: .5s;
  }

</style>

<body>
    <?php
      include("admin-nav.php");
    ?>
 
   <div class="s-container">
      <div class="admin-activity">
        <div class="card">
            <i class="fas fa-users"></i>
            <a href="./admin-user-display.php">User</a>
          </div>
          <div class="card">
            <i class="fas fa-dollar-sign"></i>
            <a href="./admin-currency-rate.php">Currency</a>
          </div>
          <div class="card">
            <i class="fas fa-people-arrows"></i>
            <a href="./admin-transaction-controller.php">Transaction</a>
          </div>
          <div class="card">
            <i class="fab fa-snapchat-ghost"></i>
            <a href="./admin-post.php">Write Post</a>
          </div>
          <div class="card">
            <i class="fas fa-envelope"></i>
            <a href="./admin-message.php">Messages</a>
          </div>
          <div class="card">
            <i class="far fa-newspaper"></i>
            <a href="./admin-newsletter.php">Newsletter</a>
          </div>
        </div>
   </div>

  
</body>
</html>