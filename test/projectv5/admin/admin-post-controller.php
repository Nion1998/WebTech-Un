<?php include '../connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .nav{
        position: relative;
        height: 100%;
    }
    .apc-container{
        position: absolute;
        left: 65%;
        top: 45%;
        transform: translate(-65%,-50%);
        text-align: center;
        width: 60%;
        height: 50vh;
    }
    .apc-container h1{
        color: crimson;
        margin-bottom:2rem ;

    }

    th{
      width: 15%;
      height: 10%;
      padding: .3rem;
      font-size: 1.3rem;
    }

   a{
    color:white;
    text-decoration: none;
   }
  .btn-main{
    background: black;
    border: none;
    padding: 1rem 2rem;
    color:white;
    font-size: 1rem;
    margin-top:4rem ;
  }
  .btn-primary{
    background: black;
    border: none;
    padding: .5rem 1.2rem;
    color:white;
    font-size: 1rem;
  }
  .btn-danger{
    background: red;
    border: none;
    padding: .5rem 1.2rem;
    color:white;
    font-size: 1rem;
  }
  

</style>
<body>
    <div class="nav">
        <?php
           include("admin-nav.php");
         ?>
    </div>

<div class="apc-container">
     <h1>All Post</h1>
       <table class="table">
           <thead>
               <tr>
                 <th scope="col">Post</th>
                 <th scope="col">Description</th>
                 <th scope="col">Operations</th>
               </tr>
             </thead>
    <tbody>

      <?php

         $sql="Select * from `post`";
         $result=mysqli_query($con, $sql);
         if($result){
           while($row=mysqli_fetch_assoc($result)){
               $id=$row['id'];
               $description=$row['description'];

               echo '<tr>
               <th scope="row"> '.$id.' </th>
               <td>'.$description.'</td>

               <td>
                  <button class="btn-primary"><a href="admin-post-update.php?updateId= '.$id.'" class="text-light">Update</a></button>
                  <button class="btn-danger" ><a href="admin-post-delete.php?deleteId= '.$id.'" class="text-light">Delete</a></button>
                </td>
               </tr>';
           }
         }
      ?>
    </tbody>
    </table> 
    <button class="btn-main"> <a href="admin-post.php">Add New Post</a></button>

</div>
    
</body>
<script>


</script>
</html>