<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="astyle.css">
</head>

<body>
      
  <div class="admin-container">
    <div class="nav-bar">
      <div class="logo">
        <a href="http://">GC Exchange</a>
      </div>
      <div class="nav-links">
        <ul>
          <li><a href="admin.php">Home</a></li>
          <li><a href="admin-service.php">Activity</a></li>
          <li><a href="admin-profile.php">Profile</a></li>
          <li><a href="../logout.php">Logout</a></li>
          <img src="./" alt="">
        </ul>
      </div>
    </div>
    <div class="content">
      <div class="title">
        <h1>Admin Dashboard</h1>
      </div>
      <div class="wcmsg">
      <h1>Welcome Your Account</h1>
          <?php
            session_start();
            echo $_SESSION["username"];
          ?>          
      </div>

      
    </div>
  </div>
  
</body>
</html>