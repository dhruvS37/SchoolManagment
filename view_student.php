<?php
    session_start();

    if (!isset($_SESSION['username']) || $_SESSION['usertype']=="student") {
        header("location:login.php");
    }

    include "connection.php";
    
    $sql="SELECT * from user";
    $result=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
    <style>
        .tb-head{
            padding:20px;
            font-size: 15px;
        }
        .tb-data{
            padding:10px ;
        }
    </style>
</head>
<body>

    <?php
        include "admin_sidebar.php";
    ?>
       <div class="content">
            <h1>Student Data</h1>
            <br>
            <table border="1px">
                <tr>
                    <th class="tb-head">Username</th>
                    <th class="tb-head">Email</th>
                    <th class="tb-head">Phone</th>
                    <th class="tb-head">Password</th>
                    <th class="tb-head">Delete</th>
                </tr>
                <?php
                    while($info=$result->fetch_assoc()){
                ?>
                        <tr>
                            <td class="tb-data">
                                <?php echo "{$info['username']}"; ?>
                            </td>
                            <td class="tb-data">
                                <?php echo "{$info['email']}"; ?>
                            </td>
                            <td class="tb-data">
                                <?php echo "{$info['phone']}"; ?>
                            </td>
                            <td class="tb-data">
                                <?php echo "{$info['password']}"; ?>
                            </td>
                            <td class="tb-data">
                                <?php echo "<a onClick=\"javascript:return confirm('Are You Sure to delete this!');\" href='delete_std.php?student_id={$info['id']}'>Delete</a>"; ?>
                            </td>
                        </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>