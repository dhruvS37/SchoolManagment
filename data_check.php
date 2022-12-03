<?php
    session_start();

    $servername="localhost";
    $username="root";
    $password="";

    $db="student-managment";

    $con=mysqli_connect($servername,$username,$password,$db);

    if(!$con){
        die("Sorry we are fail to connect".mysqli_connect_error());
    }else{
        if (isset($_POST['apply'])) {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $massage=$_POST['massage'];
            
            $sql="INSERT INTO admission(name,email,phone,massage) VALUES ('$name','$email','$phone','$massage')";

            $result=mysqli_query($con,$sql);
            
            if($result){
                $_SESSION['massage']="Applied Successfully";
                header("location:index.php");
            }else{
                $_SESSION['massage']= "Apply Failed.";
                header("location:index.php");
            }
        }
    }
?>