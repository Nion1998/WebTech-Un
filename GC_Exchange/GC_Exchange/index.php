<?php
include 'connect.php';

if(isset($_POST['sendBtn'])){
    $name = $_POST['user'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $texts = $_POST['texts'];
 

    $insertQuery = "insert into messages(name,email,subject,texts) values('$name','$email','$subject','$texts')";
    $res = mysqli_query($con,$insertQuery);
    if($res){
        ?>
        <script>
            alert("Message is send Successfully");
        </script>
        <?php   
    }else{
        ?>
        <script>
            alert("Message is not send")
        </script>
        <?php
    }     
}
if(isset($_POST['subsBtn'])){
    $email = $_POST['email'];


    $insertQuery = "insert into news(email) values('$email')";
    $res = mysqli_query($con,$insertQuery);
    if($res){
        ?>
        <script>
            alert("Subscription Successfully");
        </script>
        <?php   
    }else{
        ?>
        <script>
            alert("Subscription not Successful")
        </script>
        <?php
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<style>

  /*------------------Home--------------*/
.home{
  width: 100%;
  height: 80vh;
  background-image:url("./img/bg.jpg");
  background-position: top;
  background-size: cover;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 1.3rem;
  text-align: center;
}
.caption{
  font-size: 1.8rem;
  color:white;
}

/*------------------Currency--------------*/

  .currency{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: column;
    position: relative;
    margin-top: 4rem;
    height: 52vh;
  }
  .currency .title::after{
    content: '';
    width: 8rem;
    height: .2rem;
    position: absolute;
    transform: translate(-50%, -50%);
    top: 30%;
    left: 50%;
    background: crimson;

  }

  th{
    padding:1rem 2rem;
    font-size: 1.5rem;
    color: white;
  }

  tr{
    font-size: 1.2rem;
    background-color: crimson;
    color: white;
    text-align: center;
  }

  .btnRead{
    background-color: black;
    padding: .5rem 1rem;
    color: white;
    text-align: center;
    margin: 1rem auto;
    border: none;

  }

    
  </style>


<body>

<div class="post-container">
       <?php
          $sql="Select * from `post`";
          $result=mysqli_query($con, $sql);
          if($result){
            while($row=mysqli_fetch_assoc($result)){
                $description=$row['description'];
                echo '<marquee width="100%" direction="left">
                  '.$description.'
                </marquee>';
            }
          }
       ?>
  </div>


  <section class="nav" id="nav"> 
    
      <div class="logo">
        <a href="index.php">GC Exchange</a>
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


<section class="home">
      <div class="slide">
          <div class="caption">
                <h1>Fastest Currency Exchange</h1>
                <p>Around 10+ Currency</p>
            </div>
        </div>
    
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
          <p>Bangladesh all online money maker welcome to CG Exchanger. </P>
          <div id="demo">
             <button class="btnRead" type="button" onclick="loadDoc()">Read More</button>
          </div>
             <script>
                  function loadDoc() {
                   const xhttp = new XMLHttpRequest();
                   xhttp.onload = function() {
                   document.getElementById("demo").innerHTML = this.responseText;
                   }
                   xhttp.open("GET", "ajax.txt");
                   xhttp.send();
                 }
               </script>
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
          <p>All types of currencies can be convert any time .</p>
          </div>
        </div>

        <div class="services-card">
          <div class="icon">
            <ion-icon name="globe-outline"></ion-icon>
          </div>
          <div class="heading">
          <p>We provide this service from all over the world.</p>
          </div>
        </div>

        <div class="services-card">
          <div class="icon">
            <ion-icon name="rocket-outline"></ion-icon>
          </div>
          <div class="heading">
          <p>We offer our currency exchange facility in the fastest time.</p>

          </div>
        </div>

        <div class="services-card">
          <div class="icon">
            <ion-icon name="finger-print-outline"></ion-icon>
          </div>
          <div class="heading">
          <p>In the future we will do our registration in biometric system.</p>
          </div>
        </div>

        <div class="services-card">
          <div class="icon">
            <ion-icon name="chatbox-ellipses-outline"></ion-icon>
          </div>
          <div class="heading">
          <p>We deliver our customer replies as soon as possible.</p>
          </div>
        </div>

        <div class="services-card">
          <div class="icon">
            <ion-icon name="settings-outline"></ion-icon>
          </div>
          <div class="heading">
            <p>We solve any kind of problem as soon as possible</p>
          </div>
        </div>

      </div>
    </section>

    <section class="currency" id="currency">
        <div class="title">
          <h1>currency_Rate</h1>
        </div> 
        <table class="currency-table"></table>
    </section>


    <section class="contact" id="contact">
      <div class="title">
        <h1>contact_Us</h1>
      </div>

      <div class="contact-row">

        <div class="contact-left-col">
          <h3>Get in touch</h3>
          <form class="message" method="post">
            <div class="contact-left-first-col">
              <input type="text" placeholder="Name" name="user" required>
              <input type="email" placeholder="Email" name="email" required>
            </div>
            <input type="text" placeholder="subject" name="subject" required>
            <textarea cols="30" rows="10" placeholder="write message" name="texts" required></textarea>
            <input type="submit" name="sendBtn" value="Send Message" class="btn">
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
            <form class="news" method="post">
              <h3>Subscribe us for Latest News</h3>
              <input type="email" name="email" placeholder="Enter email" required>
              <input type="submit" name="subsBtn" value="Subscribe" class="btn">
            </form>

          </div>
      
        </div>
      </div>
      <h5> <span>GC Exchange</span> | &copy; all right reserved 2021</h5>
    </section>

    <a class="bottomUp-btn" href="#nav"><i class="fas fa-arrow-up"></i></a>
    

  
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

     <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

     <script>
          var menu = document.querySelector(".menu");
          var nav = document.querySelector(".nav-list");
          menu.addEventListener("click", function(){
          nav.classList.toggle("active");
          })
     </script>
     <script>
       //Responsive nav
       

       //Scroll Effect
          var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 1500,
            speedAsDuration: true
          });

          //import data
          $(document).ready(function() {
             if (localStorage.getItem("currencyData") !== null) {
             storedUsers = JSON.parse(localStorage.getItem("currencyData"));
  
           if (localStorage.getItem("currencyData").length !== 2) {
              $('table').append('<tr><th>ID</th><th> Currency Name </th><th> Buy Price </th><th> Sell Price </th></tr>');
            }

           for(i=0; i<storedUsers.length; i++){
              var id = i+1;
              $('table').append('<tr><td>' + id + '</td><td>' + storedUsers[i]['currencyName'] + '</td><td>' + storedUsers[i]['buyPrice'] + '</td><td>' + storedUsers[i]['sellPrice'] + '</td></tr>');		
           }
         }
        });

     </script>
     <script>
        $(document).ready(function(){
         $("input").focus(function(){
            $(this).css("background-color", "black");
          });
          $("input").blur(function(){
            $(this).css("background-color", "red");
          });
        });
    </script>

</body>
</html>