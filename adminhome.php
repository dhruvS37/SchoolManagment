<?php
    session_start();

    if (!isset($_SESSION['username']) || $_SESSION['usertype']=="student") {
        header("location:login.php");
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
</head>
<body>

    <?php
        include "admin_sidebar.php";
    ?>
        <div class="content">
            <h1>Eduction Hub</h1>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat totam itaque tempora consequatur adipisci veritatis dolorem molestiae atque cum reprehenderit, quod asperiores saepe ullam obcaecati in magni harum! Ratione numquam amet sunt adipisci voluptatum aut odio aliquam temporibus, quae quasi praesentium repellat laudantium placeat repudiandae pariatur molestias eius perferendis similique?</p>
        </div>
    </div>
</body>
</html>