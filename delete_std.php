<?php
    include "connection.php";

    if($_GET['student_id']){
        
        $userId=$_GET['student_id'];
        $sql="DELETE FROM user WHERE id='$userId'";
        $result=mysqli_query($con,$sql);

        if($result){
            header("location:view_student.php");
        }
    }
?>