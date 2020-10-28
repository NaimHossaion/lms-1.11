<?php
require_once 'dbcon.php';
session_start();

if (isset($_SESSION['user_login'])){
    header('location: index.php');
}

if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($con,"SELECT * FROM users WHERE email = '$email' OR username = '$email'");
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            if($row['status'] == 1){
                $_SESSION['user_login'] = $email;
                header('location: index.php');
            }else {
                $error = "Your Status is inactive!";
            }
        }else {
            $error = "Password invalid!";
        }
    }else {
        $error = "Email or username invalid!";
    }

}

?>



<!DOCTYPE html>
<html lang="en" class="fixed accounts sign-in">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Service DESK | Login</title>
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
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?= isset($email) ? $email:'' ?>">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                <i class="fa fa-key"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" id="remember-me" value="option1" checked>
                                <label class="check" for="remember-me">Remember me</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Sign in" class="btn btn-primary btn-block" name="login">
                        </div>
                        <div class="form-group text-center">
                            <a href="#">Forgot password?</a>
                            <hr/>
                             <span>Don't have an account?</span>
                            <a href="pages_register.php" class="btn btn-block mt-sm">Register</a>
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
