<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";

    $db="student-managment";
    // Create a connection
    $con = mysqli_connect($servername,$username,$password,$db);

    if(!$con ){
        die("Sorry we are fail to connect".mysqli_connect_error());
    }else{
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $name=$_POST['username'];
            $pass=$_POST['password'];

            $query="select * from user where username='$name' AND password='$pass'";

            $result=mysqli_query($con,$query);
            $row=mysqli_fetch_array($result);

            if ($row["usertype"]=="student") {

                $_SESSION['username']=$name;
                $_SESSION['usertype']="student";
                header("location:studenthome.php");

            }elseif ($row["usertype"]=="admin") {

                $_SESSION['username']=$name;
                $_SESSION['usertype']="admin";
                header("location:adminhome.php");

            }else{

                $message= "Incorrect username or password";

                $_SESSION['errorStatus']=true;
                $_SESSION['loginMessage']=$message;
                header("location:login.php");
            }

        }
    }
?>