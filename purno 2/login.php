<?php
include_once 'resource/session.php';
include_once 'resource/Database.php';
include_once 'resource/utilities.php';

if (isset($_POST['loginBtn'])) {
    //array to hold errors
    $form_errors = array();

    $required_fields = array('username', 'password');
    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

    if (empty($form_errors)) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sqlQuery = "SELECT * FROM users WHERE username = :username";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array(':username' => $username));

        while ($row = $statement->fetch()) {
            $id = $row['id'];
            $username = $row['username'];
            $hashed_password = $row['password'];
            $uname = $row['name'];
            $phn = $row['phone'];
            $mail = $row['email'];


            if ($_POST['password'] == $password) {
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                $_SESSION['uname'] = $uname;
                $_SESSION['mail'] = $mail;
                $_SESSION['phone'] = $phn;


                if ($row["usertype"] == "user") {
                    $_SESSION["username"] = $username;
                    header("location:user_home.php");
                } else if ($row["usertype"] == "admin") {
                    $_SESSION["username"] = $username;
                    header("location:admin_home.php");
                } else {
                    echo " username or password incorrect";
                }
            } else {
                $result = "<p style='padding: 20px; color: red; border: 1px solid gray;'> Invalid username or password</p>";
            }
        }
    } else {
        if (count($form_errors) == 1) {
            $result = "<p style='color: red;'>There was one error in the form </p>";
        } else {
            $result = "<p style='color: red;'>There were " . count($form_errors) . " error in the form </p>";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<style>
    * {

        margin: 0;

        padding: 0;

    }



    body {

        width: 100%;

        height: 100vh;

        background: indigo;

    }

    .login-container {

        width: 100%;

        height: 90vh;

        display: flex;

        align-items: center;

        justify-content: center;



    }

    .login {

        width: 350px;

        height: 400px;

        margin: 0 auto;

        display: flex;

        align-items: center;

        justify-content: center;

        flex-direction: column;

        text-align: center;

        color: indigo;

        background-color: white;

        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;

    }

    input {

        width: 60%;

        padding: 1rem;

        color: indigo;

        background: transparent;

        outline: none;

        border: 1px solid indigo;

        border-radius: 5px;

        margin: 10px auto;

    }

    .btn {

        width: 40%;

    }
</style>

<body>


    <?php include("nav.php") ?>

    <hr>

    <div class="login-container">
        <div class="login">
            <h1>Login</h1>
            <?php if (isset($result)) echo $result; ?>
            <?php if (!empty($form_errors)) echo show_errors($form_errors); ?>
            <form method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="password" placeholder="Password">
                <input type="submit" name="loginBtn" value="Login" class="btn">
                <p>Don't have a account? <a href="signup.php">Sign Up</a></p>
            </form>
        </div>
    </div>


</body>

</html>