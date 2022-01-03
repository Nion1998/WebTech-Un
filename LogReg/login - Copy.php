<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Login and Registration page</title>
</head>
<body>
	<div class="container">
		<div class="login-box">
			<div class="row">

		<div class="col-md-6 login-left">
			<h2>Login Here</h2>
			<form action="validation.php" method="post">
				<div class="form-group">
					<label>User Name</label>
					<input type="text" name="user" class="form-control" required="">	
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="password" class="form-control" required="">
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
				
			</form>
		</div>

		<div class="col-md-6 login-right">
			<h2>Register Here</h2>
			<form action="register.php" method="post">
				<div class="form-group">
					<label>User Name</label>
					<input type="text" name="user" class="form-control" required="">	
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="password" class="form-control" required="">
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
				
			</form>
			

			
		</div>
	</div>
		</div>
	</div>
	

</body>
</html>