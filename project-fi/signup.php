<?php

include_once 'resource/Database.php';
include_once 'resource/utilities.php';
include_once 'resource/session.php';

//process the form
if (isset($_POST['signupBtn'])) {

    $form_errors = array();

    $required_fields = array('name', 'email', 'phone', 'username', 'password');

    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

    $fields_to_check_length = array('username' => 4, 'password' => 6, 'name' => 4, 'phone' => 10);

    $form_errors = array_merge($form_errors, check_min_length($fields_to_check_length));

    $form_errors = array_merge($form_errors, check_email($_POST));
/*
    if (getimagesize($_FILES['image']['tmp_name']) == FALSE) {
        echo "Please select an image";
    } else {
        $image = addslashes($_FILES['image']['tmp_name']);
        $name = addslashes($_FILES['image']['name']);
        $image = file_get_contents($image);
        $image = base64_encode($image);

        $qry = "INSERT INTO images (name, image) VALUES ('$name',$image)";
        $imageinsert = $db->prepare($qry);
        $imageinsert->execute(array(':name' => $name, ':image' => $image));
    }
*/

    if (empty($form_errors)) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //$hashed_password = password_hash($password, PASSWORD_DEFAULT);
        try {

            $sqlInsert = "INSERT INTO users (name, email, phone, username, password)
              VALUES (:name, :email, :phone, :username,:password)";

            $statement = $db->prepare($sqlInsert);

            $statement->execute(array(':name' => $name, ':email' => $email, ':phone' => $phone, ':username' => $username, ':password' => $password));

            if ($statement->rowCount() == 1) {
                //$result = "<p style='padding:20px; border: 1px solid gray; color: green;'> Registration Successful</p>";
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                header("location: login.php");
            }
        } catch (PDOException $ex) {
            $result = "<p style='padding:20px; border: 1px solid gray; color: red;'> An error occurred: " . $ex->getMessage() . "</p>";
        }
    } else {
        if (count($form_errors) == 1) {
            $result = "<p style='color: red;'> There was 1 error in the form<br>";
        } else {
            $result = "<p style='color: red;'> There were " . count($form_errors) . " errors in the form <br>";
        }
    }
}

?>
<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        width: 100%;
        height: 100vh;
    }



    .signup-container {
        width: 100%;
        height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .signup {
        padding: 1rem;
        width: 350px;
        height: auto;
        border-radius: 20px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        color: crimson;
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
    .signup a{
        text-decoration: none;
        font-size: 1.3rem;
        color:crimson;
    }

    input {
        width: 70%;
        padding: 1rem;
        color: crimson;
        background: transparent;
        outline: none;
        border: 1px solid crimson;
        border-radius: 5px;
        margin: 10px auto;
    }
    .btn {
        width: 40%;
        margin: 0 auto;
    }
    .btn:hover{
        background-color: crimson;
        color:white;
    }

    
</style>



<body>
    <div class="signup-container">

        <div class="signup">
            <a href="index.php"><i class="fas fa-home"></i></a>
            <h1>Sign Up</h1>
            <?php if (isset($result)) echo $result; ?>
            <?php if (!empty($form_errors)) echo show_errors($form_errors); ?>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


                <input type="text" name="name" placeholder="Name" class="form-control">
                <input type="text" name="email" placeholder="Email" class="form-control">
                <input type="text" name="phone" placeholder="Phone" class="form-control">
                <input type="text" name="username" placeholder="Username" class="form-control">
                <input type="password" name="password" placeholder="Password" class="form-control">
                <input type="file" name="image" value="Upload" accept=".jpg,.jpeg,.png">



                <div class="btn">

                    <input type="submit" name="signupBtn" value="Signup">

                </div>

                <p>All ready have a account? <a href="login.php">Login</a></p>

            </form>

        </div>



    </div>

















</body>

</html>