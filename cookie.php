<?php
$cookie_name = "user";
$cookie_value = "John Doe";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
 date_default_timezone_set('Asia/Dhaka');
 echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'];
 echo '<br> User Acces Time - '.$_SESSION['logged_in_datetime'] = date("d M Y H:i").'<br>';
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo " Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>