
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

    .signup-container{
        width: 100%;
        height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .signup{
        width: 400px;
        height: 450px;
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
        width: 30%;
    }
    
   
</style>

<body>
<?php include("nav.php") ?>
<div class="signup-container">
<div class="signup">  
      <h1>Sign Up</h1>
        <form action="signup.inc.php" method="post">
            <input type="text" name="email" placeholder="Email" required>   
            <input type="text" name="user" placeholder="Username" required>
            <input type="password" name="pwd" placeholder="Password" required>
            <input type="password" name="pwdrepeat" placeholder="Repeat Password" required>
            <label for="file" id="selector"> Select Your NID Photocopy</label>
            <input type="file" name="" id="file" hidden>
            <input type="submit" name="submit" value="Sign Up" class="btn">
        </form>
    </div>

</div>

</body>
</html>