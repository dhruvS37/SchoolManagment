<?php
    error_reporting(0);
    session_start();

    include "connection.php";

    if(isset($_POST['add-student'])){

        $username=$_POST['username'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $usertype="student";
        $password=$_POST['password'];
        
        $check="SELECT * FROM user WHERE username='$username'";
        $check_user=mysqli_query($con,$check);
        $row_count=mysqli_num_rows($check_user);

        if($row_count==1){
            $_SESSION['add-massage']="Username Already Exist.Try another one.";
            header("location:add_student.php");
        }else{
        
            $sql="INSERT INTO `user` (`username`, `phone`, `email`, `usertype`, `password`) VALUES ('$username', '$phone', '$email', '$usertype', '$password')";

            $result=mysqli_query($con,$sql);
            if($result){
                $_SESSION['add-massage']="Student Added";
                header("location:add_student.php");
            }else{
                $_SESSION['add-massage']="Fail to add Student";
                header("location:add_student.php");
            }
        }
    }
?>