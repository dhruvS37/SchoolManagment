<?php
    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['massage']){
        $massage=$_SESSION['massage'];
        echo "<script type='text/javascript'>alert('$massage');</script>";
    }

    include "connection.php";

    $teacher_data="SELECT * FROM teacher";
    $result=mysqli_query($con,$teacher_data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Mannagment System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php"><img class="logo-img" src="image/logo1.jpg" alt=""></a>
        <Label class="logo">Education Hub</Label>
        <ul class ="navbar-ul">
            <li class="navbar-li"><a href="#home">Home</a></li>
            <li class="navbar-li"><a href="">Contact</a></li>
            <li class="navbar-li"><a href="#admission">Admission</a></li>
            <li class="navbar-li"><a href="login.php" class="btn btn-primary">Login</a></li>
        </ul>
    </nav>
    
    
</div>

    <div id="home" class="section">
        <div class="img-text">Welcome to Education Hub </div>
        <img class="main_img" src="image/classroom.jpeg" alt="">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class = " welcome-img" src="image/school2.jpg" alt="">
            </div>

            <div class="col-md-8">
                <h1>Welcome to Education Hub </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, dignissimos ipsum! Consequatur alias culpa iure iste non quibusdam repellendus quos eius provident consequuntur, reiciendis temporibus voluptates assumenda voluptatum ratione iusto delectus dolores deserunt, modi dignissimos autem. Illum consequatur unde pariatur tempora earum facilis rem nihil corrupti quas, inventore nostrum impedit.</p>
            </div>
        </div>
    </div>
    <center>
        <h1>Our Faculties</h1>
    </center>
    <div class="container">
         <div class="row">
            <?php while($info=$result->fetch_assoc()){?>
            <div class="col-md-4">
                <img class = "tech-img" src=<?php echo "{$info['image']}";?> alt="">
                <h5><?php echo "{$info['name']}";?></h5>
                <h6 style="text-align:center;"><?php echo "{$info['description']}";?></h6>
            </div>
            <?php } ?>
         </div>
    </div>
    <center>
        <h1>Cources</h1>
    </center>
    <div class="container">
         <div class="row">
            <div class="col-md-4">
                <img class = "tech-img"src="image/web.jpg" alt="">
                <h5>Web Design</h5>
            </div>
            <div class="col-md-4">
                <img class = "tech-img"src="image/graphic.jpg" alt="">
                <h5>Graphic Design</h5>
            </div>
            <div class="col-md-4">
                 <img class = "tech-img"src="image/marketing.png" alt="">
                 <h5>Marketing</h5>
            </div>
         </div>
    </div>
    

    <div id="admission" class="form-section">
        <h1>Addmision Form</h1>
        <form action="data_check.php" method="POST" class="adm-form">
            <div class="adm-input">
                <label class="label-text">Name</label>
                <input class = "input-design" type="text" name="name">
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
                <label class="label-text">Massage</label>
                <textarea class = "input-textarea" name="massage"></textarea>
            </div>
            <div class="input-btn">
                <input class="btn btn-primary" id="submit" type="Submit" value="Apply" name="apply">
            </div>
        </form>
    </div>

    <footer>
        <h5 class="footer-text">All @copyright reserved by PP Savani Group</h5>
    </footer>
</body>
</html>