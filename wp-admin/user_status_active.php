<?php

require_once 'dbcon.php';

$id = $_GET['id'];

mysqli_query($con, "UPDATE `users` SET `status` = '1' WHERE 'id' = '$id'");
header('location: user_status_page.php');

?>