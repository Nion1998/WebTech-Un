<?php
include '../connect.php';
// insert data
if(isset($_POST['submit'])){
    $cname=$_POST['cname'];
    $bprice=$_POST['bprice'];
    $sprice=$_POST['sprice'];
  

    $sql = "insert into `currency-crud` (cname,bprice,sprice) values ('$cname', '$bprice', '$sprice')";
    $result = mysqli_query($con, $sql);
    if($result){
        //echo"Data Inserted Successfully";
        header('location:admin-currency-rate.php');

    }else{
        die(mysqli_error($con));
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <style>
  a{
    text-decoration: none;
    color:white;
  }
  .btn-p{
    background: black;
    border: none;
    padding: .3rem 1rem;
    color: white;
  }
  .btn-u{
    background: crimson;
    border: none;
    padding: .3rem 1rem;
  }
  .nav{
        position: relative;
        height: 100%;
    }
    .container{
        position: absolute;
        left: 63%;
        top: 50%;
        transform: translate(-63%,-50%);
        width: 40%;
        height: 50vh;
        text-align: center;
    }
    .container h2{
        color: crimson;
        margin-bottom:1rem ;
    } 

  </style>
  <body>
  <?php
      include("admin-nav.php");
  ?>
    <div class="container my-5 autocomplete = "off"">
      <h2>Add New Currency</h2>
      <form method="post">
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Enter Currency Name" name="cname" autocomplete ="off">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Enter Currency Buy Price" name="bprice" autocomplete="off">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Enter Currency Sell Price" name="sprice" autocomplete= "off">
          </div>

          <button type="submit" name="submit" class="btn-p">Submit</button>
          <button class="btn-u" ><a href="admin-currency-rate.php">Back</a></button>


        </form>
      </div>

  </body>
</html>