<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


</head>
<style>
  marquee{
    background-color: rgba(0, 0, 0, 1);
    color:crimson;
    bottom: 0;
    left: 0;
    position: absolute;
    position: fixed;
    z-index: 10;
  }
</style>
<body>

  <?php
     session_start();
  ?>
   <marquee behavior="" direction="left">
     <?php
      if(isset($_SESSION['admin-post'])){
          echo "". $_SESSION['admin-post'].""; 
      }
    ?>
  </marquee>


  <section class="nav" id="nav"> 
    
      <div class="logo">
        <a href="http://">GC Exchange</a>
      </div>

      <div class="navigation">
        <div class="nav-list">
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#currency">Currency</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </div>
      </div>

      <div class="menu">
        <i class="fas fa-bars"></i>
      </div>
  </section>


  <script>
    var menu = document.querySelector(".menu");
    var nav = document.querySelector(".nav-list");
    menu.addEventListener("click", function(){
      nav.classList.toggle("active");
    })
  </script>



    <section class="header" id="home">

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/bg.jpg" class="d-block " alt="...">
            <div class="carousel-caption d-md-block">
              <h1>First slide label</h1>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/bg1.jpg" class="d-block " alt="...">
            <div class="carousel-caption  d-md-block">
              <h1>Second slide label</h1>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="img/bg2.jpg" class="d-block " alt="...">
            <div class="carousel-caption  d-md-block">
              <h1>Third slide label</h1>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      
      <a class="bottomUp-btn" href="#nav"><i class="fas fa-arrow-up"></i></a>
    

    </section>


    <section class="about" id="about">
      <div class="title">
        <h1>about_Us</h1>
      </div>
      <div class="about-row">
        <div class="about-left-col">
          <img src="./img/about.jpeg" alt="">
        </div>
        <div class="about-right-col">
          <h3>Hi there</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima quae nostrum incidunt
             facere deserunt tenetur rem dignissimos illo totam necessitatibus repellat, voluptate
             aliquid aperiam atque sint dicta quos aliquam ipsam! Aperiam aspernatur molestiae
             necessitatibus doloribus assumenda sequi atque odit odio?</p>
        </div>
      </div>

    </section>


    <section class="services" id="services">
      <div class="title">
        <h1>our_Services</h1>
      </div>

      <div class="services-row">

        <div class="services-card">
          <div class="icon">
            <ion-icon name="logo-usd"></ion-icon>
          </div>
          <div class="heading">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
               Unde deleniti provident impedit, voluptate ad doloribus.</p>
          </div>
        </div>

        <div class="services-card">
          <div class="icon">
            <ion-icon name="globe-outline"></ion-icon>
          </div>
          <div class="heading">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
               Unde deleniti provident impedit, voluptate ad doloribus.</p>
          </div>
        </div>

        <div class="services-card">
          <div class="icon">
            <ion-icon name="rocket-outline"></ion-icon>
          </div>
          <div class="heading">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
               Unde deleniti provident impedit, voluptate ad doloribus.</p>
          </div>
        </div>

        <div class="services-card">
          <div class="icon">
            <ion-icon name="finger-print-outline"></ion-icon>
          </div>
          <div class="heading">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
               Unde deleniti provident impedit, voluptate ad doloribus.</p>
          </div>
        </div>

        <div class="services-card">
          <div class="icon">
            <ion-icon name="chatbox-ellipses-outline"></ion-icon>
          </div>
          <div class="heading">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
               Unde deleniti provident impedit, voluptate ad doloribus.</p>
          </div>
        </div>

        <div class="services-card">
          <div class="icon">
            <ion-icon name="settings-outline"></ion-icon>
          </div>
          <div class="heading">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
               Unde deleniti provident impedit, voluptate ad doloribus.</p>
          </div>
        </div>

      </div>
    </section>

  <section class="currency-container" id="currency">
    <div class="title">
        <h1>currency_Rate</h1>
    </div>
 
    <div class="currency">
     <table class="table">
       <thead>
         <tr>
           <th scope="col">Currency Name</th>
           <th scope="col">Currency Buy Price</th>
           <th scope="col">Currency Sell Price</th>
         </tr>
       </thead>
       <tbody>
       <?php
          $sql="Select * from `currency-crud`";
          $result=mysqli_query($con, $sql);
          if($result){
            while($row=mysqli_fetch_assoc($result)){
                $cname=$row['cname'];
                $bprice=$row['bprice'];
                $sprice=$row['sprice'];
          
                echo '<tr>
                <td>'.$cname.'</td>
                <td>'.$bprice.'</td>
                <td>'.$sprice.'</td>
                </tr>';
            }
          }
       ?>
     </tbody>
    
     </table>   
   </div>


  </section>


    <section class="contact" id="contact">
      <div class="title">
        <h1>contact_Us</h1>
      </div>

      <div class="contact-row">
        <div class="contact-left-col">
          <h3>Get in touch</h3>
          <form action="" method="get">
            <div class="contact-left-first-col">
              <input type="text" placeholder="Name" required>
              <input type="email" placeholder="Email" required>
            </div>
            <input type="text" placeholder="subject" required>
            <textarea name="msg" id="" cols="30" rows="10" placeholder="write message"></textarea>
            <button class="btn"> Send Message</button>  
          </form>
        </div>
        <div class="contact-right-col">
          <div class="contact-right-sub-row">
            <div class="address">
              <h3>address</h3>
              <li> <ion-icon class="icon" name="location-outline"></ion-icon>Dhaka Bangladesh</li>
              <li> <ion-icon class="icon" name="mail-outline"></ion-icon>gcexchange@gmail.com</li>
              <li> <ion-icon class="icon" name="call-outline"></ion-icon>+880 134864865845</li> 
            </div>
            <div class="social">
                <h3>follow us on</h3>
                <div class="social-links">
                  <li><a href="http://"><ion-icon name="logo-facebook"></ion-icon></a></li>
                 <li><a href="http://"><ion-icon name="logo-instagram"></ion-icon></a></li>
                 <li><a href="http://"><ion-icon name="logo-twitter"></ion-icon></a></li>
                 <li><a href="http://"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                 <li><a href="http://"><ion-icon name="logo-youtube"></ion-icon></a></li>
                </div>
                 
            </div>
            <div class="news">
              <h3>Subscribe us for lattest news</h3>
              <input type="email" placeholder="email" required>
              <button class="btn">Subscribe</button>
            </div>

          </div>
      
        </div>
      </div>
      <h5> <span>GC Exchange</span> | &copy; all right reserved 2021</h5>
    </section>
    








     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>