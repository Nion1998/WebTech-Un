<?php
    include '../connect.php';

    $id = $_GET['updateId'];

$sql = "SELECT * FROM `users` where id = '$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$name=$row['username'];
$email=$row['email'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];

    $sql = "update `users` set username='$name', email='$email' where id= $id"; 
    $result = mysqli_query($con, $sql);
    if($result){
        header('location:admin-profile.php');

    }else{
        die(mysqli_error($con));
    }
}

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
     body {
        width: 100%;
        height: 100vh;
        overflow-x: hidden;
    }
    .container{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-40%,-50%);
        width: 70%;
        height: 80%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2rem;
        flex-direction: column;
    }
    .container form{
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
        width: 50%;
        height: 40%;
    }
    .container input{
        padding: .6rem 1rem;
        border: 1px solid crimson;
        border-radius: 5px;

    }

    .container button{
      background-color: crimson;
      padding: .6rem 1rem;
      border: none;
      color: white;
    }


</style>

<body>
<?php
      include("admin-nav.php");
     ?>
    <div class="container">
    <div class="wcmsg">
      <h1>Update Your Profile Information</h1>
    </div>
      <form action="" method="post">
      <input type="text" name="name" placeholder="Enter New your User Name">
      <input type="text" name="email"  placeholder="Enter your new Email">
      <button type="submit" name="submit" class="btn btn-primary">Update</button>
      </form>
    </div>


</body>

</html>