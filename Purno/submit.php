<?php
if(isset($_POST['signupBtn'])){
     $conn = mysqli_connect("localhost","root","","purno");
	 $discription = $_POST['discription'];
	 $sqfit = $_POST['sqfit'];
	 $location = $_POST['location'];
	 $room = $_POST['room'];
     $bath = $_POST['bath'];
     $available = $_POST['available'];
     $price = $_POST['price'];
     $imge = $_FILES['imge'];
	 $file_name=$imge['tmp_name'];
	 $destinatiom = $imge['name'];
     $status = $_POST['status'];
	 $userid = $_POST['userid'];
	 
	 if(move_uploaded_file($file_name, "imge/".$destinatiom)){
		
                    $user = ['discription'=> $discription,'sqfit'=>$sqfit,'location'=>$location, 'room'=>$room, 'bath'=>$bath, 'available'=>$available, 'price'=>$price, 'destinatiom'=>$destinatiom, 'status'=>$status, 'userid'=>$userid ];

                    $con=mysqli_connect("localhost","root","","purno");
                    $sql = "insert into rentpost values('', '{$user['discription']}','{$user['sqfit']}', '{$user['location']}', '{$user['room']}','{$user['bath']}', '{$user['available']}', '{$user['price']}', '{$user['destinatiom']}', '{$user['status']}', '{$user['userid']}')";

                    $status=mysqli_query($con, $sql);

                    if($status){
                        echo '<script>alert("Done")</script>';
                    }else{
                        echo '<script>alert("no Work")</script>';
                    }

          
		 
	 }
  
	
	
}













