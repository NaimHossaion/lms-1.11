<?php

require_once 'dbcon.php';

session_start();

if (isset($_SESSION['user_login'])){
    header('location: index.php');
}

if(isset($_POST['user_register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $input_error = array();
    if(empty($name)) {
        $input_error['name'] = "Enter your Name!";
    }
    if(empty($email)) {
        $input_error['email'] = "Enter your Email!";
    }
    if(empty($username)) {
        $input_error['username'] = "Enter your Username!";
    }
    if(empty($password)) {
        $input_error['password'] = "Enter your Password!";
    }
    if (count($input_error) == 0) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $result = mysqli_query($con,"INSERT INTO users(name, email, username, password, status) VALUES ( '$name', '$email', '$username', '$password_hash', '0')");
        if ($result){
            $success = "Data added successfully!";
        }else {
            $error = "Something Wrong!";
        }
    }

}
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en" class="fixed accounts sign-in">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Service DESK | Register</title>
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="vendor/animate.css/animate.css">
    <link rel="stylesheet" href="stylesheets/css/style.css">
</head>

<body>
<div class="wrap">
    <!-- page BODY -->
    <!-- ========================================================= -->
    <div class="page-body animated slideInDown">
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--LOGO-->
        <div class="logo">
            <img alt="logo" src="images/it-support-sm.png" />
            <?php
            if (isset($success)){
            ?>
            <div class="alert alert-success fade in">
                <?= $success ?>
                <a href="#" class="close" data-dismiss="alert">&times;</a>
            </div>
            <?php
            }
            ?>

            <?php
            if (isset($error)){
                ?>
                <div class="alert alert-danger fade in">
                    <?= $error ?>
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                </div>
                <?php
            }
            ?>

        </div>
        <div class="box">
            <!--SIGN IN FORM-->
            <div class="panel mb-none">
                <div class="panel-content bg-scale-0">
                    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="<?= isset($name) ? $name:'' ?>">
                                <i class="fa fa-user"></i>
                            </span>
                            <?php
                            if (isset($input_error['name'])) {
                                echo '<span class="input-error">'.$input_error['name'].'</span>';
                            }
                            ?>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="email" class="form-control" name="email" placeholder="Email" value="<?= isset($email) ? $email:'' ?>">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <?php
                            if (isset($input_error['email'])) {
                                echo '<span class="input-error">'.$input_error['email'].'</span>';
                            }
                            ?>
                        </div>
                        <div class="form-group mt-md">
                                <span class="input-with-icon">
                                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?= isset($username) ? $username:'' ?>">
                                    <i class="fa fa-user"></i>
                                </span>
                            <?php
                            if (isset($input_error['username'])) {
                                echo '<span class="input-error">'.$input_error['username'].'</span>';
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control" name="password" placeholder="Password" value="<?= isset($password) ? $password:'' ?>">
                                <i class="fa fa-key"></i>
                            </span>
                            <?php
                            if (isset($input_error['password'])) {
                                echo '<span class="input-error">'.$input_error['password'].'</span>';
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" name="user_register" value="Register">
                        </div>
                        <div class="form-group text-center">
                            Have an account?, <a href="pages_sign-in.php">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    </div>
</div>
<!-- ========================================================= -->
<script src="vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/nano-scroller/nano-scroller.js"></script>
<script src="javascripts/template-script.min.js"></script>
<script src="javascripts/template-init.min.js"></script>
</body>
</html>
