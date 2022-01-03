<?php
include '../connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
      include("admin-nav.php");
?>

<div class="container">   
<table class="table">
  <thead>
    <tr>
      <th scope="col">Transaction Id</th>
      <th scope="col">Amount</th>
      <th scope="col">Buy Currency</th>
      <th scope="col">Sell Currency</th>
      <th scope="col">Name</th>      
      <th scope="col">Account Number</th>
      <th scope="col">Purchase Date</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

<?php

//$sql="SELECT * FROM `news` ORDER BY id DESC LIMIT 1";

$sql="SELECT * FROM `purchase`  ORDER BY id DESC";
$result=mysqli_query($con, $sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
      $amount=$row['amount'];
      $buy=$row['buy'];
      $sell=$row['sell'];
      $name=$row['name'];
      $accno=$row['accno'];
      $date=$row['date'];


      echo '<tr>
      <th scope="row"> '.$id.' </th>
      <td>'.$amount.'</td>
      <td>'.$buy.'</td>     
      <td>'.$sell.'</td>
      <td>'.$name.'</td>
      <td>'.$accno.'</td>      
      <td>'.$date.'</td>
      <td>
      <button class="btn btn-danger" ><a href="admin-transaction-view.php?viewId= '.$id.'" class="text-light">View</a></button>
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