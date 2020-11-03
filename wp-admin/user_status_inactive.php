<?php
require_once 'dbcon.php';
$id = base64_decode($_GET['id']);

mysqli_query($con, "UPDATE `users` SET `status`= '0' WHERE `id`= '$id'");
header('location: user_status_page.php');