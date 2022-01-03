<?php
if (isset($_POST['submit'])) {
    header('location:user_currency.php');
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
    .content {
        width: 100%;
        height: 87vh;
        display: flex;
        color: indigo;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        font-size: 2rem;
    }

    .content h1 {
        margin-bottom: 2rem;
        font-size: 4rem;

    }

    form input {
        padding: .5rem;
        background-color: indigo;
        color: #fff;
        outline: none;
        box-shadow: none;
        border: none;


    }
</style>

<body>
    <?php include("user_nav.php") ?>

    <div class="content">
        <?php
        if (isset($_SESSION['user'])) {
            echo "" . $_SESSION['user'];
        }
        ?>
        <h1>Choose Services</h1>
        <form method="post">
            <input type="submit" name="submit" value="Buy Currency">
            <input type="submit" name="submit" value="Sell Currency">
        </form>


    </div>
    <?php include("footer.php") ?>
</body>

</html>