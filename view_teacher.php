<?php
    session_start();

    if (!isset($_SESSION['username']) || $_SESSION['usertype']=="student") {
        header("location:login.php");
    }

    include "connection.php";
    
    $sql="SELECT * from teacher";
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
            <h1>View Teachers Data</h1>
            <br>
            <table border="1px">
                <tr>
                    <th class="tb-head">Name</th>
                    <th class="tb-head">About</th>
                    <th class="tb-head">Image</th>
                    <th class="tb-head">Delete</th>
                   
                </tr>
                <?php
                    while($info=$result->fetch_assoc()){
                ?>
                        <tr>
                            <td class="tb-data">
                                <?php echo "{$info['name']}"; ?>
                            </td>
                            <td class="tb-data">
                                <?php echo "{$info['description']}"; ?>
                            </td>
                            <td class="tb-data">
                                <img class = "tech-img"src="<?php echo "{$info['image']}";?>" alt="">
                            </td>
                            <td class="tb-data">
                                <button type="button" class="btn">
                                    <?php echo "<a onClick=\"javascript:return confirm('Are You Sure to delete this!');\" style='text-decoration:none;color:white;' href='delete_teacher.php?teacher_id={$info['id']}'>Delete</a>"; ?>
                                </button>
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