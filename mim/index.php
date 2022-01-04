<?php
   

    if(isset($_POST['submit'])){

        $nid= $_POST['nid'];
        $address= $_POST['address'];
        $name= $_POST['name'];
        $age= $_POST['age'];
		$date_of_birth= $_POST['date_of_birth'];
		$occupation= $_POST['occupation'];
		$reg_date= $_POST['reg_date'];
		$center_no= $_POST['center_no'];
		$password= $_POST['password'];
		

        if($nid != ""){
            if($name != ""){
                if($address !=""){

                    $user = ['nid'=> $nid,'address'=>$address,'name'=>$name, 'age'=>$age, 'date_of_birth'=>$date_of_birth, 'occupation'=>$occupation, 'reg_date'=>$reg_date, 'center_no'=>$center_no, 'password'=>$password ];

                    $con=mysqli_connect("localhost","root","","mim");
                    $sql = "insert into applicant values('{$user['nid']}','{$user['address']}', '{$user['name']}', '{$user['age']}', '{$user['date_of_birth']}', '{$user['occupation']}', '{$user['reg_date']}', '{$user['center_no']}', '{$user['password']}')";

                    $status=mysqli_query($con, $sql);

                    if($status){
                        echo '<script>alert("Massege Send Successful")</script>';
                    }else{
                       echo '<script>alert(""Massege Send Not Successful")</script>';
                    }

                }else{
                    
					echo '<script>alert("name  is required")</script>';
                }
            }else{
                
				echo '<script>alert("address is required")</script>';
            }
        }else{
           echo '<script>alert("nid is required")</script>';
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta nid="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="">
        
        <input type="text" name="nid" placeholder="nid">
        <input type="text" name="address" placeholder="address">
        <input type="text" name="name" placeholder="name">
		<input type="text" name="age" placeholder="age">
		<input type="text" name="date_of_birth" placeholder="date_of_birth">
		<input type="text" name="occupation" placeholder="occupation">
		<input type="text" name="reg_date" placeholder="reg_date">
		<input type="text" name="center_no " placeholder="center_no ">
		<input type="password" name="password" placeholder="password">
        
        <P>
        <P><input type="submit" name="submit" value="Submit"></p>
        </p>
    </form>


</body>

</html>