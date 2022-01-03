<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form - PHP/MySQL Demo Code</title>
</head>

<body>
<fieldset>
<legend>Contact Form</legend>
<form name="frmContact" method="post" action="contact.php">
<p>
<label for="Name">Name </label>
<input type="text" name="txtName" id="txtName">
</p>
<p>
<label for="email">Email</label>
<input type="text" name="txtEmail" id="txtEmail">
</p>
<p>
<label for="id">id</label>
<input type="text" name="id" id="">
</p>
<p>

</body>
</html>



<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['id'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`fldName`, `fldEmail`, `flid`) VALUES ('0', '$txtName', '$txtEmail', '$id')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>