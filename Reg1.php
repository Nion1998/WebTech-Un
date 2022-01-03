<?php

   if(isset($_POST['submit'])){
       if($_POST['nam2']==""){
            $error_msg['nam2']= " *Name is required";
       }
}

?>

<html>
<body>
    <table>

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
            <td><input type="text" name="email1"></td>
            <td><h1>V2</h1></td>


        </tr>
        <tr>

            <td><h1>Phone:</h1></td>
            <td><input type="text" name="phone1"></td>
            <td><h1>V3</h1></td>


        </tr>
        <tr>

            <td><h1>Gender:</h1></td>
            <td><input type="radio" name="gender1"></td>
            <td><h1>V4</h1></td>


        </tr>
      <tr>
   <td>>>>>>>>>>>>>>>>>>>>>></td>
   <td><input type="submit" name="submit" value="Submit"></td>
    <td><<<<<<<<<<<<<<<<<<<<<</td>
</tr>






    </table>
</body>
</html>