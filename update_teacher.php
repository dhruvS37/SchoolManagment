<?php
    session_start();

    if (!isset($_SESSION['username']) || $_SESSION['usertype']=="student") {
        header("location:login.php");
    }

    include "connection.php";

    if($_GET['teacher_id']){
        $id=$_GET["teacher_id"];
        $sql="SELECT * FROM teacher WHERE id='$id'";
        $resilt=mysqli_query($con,$sql);
        $info=$resilt->fetch_assoc();
    }

    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $description=$_POST['description'];

        $file=$_FILES['image']['name'];
        $dst="./image/".$file;
        $dst_db="image/".$file;
        move_uploaded_file($_FILES['image']['tmp_name'],$dst);

        $update="UPDATE teacheET name='$name', description='$description', image=$dst_db WHERE id = '$id'";
        $update_result=mysqli_query($con,$update);
        
        if($update_result){
            echo "<script type='text/javascript'>alert('Update Success');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .teacher-img{
            width: 74%;
            border-radius: 10px;
            height: 200px;
        }
    </style>
</head>
<body>

    <?php
        include "admin_sidebar.php";
    ?>
        <div class="content">
        <h1>Update Techer Data</h1>
                <br>
                <form action="#" method="POST" class="adm-form">
                    <input type="text" name="id" value="<?php echo "{$info['id']}"; ?>">

                    <div class="adm-input">
                        <label class="label-text">Name</label>
                        <input class = "input-design" type="text" name="name" value="<?php echo "{$info['name']}"; ?>">
                    </div>
                    <div class="adm-input">
                        <label class="label-text">About</label>
                        <input class = "input-textarea" type="textarea" name="description" value="<?php echo "{$info['description']}"; ?>">
                    </div>
                    <div class="adm-input">
                        <label class="label-text">Old Image</label>
                        <img class = "teacher-img"src="<?php echo "{$info['image']}";?>" alt="">
                    </div>
                    <div class="adm-input">
                        <label class="label-text">New Image</label>
                        <input style=" width: 80%;padding:10px 0;height: 40px;" type="file" name="image" >
                    </div>
                    <div class="input-btn">
                        <input class="btn btn-primary" id="submit" type="submit" value="UPDATE" name="update">
                    </div>
                </form>
        </div>
    </div>
</body>
</html>