<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="astyle.css">
</head>

<body>
  <div class="admin-container">
    <div class="nav-bar">
      <div class="logo">
        <a href="http://">GC Exchange</a>
      </div>
      <div class="nav-links active">
        <ul>
          <li><a href="admin.php">Home</a></li>
          <li><a href="admin-service.php">Activity</a></li>
          <li><a href="admin-profile.php">Profile</a></li>
          <li><a href="../logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
    <div class="content">
      <div class="title">
        <h1>Admin Dashboard</h1>
      </div>
        <div class="admin-activity">
          <div class="card">
            <i class="fas fa-users"></i>
            <a href="./admin-display-user.php">User</a>
          </div>
          <div class="card">
            <i class="fas fa-dollar-sign"></i>
            <a href="./admin-currency-rate.php">Currency</a>
          </div>
          <div class="card">
            <i class="fas fa-people-arrows"></i>
            <a href="http://">Transaction</a>
          </div>
          <div class="card">
            <i class="fab fa-snapchat-ghost"></i>
            <a href="./admin-post.php">Write Post</a>

          </div>

        </div>
      
    </div>
  </div>
  
</body>
</html>