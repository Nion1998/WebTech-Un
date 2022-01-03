<?php 

include '../connect.php';

if(isset($_GET['deleteId'])){
    $id = $_GET['deleteId'];

    $sql = "delete from `post` where id = $id ";
    $result=mysqli_query($con, $sql);

    if($result){
        header('location:admin-post-controller.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

