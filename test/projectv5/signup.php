<?php 

include 'connect.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

$usenameErr = $emailErr = $passwordErr = $cpasswordErr ="";
$username = $email = $password = $cpassword  ="";

if( $_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["username"])){
        $usernameErr = "username is Required";
    }
    else{
        $username = ($_POST["username"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $usernameErr = "Only letters and white space allowed";
            }
    }

    if(empty ($_POST["email"])){
        $emailErr = "Email is Required";
    }
    else{
        $email = ($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            }
    }

    if(empty($_POST["password"])){
        $passwordErr = "Password is Required";
    }
    else{
        $password = ($_POST["Password"]);
    }

	if(empty($_POST["cpassword"])){
        $cpasswordErr = "Confirm Password is Required";
    }
    else{
        $cpassword = ($_POST["cpassword"]);
    }


  
}


if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($con, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($con, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lstyle.css">

	<title>Register Form - Pure Coding</title>
</head>
<style>
.error{
 color: crimson;
 font-size: .8rem;
 
}
</style>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" >
				<span class="error"> <?php echo $usernameErr; ?> </span>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" >
				<span class="error"> <?php echo $emailErr; ?> </span>

			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" >
				<span class="error"> <?php echo $passwordErr; ?> </span>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword">
				<span class="error"> <?php echo $cpasswordErr; ?> </span>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>