<?php
session_start();
session_destroy();
?>

<?php
include("nav.php");
header("location: login.php");
?>
