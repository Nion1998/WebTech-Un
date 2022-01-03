<?php
    //session_start();

    if(isset($_POST['submit'])){

        $username     = $_POST['name'];
        $email         = $_POST['email'];
        $subject         = $_POST['subject'];
        $msg     = $_POST['msg'];

        if($username != ""){
            if($subject != ""){
                if($email !=""){

                    $user = ['name'=> $username,'email'=>$email,'subject'=>$subject, 'msg'=>$msg ];

                    $con=mysqli_connect("localhost","root","","login");
                    $sql = "insert into usermsg values('', '{$user['name']}','{$user['email']}', '{$user['subject']}', '{$user['msg']}')";

                    $status=mysqli_query($con, $sql);

                    if($status){
                        header('Location:login.php');
                    }else{
                        echo "try again...";
                    }

                }else{
                    echo "invalid email....";
                }
            }else{
                echo "invalid password....";
            }
        }else{
            echo "invalid username....";
        }
    }
?>