<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta currencyName="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta currencyName="description" content="">
    <meta currencyName="author" content="">
    <title>view Site</title>
  </head>
  <style>
    *{
      margin: 0;
      padding: 0;
      font-family: sans-serif;

    }
    .body{
      width: 100%;
      height: 100vh;
    }
    .container{
      width: 60%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto;
      text-align: center;
    }
    .currency-container{
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-direction: column;
      height: 60%;
    }
    .currency-container .big-title{
      font-size: 1.5rem;
      margin-bottom: .8rem;
      color: crimson;
    }
  
    th{
      padding: 2.2rem;
      font-size: 1.8rem;
      color: white;
    }

    tr{
      font-size: 1.5rem;
      background-color: crimson;
      color: white;
    }
    
    .btn{
      padding: 1rem;
      background-color: black;
      border-radius: 5px;
      text-decoration: none;
      color: white;
      font-size: 1.2rem;
 
    }
   .currency-container{
    position: absolute;
    left: 57.5%;
    top: 50%;
    transform: translate(-50%,-50%);
    width: 75%;
    text-align: center;
   }
 
 
  </style>

  <body>
  <?php
      include("admin-nav.php");
    ?>

    <main>
        <section class="container">
            <div class="currency-container">
              <h3 class="big-title">Currency Information </h3>
              <table class="currency-table"></table>
              <a class="btn" href="admin-currency-rate-controller.php">Add / Update Currency</a>
            </div> 
        </section>


    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="./admin-script.js"></script>


  </body>
</html>
