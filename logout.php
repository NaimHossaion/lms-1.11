<?php
session_start();

session_destroy();
header('location: pages_sign-in.php');

?>