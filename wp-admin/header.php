<?php
require_once 'dbcon.php';

session_start();

if (!isset($_SESSION['user_login'])){
    header('location: pages_sign-in.php');
}
$page = explode('/', $_SERVER['PHP_SELF']);
$page = end($page);

$sign_in = $_SESSION['user_login'];
$data = mysqli_query($con, "SELECT * FROM `users` WHERE `username` = '$sign_in'");

$users_info = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en" class="fixed left-sidebar-top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Service DESK | Dashboard</title>
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
    <!--Notification msj-->
    <link rel="stylesheet" href="vendor/toastr/toastr.min.css">
    <!--Magnific popup-->
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">
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

            <!--USER HEADERBOX -->
            <div class="header-section" id="user-headerbox">
                <div class="user-header-wrap">
                    <div class="user-photo">
                        <img alt="profile photo" src="images/engineer.png" />
                    </div>
                    <div class="user-info">
                        <span class="user-name"><?= $users_info['name'] ?></span>
                        <span class="user-profile">Admin</span>
                    </div>
                    <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                    <i class="fa fa-minus icon-close" aria-hidden="true"></i>
                </div>
                <div class="user-options dropdown-box">
                    <div class="drop-content basic">
                        <ul>
                            <li> <a href="pages_user-profile.html"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
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
                            <li class="<?= $page == 'index.php' ? 'active-item':'' ?>"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                            <li class="has-child-item close-item <?= $page == 'all-incidents.php' ? 'open-item':'' ?><?= $page == 'new-incident.php' ? 'open-item':'' ?>">
                                <a><i class="fa fa-list" aria-hidden="true"></i><span>Incidents</span></a>
                                <ul class="nav child-nav level-1">
                                    <li class="<?= $page == 'new-incident.php' ? 'active-item':'' ?>"><a href="new-incident.php"><i class="fa fa-plus" aria-hidden="true"></i><span>New Incident</span></a></li>
                                    <li class="<?= $page == 'all-incidents.php' ? 'active-item':'' ?>"><a href="all-incidents.php"><i class="fa fa-server" aria-hidden="true"></i><span>All Incidents</span></a></li>
                                </ul>
                            </li>
                            <li class="<?= $page == 'warranty_claim_page.php' ? 'active-item':'' ?>"><a href="warranty_claim_page.php"><i class="fa fa-laptop" aria-hidden="true"></i><span>Warranty Claim</span></a></li>
                            <li class="<?= $page == '3kva_ups_repair.php' ? 'active-item':'' ?>"><a href="3kva_ups_repair.php"><i class="fa fa-power-off" aria-hidden="true"></i><span>3KVA UPS Repair</span></a></li>
                            <li class="<?= $page == '650va_ups_repair.php' ? 'active-item':'' ?>"><a href="650va_ups_repair.php"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><span>650VA UPS Repair</span></a></li>
                            <li class="<?= $page == 'officer_page.php' ? 'active-item':'' ?>"><a href="officer_page.php"><i class="fa fa-user" aria-hidden="true"></i><span>Officer List</span></a></li>
                            <li class="<?= $page == 'user_status_page.php' ? 'active-item':'' ?>"><a href="user_status_page.php"><i class="fa fa-group" aria-hidden="true"></i><span>User Status</span></a></li>
                            <li class="<?= $page == 'vendor_list.php' ? 'active-item':'' ?>"><a href="vendor_list.php"><i class="fa fa-wrench" aria-hidden="true"></i><span>Vendor List</span></a></li>
                            <li class="<?= $page == 'device_list.php' ? 'active-item':'' ?>"><a href="device_list.php"><i class="fa fa-plus" aria-hidden="true"></i><span>Add Device</span></a></li>
                            <li class="has-child-item close-item <?= $page == 'inventory_laptop_branch.php' ? 'open-item':'' ?><?= $page == 'inventory_page.php' ? 'open-item':'' ?><?= $page == 'online_ups_page.php' ? 'open-item':'' ?>">
                                <a><i class="fa fa-deviantart" aria-hidden="true"></i><span>Inventory</span></a>
                                <ul class="nav child-nav level-1">
                                    <li class="<?= $page == 'inventory_laptop_branch.php' ? 'active-item':'' ?>"><a href="inventory_laptop_branch.php"><i class="fa fa-laptop" aria-hidden="true"></i><span>Laptop Branch</span></a></li>
                                    <li class="<?= $page == 'inventory_page.php' ? 'active-item':'' ?>"><a href="inventory_page.php"><i class="fa fa-desktop" aria-hidden="true"></i><span>CPU PANEBL</span></a></li>
                                    <li class="<?= $page == 'online_ups_page.php' ? 'active-item':'' ?>"><a href="online_ups_page.php"><i class="fa fa-plug" aria-hidden="true"></i><span>3KVA Online UPS</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- CONTENT -->
        <!-- ========================================================= -->
        <div class="content">