<?php
    include "connection.php";

    if($_GET['teacher_id']){
        
        $Id=$_GET['teacher_id'];
        $sql="DELETE FROM teacher WHERE id='$Id'";
        $result=mysqli_query($con,$sql);

        if($result){
            header("location:view_teacher.php");
        }
    }
?>