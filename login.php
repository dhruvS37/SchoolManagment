<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .container1{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 145px;
        }
        .row1{
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 300px;
            width: 25%;
            border: 1px solid gray;
            border-radius: 8px;
            background: rgb(217, 228, 232);
        }
        .login-input{
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .label{
            margin: 5px;
        }
        .input-area{
            margin: 5px;
            border-radius: 5px;
            padding: 5px;
            border: 1px solid gray;
        }
        .btn{
            margin: 15px 5px 20px 5px;
            background-color :rgb(0 24 75);
        }
        .error{
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 380px;
            width: 25%;
            color:red;
            margin: 10px
        }
        .logo{
            height: 130px;
        }
    </style>
</head>
<body>
    <div class="container1">
        <div>
            <a href="index.php"><img  class="logo" src="image/logo1.jpg" alt=""></a>
            
        </div>
        <div class="error">
                <?php
                    error_reporting(0);
                    session_start();
                    echo $_SESSION['loginMessage'];
                    session_destroy();
                ?>
        </div>
        <div class="row1">
            <form action="login_check.php" method="POST" style="width: 80%;">
                <div class="login-input">
                    <label for="" class="label">Username</label>
                    <input type="text" class="input-area" name="username">
                </div>
                <div class="login-input">
                    <label for="" class="label">Password</label>
                    <input type="Password" class="input-area" name="password">
                </div>
                <div class="login-input">
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>