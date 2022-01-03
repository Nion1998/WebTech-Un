<?php
include 'connect.php';
// insert data
if(isset($_POST['submit'])){
    $cname=$_POST['cname'];
    $bprice=$_POST['bprice'];
    $sprice=$_POST['sprice'];
  

    $sql = "insert into `currency-crud` (cname,bprice,sprice) values ('$cname', '$bprice', '$sprice')";
    $result = mysqli_query($con, $sql);
    if($result){
        //echo"Data Inserted Successfully";
        header('location:admin_currency_rate.php');

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
  <body>
  <?php
      include("admin_nav.php");
    ?>
      <div class="container my-5 autocomplete = "off"">
      <form method="post">
          <div class="mb-3">
            <label for="currencyName" class="form-label">Currency Name</label>
            <input type="text" class="form-control" placeholder="Enter Currency Name" name="cname" autocomplete ="off">
          </div>
          <div class="mb-3">
            <label for="buyPrice" class="form-label">Currency Buy Price</label>
            <input type="text" class="form-control" placeholder="Enter Currency Buy Price" name="bprice" autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="sellPrice" class="form-label">Currency Sell Price</label>
            <input type="text" class="form-control" placeholder="Enter Currency Sell Price" name="sprice" autocomplete= "off">
          </div>

          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

    
  </body>
</html>