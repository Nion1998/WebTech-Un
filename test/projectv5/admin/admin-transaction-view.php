<?php
include '../connect.php';

$id = $_GET['viewId'];


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
<?php

//$sql="SELECT * FROM `news` ORDER BY id DESC LIMIT 1";

$sql="SELECT * FROM `purchase`  where id = '$id'";
$result=mysqli_query($con, $sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
      $amount=$row['amount'];
      $buy=$row['buy'];
      $sell=$row['sell'];
      $name=$row['name'];
      $email=$row['email'];
      $passport=$row['passport'];
      $accno=$row['accno'];
      $date=$row['date'];


      echo '<h1>Transaction History</h1>
      <h3> Purchase Amount: '.$amount.'</h3>
      <h3>Buy Currency: '.$buy.'</h3>     
      <h3>Sell Currency: '.$sell.'</h3>
      <h3>Purchaser Name: '.$name.'</h3>
      <h3>Purchaser Email: '.$email.'</h3>
      <h3>Passport: '.$passport.'</h3>
      <h3>Account Number: '.$accno.'</h3>      
      <h3>Transaction Date: '.$date.'</h3>';

  }
}

?>

  </tbody>
</table>
</div>
 
    
</body>
</html>