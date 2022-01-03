
<?php

   if(isset($_POST['submit'])){
       if($_POST['nam2']==""){
            $error_msg['nam2']= " *Name is required";
       }
        $nam2=$_POST['nam2'];
       if(!preg_match("/^[a-zA-Z ]*$/",$nam2)){
             $error_msg['nam2']= " *Only letters allowed";
       }
       $email=$_POST['email'];
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $error_msg['email'] = " *Invalid email format";
       }
        $phone=$_POST['phone'];
       if (empty($phone)) {
           $error_msg['phone'] = " *Number is required";
       }
       

       if (empty($_POST["gender"])) { 
            $error_msg['gender'] = "Gender is required";}

       if (empty($_POST["checkbox"])) {
            $error_msg['checkbox'] = "*Checkbox is required";}
   }  
   
 ?>
 
 




<html>
<head>
<style>
.error{
   color:#060606 ;
   padding-top:0px;
   float:right;
   width:100%;
  }

</style>
</head>
<body >

<body>
  
   <nav class="navbar">
       <?php include('nav.php');?>
     </nav>
   <!--post-->
    <section class="post"id="post">
         <div class="max-width"> 
		     <h1>Singup Page</h1>
              <div class="home-content">
                  <fieldset>
		<table  >

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<tr>
   <td><h1>Name: </h1></td>
   <td><input type ="text" name="nam2"></td>
   <td>
      <?php
         if (isset($error_msg['nam2'])){
            echo "<div class='error'>".$error_msg['nam2']."</div>";
         }   
      ?><br>
</td>
</tr>

<tr>
   <td><h1>Email:</h1></td>
   <td><input type ="text" name="email"></td>
   <td>
      <?php
         if (isset($error_msg['email'])){
            echo "<div class='error'>".$error_msg['email']."</div>";
         }   
      ?><br>
</td>
</tr>

<tr>
   <td><h1>Phone:</h1></td>
   <td><input type ="text" name="phone"></td>
   <td>
      <?php
         if (isset($error_msg['phone'])){
            echo "<div class='error'>".$error_msg['phone']."</div>";
         }   
      ?><br>
</td>
</tr>



<tr>
   <td><h1>Gender:</h1></td>
   <td><input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?> 
value="female">Female 
<input type="radio" name="gender" 
<?php if (isset($gender) && $gender=="male") echo "checked";?> 
value="male">Male 
<input type="radio" name="gender" 
<?php if (isset($gender) && $gender=="other") echo "checked";?> 
value="other">Other <br></td>
   <td>
      <?php
         if (isset($error_msg['gender'])){
            echo "<div class='error'>".$error_msg['gender']."</div>";
         }   
      ?><br>
</td>
</tr>

<tr>
   <td><h5>Agree to Teams of Service:</h5></td>
   <td><input type="checkbox" name="checkbox" id="check"></td>
   <td>
      <?php
         if (isset($error_msg['checkbox'])){
            echo "<div class='error'>".$error_msg['checkbox']."</div>";
         }   
      ?><br>
</td>
</tr>
<tr>
   <td><h1>NID Copy:</h1></td>
   <td><form action="fileup.php"method="post"enctype="multipart/form-data">
      <p><input type="file"name="file1"></p>  
      <P><P><input type="submit"name="submit"value="Submit"></p></p>	  
	    
</form></td>
   <td>
      
</td>
</tr>



<tr>
   <td>>>>>>>>>>>>>>>>>>>>>></td>
   <td> </td>
    <td><<<<<<<<<<<<<<<<<<<<<</td>
</tr>

</form>
</table>


	</fieldset>
              </div>
         </div>
    </section>
 




<?php
     echo "Name:";
     echo $_POST["nam2"] ;
     echo "<br>";

     echo "Email:";
     echo $_POST["email"] ;
     echo "<br>";

     echo "Phone:";
     echo $_POST["phone"] ;
     echo "<br>";

     echo "Gender:";
     echo $_POST["gender"] ;
     echo "<br>";

     echo "checkbox:";
     echo $_POST["checkbox"] ;
     echo "<br>";

    

     

?>
</body>
</html>






