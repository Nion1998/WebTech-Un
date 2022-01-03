<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <nav class="navbar">
       <?php include('nav.php');?>
     </nav>
      <div class="login-container">

            <div class="login" id="login">

                <div class="head">
                    <img src="img/undraw_Login_re_4vu2.svg" alt="">
                    <h1>welcome back</h1>
                    <span></span>
                    <span></span>
                </div>

                <div class="body">
                    <fieldset>
                        <legend>
                            <h3>Username</h3>
                        </legend>
                        <i class="fas fa-user"> </i> <input type="email" required></i>
                    </fieldset>

                    <fieldset>
                        <legend>
                            <h3>Password</h3>
                        </legend>
                        <i class="fas fa-lock"> </i> <input type="password" required></i>
                    </fieldset>

                    <a href="http://">Forget password?</a>

                    <input type="checkbox" name="checkbox" id="check">
                    <label for="check">Remember Me</label>

                </div>
               
                <div class="footer">
                    <button class="cta" >SIGN IN</button>
                    <button class="cta" onclick="document.getElementById('sign').style.display='block'" style="width:auto;">Sign Up</button>
                </div>
        </div>

        <div id="sign" class="sign">
  
            <div class="sign-card animate">
        
                  <div class="sign-close-icon">
                    <span onclick="document.getElementById('sign').style.display='none'" class="close">&times;</span>
                  </div>
              
                  <div class="sign-card-body">
                    <fieldset>
                          <legend class="legend-title">
                              Personal Information     
                         </legend> 
                         <div class="info">
                         <fieldset>
                            <legend>
                                First name
                            </legend>
                            <input  type="text" name="psw" required>
                        </fieldset>
                        <fieldset>
                            <legend>
                                Last Name
                            </legend>
                            <input type="text"  name="psw" required>
                        </fieldset>
            
                        <fieldset>
                            <legend>
                                Gender
                            </legend>
                            <input type="radio" name="psw" id="male" required>
                            <label for="male">Male</label>
                            <input type="radio" name="psw" id="female" required>
                            <label for="male">Female</label>
                        </fieldset>
        
                        <fieldset>
                            <legend>
                                NID Number
                            </legend>
                            <input  type="text" name="psw" required>
                        </fieldset>
        
                        <fieldset>
                            <legend>
                                Date of Birth
                            </legend>
                            <input  type="date" name="psw" required>
                        </fieldset>
                    </div>      
                    </fieldset>
        
                    <fieldset >
                        <legend class="legend-title">
                            Contact Information     
                       </legend> 
                       <div class="info">
                       <fieldset>
                          <legend>
                              Email
                          </legend>
                          <input  type="text" name="psw" required>
                      </fieldset>
                      <fieldset>
                          <legend>
                              Phone Number
                          </legend>
                          <input type="text"  name="psw" required>
                      </fieldset>
          
                      <fieldset>
                          <legend>
                              City
                          </legend>
                          <input type="text"  name="psw" required>
                      </fieldset>
        
                      <fieldset>
                        <legend>
                            Zip Code
                        </legend>
                        <input type="text"  name="psw" required>
                    </fieldset>
                     </div>
                        
                  </fieldset>
        
                  
                    <fieldset >
                          <legend class="legend-title">
                              Login Information     
                         </legend> 
                         <div class="info">
                         <fieldset>
                            <legend>
                                Email
                            </legend>
                            <input  type="text" name="psw" required>
                        </fieldset>
                        <fieldset>
                            <legend>
                                Password
                            </legend>
                            <input type="text"  name="psw" required>
                        </fieldset>
            
                        <fieldset>
                            <legend>
                                Confirm Password
                            </legend>
                            <input type="text"  name="psw" required>
                        </fieldset>
                       </div>
                          
                    </fieldset>
        
                    <label>
                      <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                    
                    <div class="bt">
                        <button class="cta" type="submit">Sign up</button>
                        <button type="button" onclick="document.getElementById('sign').style.display='none'" class="cta">Cancel</button>
                    </div>
                </div>
             </div> 
        </div>
     </div>
 
      <script>
        // Get the modal
        var sign = document.getElementById('sign');    
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == sign) {
                sign.style.display = "none";
            }
        }
        </script>
    
</body>
</html>