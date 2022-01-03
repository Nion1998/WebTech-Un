<?php 

include 'connect.php';
$emailErr = $passwordErr ="";
$email = $password ="";

if( $_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty ($_POST["email"])){
        $emailErr = "Email is Required";
    }
    else{
        $email =($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            }
    }

    if(empty($_POST["password"])){
        $passwordErr = "Password can not be Blank";
    }
    else{
        $password = ($_POST["password"]);  
    }

}

session_start();

error_reporting(0);
if (isset($_SESSION['username'])) {
    header("Location: login.php");
}



if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($con, $sql);


	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);

		if($row["usertype"] == "user")
		{
			$_SESSION["username"] = $row['username'];
			header("location:./user/user.php");
		}
		else if($row["usertype"] == "admin")
		{
			$_SESSION["username"] = $row['username'];
			header("location:./admin/admin.php");
		}

	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lstyle.css">
	<title>Login Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form method="POST" class="login-email" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" require value="<?php echo $email; ?>">
				<span class="error"> <?php echo $emailErr; ?> </span>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" require value="<?php echo $_POST['password']; ?>">
				<span class="error"> <?php echo $passwordErr; ?> </span>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="signup-2.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>