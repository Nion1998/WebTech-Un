<?php include '../connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<style>
  a{
    text-decoration: none;
    color: white;
  }
  .btn-u{
    background: crimson;
    border: none;
    padding: .3rem 1rem;
  }
  .btn-p{
    background: black;
    border: none;
    padding: .3rem 1rem;
  }
  .nav{
        position: relative;
        height: 100%;
    }
    .container{
        position: absolute;
        left: 65%;
        top: 50%;
        transform: translate(-65%,-50%);
        text-align: center;
        width: 50%;
        height: 50vh;
    }
    .container h2{
        color: crimson;
        margin-bottom:1rem ;
    } 
</style>
<body>
<?php
      include("./admin-nav.php");
?>


  <div class="container">
    <h2>Currency Controls</h2>
      <table class="table">
         <thead>
           <tr>
             <th scope="col">SL no</th>
             <th scope="col">Currency Name</th>
             <th scope="col">Currency Buy Price</th>
             <th scope="col">Currency Sell Price</th>
             <th scope="col">Operations</th>
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
                        <button class="btn-u"><a href="./admin-currency-update.php?updateId= '.$id.'" >Update</a></button>
                        <button class="btn-p " ><a href="./admin-currency-delete.php?deleteId= '.$id.'">Delete</a></button>
                        </td>
                       </tr>';
                       }
                   }

            ?>
          </tbody>
        </table>
        <button class="btn-p"> <a href="admin-add-currency-rate.php">Add Currency</a></button>
     </div>
    
</body>
</html>