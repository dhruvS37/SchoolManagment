<?php
    error_reporting(0);
    session_start();

    if (!isset($_SESSION['username']) || $_SESSION['usertype']=="student") {
        header("location:login.php");
    }
    if($_SESSION['add-massage']){
        $massage=$_SESSION['add-massage'];
        echo "<script type='text/javascript'>alert('$massage');</script>";
    }
    unset($_SESSION['add-massage']);

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
                <h1>Add Student Data</h1>
                <br>
                <form action="add_student_check.php" method="POST" class="adm-form">
                    <div class="adm-input">
                        <label class="label-text">Username</label>
                        <input class = "input-design" type="text" name="username">
                    </div>
                    <div class="adm-input">
                        <label class="label-text">Email</label>
                        <input class = "input-design" type="text" name="email">
                    </div>
                    <div class="adm-input">
                        <label class="label-text">Phone</label>
                        <input class = "input-design" type="text" name="phone">
                    </div>
                    <div class="adm-input">
                        <label class="label-text">Password</label>
                        <input class = "input-design" type="password" name="password">
                    </div>
                    <div class="input-btn">
                        <input class="btn btn-primary" id="submit" type="submit" value="ADD" name="add-student">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>