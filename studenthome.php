<?php
    session_start();

    if (!isset($_SESSION['username']) || $_SESSION['usertype']=="admin") {
        header("location:login.php");
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
</head>
<body>


    <?php
        include "student_sidebar.php";
    ?>
        <div class="content">
            <h1>Education Hub</h1>
            
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni saepe odit animi repudiandae voluptatum provident exercitationem officia, quisquam delectus itaque, iusto ipsam sapiente at. Voluptatum illum sed eaque, dolores cumque officia incidunt. Odio maxime a in quod, necessitatibus deleniti? Nisi aperiam eligendi ratione ipsum ipsam! Animi iusto aliquam vero. Odit.</p>
        </div>
    </div>
</body>
</html>