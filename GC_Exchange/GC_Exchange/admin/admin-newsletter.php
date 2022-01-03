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

<style>
  .container{
    position: absolute;
    top: 15%;
    left: 60%;
    transform: translate(-40%, 0%);
    background-color: white;
    width: 60%;
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
      include("admin-nav.php");
?>

<div class="container">   
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL no</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>

<?php

//$sql="SELECT * FROM `news` ORDER BY id DESC LIMIT 1";

$sql="SELECT * FROM `news` ORDER BY id DESC";
$result=mysqli_query($con, $sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
      $email=$row['email'];

      echo '<tr>
      <th scope="row"> '.$id.' </th>
      <td>'.$email.'</td>
      </tr>';
  }
}

?>

  </tbody>
</table>
</div>
 
    
</body>
</html>