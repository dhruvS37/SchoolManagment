<?php
session_start();
    include "connection.php";

    if($_POST['add-teacher']){
        $name=$_POST['name'];
        $description=$_POST['description'];

        $file=$_FILES['image']['name'];
        $dst="./image/".$file;
        $dst_db="image/".$file;
        move_uploaded_file($_FILES['image']['tmp_name'],$dst);

        $sql="INSERT INTO teacher(name,description,image) VALUES('$name','$description','$dst_db')";
        $result=mysqli_query($con,$sql);

        if($result){
            $_SESSION['add-teacher']="Teacher Added";
            header("location:add_teacher.php");
        }else{
            $_SESSION['add-teacher']="Fail to add Teacher";
            header("location:add_teacher.php");
        }
    }
?>