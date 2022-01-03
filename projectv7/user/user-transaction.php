<?php
include '../connect.php';
session_start();
$name = $_SESSION["username"];

?>
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
    position: absolute;
    top: 15%;
    left: 58%;
    transform: translate(-50%, 0%);
    background-color: white;
    width: 70%;
    /*height: 85%;*/
    display: flex;
    align-items: top;
    justify-content: center;
  }
  table{
    width: 100%;
    height: 100%;
    text-align: center;
  }
  
  thead tr th{
    color: crimson;
    margin: 2rem 5rem 0rem 5rem;
    padding-bottom: 1rem;
  }

  tbody tr td{
    color: black;
    padding-bottom: 0.8rem;
  }

</style>
<body>
<?php
      include("user-nav.php");
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
    </tr>
  </thead>
  <tbody>

<?php

//$sql="SELECT * FROM `news` ORDER BY id DESC LIMIT 1";

$sql="SELECT * FROM `purchase` where name = '$name'  ORDER BY id DESC LIMIT 15";
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
      </tr>';
  }
}

?>

  </tbody>
</table>
</div>
 
    
</body>
</html>