<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<style>
  a{
    text-decoration: none;
  }
  .btn-primary{
    background: indigo;
    border: none;
  }
  .btn-danger{
    border: none;
  }
</style>
<body>
<?php
      include("admin_nav.php");
 ?>
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="admin_add_currency_rate.php" class="text-light bg-red">Add Currency</a></button>

        
    <table class="table">
  <thead>
    <tr>
      <th scope="col">SL no</th>
      <th scope="col">Currency Name</th>
      <th scope="col">Currency Buy Price</th>
      <th scope="col">Currency Sell Price</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

<?php

$sql="Select * from `currency-crud`";
$result=mysqli_query($con, $sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
      $cname=$row['cname'];
      $bprice=$row['bprice'];
      $sprice=$row['sprice'];
     

      echo '<tr>
      <th scope="row"> '.$id.' </th>
      <td>'.$cname.'</td>
      <td>'.$bprice.'</td>
      <td>'.$sprice.'</td>
      <td>
         <button class="btn btn-primary"><a href="update.php?updateId= '.$id.'" class="text-light">Update</a></button>
         <button class="btn btn-danger" ><a href="delete.php?deleteId= '.$id.'" class="text-light">Delete</a></button>
      </td>
      </tr>';
  }
}

?>



  </tbody>
</table>
    



     </div>
    
</body>
</html>