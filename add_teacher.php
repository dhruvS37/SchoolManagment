<?php
    session_start();
    error_reporting(0);

    if (!isset($_SESSION['username']) || $_SESSION['usertype']=="student") {
        header("location:login.php");
    }
    if($_SESSION['add-teacher']){
        $massage=$_SESSION['add-teacher'];
        echo "<script type='text/javascript'>alert('$massage');</script>";
    }
    unset($_SESSION['add-teacher']);
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
</head>
<body>

    <?php
        include "admin_sidebar.php";
    ?>
        <div class="content">
        <div class="form-section">
                <h1>Add Teachers</h1>
                <br>
                <form action="add_teacher_check.php" method="POST" enctype="multipart/form-data" class="adm-form">
                    <div class="adm-input">
                        <label class="label-text">Name</label>
                        <input class = "input-design" type="text" name="name">
                    </div>
                    <div class="adm-input">
                        <label class="label-text">Description</label>
                        <input class = "input-textarea" type="textarea" name="description">
                    </div>
                    <div class="adm-input">
                        <label class="label-text">Image</label>
                        <input style=" width: 80%;padding:10px 0;height: 40px;" type="file" name="image">
                    </div>
                    <div class="input-btn">
                        <input class="btn btn-primary" id="submit" type="submit" value="ADD" name="add-teacher">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>