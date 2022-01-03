<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<style>
  a{
    text-decoration: none;
  }

.content{
        width: 100%;
        height: 87vh;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
        font-size: 1.5rem;
        color:indigo
    }

    th{
      padding: 1rem;
    }

    tr{
      text-align: center;
      background-color: indigo;
      color: white;
    }


</style>
<body>
<?php include('nav.php'); ?>

  <div class="content">
    <table class="table">
       <thead>
         <tr>
           <th scope="col">SL no</th>
           <th scope="col">Currency Name</th>
           <th scope="col">Currency Buy Price</th>
           <th scope="col">Currency Sell Price</th>
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
                </td>
                </tr>';
            }
          }
       ?>
     </tbody>
   </table>   
</div>
  
<?php include('footer.php'); ?>

    
</body>
</html>































<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>







</body>
</html>