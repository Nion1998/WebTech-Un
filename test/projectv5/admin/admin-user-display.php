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
      <th scope="col">SL no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Operations</th>



    </tr>
  </thead>
  <tbody>

<?php

//$sql="SELECT * FROM `news` ORDER BY id DESC LIMIT 1";

$sql="SELECT * FROM `users` where usertype = 'user' ORDER BY id DESC";
$result=mysqli_query($con, $sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
      $name=$row['username'];
      $email=$row['email'];


      echo '<tr>
      <th scope="row"> '.$id.' </th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>
      <button class="btn btn-danger" ><a href="admin-user-delete.php?deleteId= '.$id.'" class="text-light">Delete</a></button>
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