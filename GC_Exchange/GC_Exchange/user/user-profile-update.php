<?php
    include '../connect.php';

    $id = $_GET['updateId'];

$sql = "SELECT * FROM `users` where id = '$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$name=$row['username'];
$imge=$row['imge'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
      $imge = $_FILES['imge'];
	 $file_name=$imge['tmp_name'];
	$destinatiom = $imge['name'];
if(move_uploaded_file($file_name, "imge/".$destinatiom)){
    $sql = "update `users` set username='$name', imge='$destinatiom' where id= $id"; 
    $result = mysqli_query($con, $sql);
    if($result){
        echo "<script>alert('Update information Will be visible when you login again.')</script>";
        header('location:user-profile.php');
    }else{
        die(mysqli_error($con));
    }
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
    <?php include("user-nav.php"); ?>
    <div class="container">
    <div class="wcmsg">
      <h1>Update Your Profile Information</h1>
    </div>
      <form action="" method="post" enctype="multipart/form-data">
      <input type="text" name="name" placeholder="Enter New your User Name" value="<?php echo $name ?>";>
     <h5>Upload texts</h5>
     <input type="file" name="imge" id="imge" accept=".jpg,.jpeg,.png" class="form-control">
      <button type="submit" name="submit" class="btn btn-primary">Update</button>
      </form>
    </div>


</body>

</html>