<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "login";

session_start();

$data = mysqli_connect($host,$user,$password,$db);
if($data === false)
{
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username= $_POST["username"];
    $password= $_POST["password"];

    $sql = "select * from users where username = '".$username."' AND password = '".$password."'  ";
    $result = mysqli_query($data, $sql);

    $row = mysqli_fetch_array($result);

    if($row["usertype"] == "user")
    {
        $_SESSION["username"] = $username;
        header("location:user_home.php");
    }
    else if($row["usertype"] == "admin")
    {
        $_SESSION["username"] = $username;
        header("location:admin_home.php");
    }
    else{
        echo " username or password incorrect";
    }
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
    *{
        margin: 0;
        padding: 0;
    }

    body{
        width: 100%;
        height: 100vh;
        background: indigo;
    }
    .login-container{
        width: 100%;
        height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;

    }
    .login{
        width: 400px;
        height: 400px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        color:indigo;
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    
    input{
        display:block;
        width: 90%;
        padding: 1rem;  
        color:indigo; 
        background:transparent;
        outline: none;
        border: 1px solid indigo;
        border-radius: 5px;
        margin:10px auto;
    }

    .btn{
        width: 40%;
    }
    
   
</style>

<body>
<?php include("nav.php") ?>
<div class="login-container">
<div class="login">  
      <h1>Login</h1>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="Login" class="btn">
        </form>
    </div>
</div>

</body>
</html>