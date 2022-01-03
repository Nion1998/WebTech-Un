<?php
	if(isset($_POST['bpost'])){
		$bpost = $_POST['buy'];
		session_start();
		$_SESSION['bpost'] = $bpost;
		
    	header('location:user_profile.php');
	}
?>

<?php
   if(isset($_POST['spost'])){
    $spost = $_POST['sell'];
    session_start();
    $_SESSION['spost'] = $spost;
    header('location:user_profile.php');
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
    .content{
        width: 100%;
        height: 87vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    form input{
        margin: 1rem;
        background: transparent;
        padding: 1rem;
        outline: none;
        border: 1px solid indigo;
    }

    .btn{
        width: 100px;
        height: 50px;
        background: indigo;
        color:#fff;
    }
</style>
<body>
<?php include('user_nav.php'); ?>

<div class="content">
<form method="post">
    <div class="buy">
    <input type="text" name="buy" placeholder="Enter Amount">
    <input type="submit" class="btn" name="bpost" value="Buy" >
    </div>
    
    <div class="sell">
    <input type="text" name="sell" placeholder="Enter Amount">
    <input type="submit" class="btn" name="spost" value="Sell" >
    </div>
</form>


</div>


<?php include('footer.php'); ?>



</body>
</html>