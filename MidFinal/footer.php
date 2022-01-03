<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }

    .footer{
        width: 100%;
        height: 7vh;        
    }
    
    .footer p{
		
		
        text-align: center;
        color:#fff;
        width: 100%;
        height: 100%;
        background: indigo;
        font-size: 1.2rem;
        padding-top: 1rem;
            
    }
</style>
<body>
    <div class="footer">
    <p >2021 Currency Buy & Sell | &copy; CBS all the copyright reserved
	<?php
$cookie_name = "user";
$cookie_value = "John Doe";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
 date_default_timezone_set('Asia/Dhaka');
 echo '<br> User IP Address - '.$_SERVER['REMOTE_ADDR'];
 echo 'User Acces Time - '.$_SESSION['logged_in_datetime'] = date("d M Y H:i");
if(!isset($_COOKIE[$cookie_name])) {
    // echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    // echo " Cookie '" . $cookie_name . "' is set!<br>";
     //echo "Value is: " . $_COOKIE[$cookie_name];
}
?></p>
    </div>
</body>
</html>