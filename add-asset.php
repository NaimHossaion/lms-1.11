<?php

require_once 'dbcon.php';

session_start();

if (!isset($_SESSION['user_login'])){
    header('location: pages_sign-in.php');
}

if(isset($_POST['add_asset'])){
    $Date = $_POST['Date'];
    $Incident = $_POST['Incident'];
    $Location = $_POST['Location'];
    $Status = $_POST['Status'];

    $input_error = array();
    if(empty($Date)) {
        $input_error['Date'] = "Enter Receive Date!";
    }
    if(empty($Incident)) {
        $input_error['Incident'] = "Enter Incident Number!";
    }
    if(empty($Location)) {
        $input_error['Location'] = "Enter Branch or ATM Location!";
    }
    if(empty($Status)) {
        $input_error['Status'] = "Enter Issue Status!";
    }
    if (count($input_error) == 0) {
        //$password_hash = password_hash($password, PASSWORD_DEFAULT);
        $result = mysqli_query($con,"INSERT INTO add_asset(Date, Incident, Location, Status) VALUES ( '$Date', '$Incident', '$Location', '$Status')");
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
<html lang="en" class="fixed left-sidebar-top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Service DESK | IT</title>
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!--load progress bar-->
    <script src="vendor/pace/pace.min.js"></script>
    <link href="vendor/pace/pace-theme-minimal.css" rel="stylesheet" />
    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--dataTable-->
    <link rel="stylesheet" href="vendor/data-table/media/css/dataTables.bootstrap.min.css">
    <!-- ========================================================= -->
    <!--Select with searching & tagging-->
    <link rel="stylesheet" href="vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="vendor/select2/css/select2-bootstrap.min.css">
    <!--Time picker-->
    <link rel="stylesheet" href="vendor/bootstrap_time-picker/css/timepicker.css">
    <!--Color picker-->
    <link rel="stylesheet" href="vendor/bootstrap_color-picker/css/bootstrap-colorpicker.min.css">
    <!--Date picker-->
    <link rel="stylesheet" href="vendor/bootstrap_date-picker/css/bootstrap-datepicker3.min.css">
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="stylesheets/css/style.css">

</head>

<body>
    <div class="wrap">
        <!-- page HEADER -->
        <!-- ========================================================= -->
        <div class="page-header">
            <!-- LEFTSIDE header -->
            <div class="leftside-header">
                <div class="logo">
                    <a href="index.php" class="on-click">
                        <img alt="logo" src="images/header-logo.png" />
                    </a>
                </div>
                <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>
            <!-- RIGHTSIDE header -->
            <div class="rightside-header">
                <div class="header-middle"></div>

                <!--NOCITE HEADERBOX-->
                <div class="header-section hidden-xs" id="notice-headerbox">

                    <!--alerts notices-->
                    <div class="notice" id="alerts-notice">
                        <i class="fa fa-bell-o" aria-hidden="true"><span class="badge badge-xs badge-top-right x-danger">7</span></i>

                        <div class="dropdown-box basic">
                            <div class="drop-header">
                                <h3><i class="fa fa-bell-o" aria-hidden="true"></i> Notifications</h3>
                                <span class="badge x-danger b-rounded">7</span>

                            </div>
                            <div class="drop-content">
                                <div class="widget-list list-left-element list-sm">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-warning color-warning"></i></div>
                                                <div class="text">
                                                    <span class="title">8 Bugs</span>
                                                    <span class="subtitle">reported today</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-flag color-danger"></i></div>
                                                <div class="text">
                                                    <span class="title">Error</span>
                                                    <span class="subtitle">sevidor C down</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-cog color-dark"></i></div>
                                                <div class="text">
                                                    <span class="title">New Configuration</span>
                                                    <span class="subtitle"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-tasks color-success"></i></div>
                                                <div class="text">
                                                    <span class="title">14 Task</span>
                                                    <span class="subtitle">completed</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-envelope color-primary"></i></div>
                                                <div class="text">
                                                    <span class="title">21 Menssage</span>
                                                    <span class="subtitle"> (see more)</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drop-footer">
                                <a>See all notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="header-separator"></div>
                </div>
                <!--USER HEADERBOX -->
                <div class="header-section" id="user-headerbox">
                    <div class="user-header-wrap">
                        <div class="user-photo">
                            <img alt="profile photo" src="images/avatar/avatar_user.jpg" />
                        </div>
                        <div class="user-info">
                            <span class="user-name">Jane Doe</span>
                            <span class="user-profile">Admin</span>
                        </div>
                        <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                        <i class="fa fa-minus icon-close" aria-hidden="true"></i>
                    </div>
                    <div class="user-options dropdown-box">
                        <div class="drop-content basic">
                            <ul>
                                <li> <a href="pages_user-profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-separator"></div>
                <!--Log out -->
                <div class="header-section">
                    <a href="logout.php" data-toggle="tooltip" data-placement="left" title="Logout"><i class="fa fa-sign-out log-out" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- page BODY -->
        <!-- ========================================================= -->
        <div class="page-body">
            <!-- LEFT SIDEBAR -->
            <!-- ========================================================= -->
            <div class="left-sidebar">
                <!-- left sidebar HEADER -->
                <div class="left-sidebar-header">
                    <div class="left-sidebar-title">NAVIGATION</div>
                    <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                        <span></span>
                    </div>
                </div>
                <!-- NAVIGATION -->
                <!-- ========================================================= -->
                <div id="left-nav" class="nano">
                    <div class="nano-content">
                        <nav>
                            <ul class="nav nav-left-lines" id="main-nav">
                                <!--HOME-->
                                <li class="close-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                                <li class="close-item"><a href="online-ups.php"><i class="fa fa-home" aria-hidden="true"></i><span>Online UPS</span></a></li>
                                <li class="active-item"><a href="add-asset.php"><i class="fa fa-plus" aria-hidden="true"></i><span>Add Asset</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- CONTENT -->
            <!-- ========================================================= -->
            <div class="content">
                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                            <li><a href="add-asset.php">Add Asset</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <!--BASIC-->
                    <div class="col-sm-12 col-md-6">
                        <h4 class="section-subtitle"><b>Add</b> Asset</h4>
                        <div class="panel">
                            <div class="panel-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
                                            <h5 class="mb-lg">3kVA Online UPS Issue!</h5>
                                            <div class="form-group">
                                                <label for="default-datepicker" class="col-sm-2 control-label ">Date</label>
                                                <div class="col-sm-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon x-primary"><i class="fa fa-calendar"></i></span>
                                                        <input type="text" name="Date" class="form-control" id="default-datepicker">
                                                        <?php
                                                        if (isset($input_error['Date'])) {
                                                            echo '<span class="input-error">'.$input_error['Date'].'</span>';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email2" class="col-sm-2 control-label">Incident No</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="Incident" class="form-control" id="email2" placeholder="Incident Number">
                                                    <?php
                                                    if (isset($input_error['Incident'])) {
                                                        echo '<span class="input-error">'.$input_error['Incident'].'</span>';
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email2" class="col-sm-2 control-label">Location</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="Location" class="form-control" id="email2" placeholder="ATM or Branch Location">
                                                    <?php
                                                    if (isset($input_error['Location'])) {
                                                        echo '<span class="input-error">'.$input_error['Location'].'</span>';
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password2" class="col-sm-2 control-label">Status</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="Status" class="form-control" id="password2" placeholder="Issue Status">
                                                    <?php
                                                    if (isset($input_error['Status'])) {
                                                        echo '<span class="input-error">'.$input_error['Status'].'</span>';
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary" name="add_asset">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                    <!--HORIZONTAL-->
                    <div class="col-sm-12 col-md-6">
                        <h4 class="section-subtitle"><b>Horizontal</b> form</h4>
                        <div class="panel">
                            <div class="panel-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal">
                                            <h5 class="mb-lg">To enjoy more, sing in!</h5>
                                            <div class="form-group">
                                                <label for="email2" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="email2" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password2" class="col-sm-2 control-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="password2" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> Remember me
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            </div>

                        <!--scroll to top-->
            <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
        </div>
    </div>
    <!-- ========================================================= -->
    <script src="vendor/jquery/jquery-1.12.3.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/nano-scroller/nano-scroller.js"></script>
    <!--TEMPLATE scripts-->
    <!-- ========================================================= -->
    <script src="javascripts/template-script.min.js"></script>
    <script src="javascripts/template-init.min.js"></script>
    <!-- SECTION script and examples-->
    <!-- ========================================================= -->
    <!--Max length-->
    <script src="vendor/bootstrap_max-lenght/bootstrap-maxlength.js"></script>
    <!--Select with searching & tagging-->
    <script src="vendor/select2/js/select2.min.js"></script>
    <!--Input mask-->
    <script src="vendor/input-masked/inputmask.bundle.min.js"></script>
    <script src="vendor/input-masked/phone-codes/phone.js"></script>
    <!--Date picker-->
    <script src="vendor/bootstrap_date-picker/js/bootstrap-datepicker.min.js"></script>
    <!--Time picker-->
    <script src="vendor/bootstrap_time-picker/js/bootstrap-timepicker.js"></script>
    <!--Color picker-->
    <script src="vendor/bootstrap_color-picker/js/bootstrap-colorpicker.min.js"></script>
    <!--Examples-->
    <script src="javascripts/examples/forms/advanced.js"></script>
</body>
</html>