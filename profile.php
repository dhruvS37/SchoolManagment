<?php
    session_start();

    if (!isset($_SESSION['username']) || $_SESSION['usertype']=="admin") {
        header("location:login.php");
    }

    include "connection.php";
    $username=$_SESSION['username'];
    $sql="SELECT * FROM user WHERE username = '$username'";
    $result=mysqli_query($con,$sql);
    $info=$result->fetch_assoc();
    $id=$info['id'];
    if(isset($_POST['update'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $update="UPDATE user SET username='$username', email='$email', phone='$phone', password='$password' WHERE id = '$id'";
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
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include "student_sidebar.php";
    ?>
        <div class="content">
        <div class="form-section">
                <h1>Update Profile</h1>
                <br>
                <form action="#" method="POST" class="adm-form">
                    <div class="adm-input">
                        <label class="label-text">Username</label>
                        <input class = "input-design" type="text" name="username" value="<?php echo "{$info['username']}"; ?>">
                    </div>
                    <div class="adm-input">
                        <label class="label-text">Email</label>
                        <input class = "input-design" type="text" name="email" value="<?php echo "{$info['email']}"; ?>">
                    </div>
                    <div class="adm-input">
                        <label class="label-text">Phone</label>
                        <input class = "input-design" type="text" name="phone" value="<?php echo "{$info['phone']}"; ?>">
                    </div>
                    <div class="adm-input">
                        <label class="label-text">Password</label>
                        <input class = "input-design" type="password" name="password" value="<?php echo "{$info['password']}"; ?>">
                    </div>
                    <div class="input-btn">
                        <input class="btn btn-primary" id="submit" type="submit" value="UPDATE" name="update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>