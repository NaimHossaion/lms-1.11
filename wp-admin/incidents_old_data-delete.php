<?php
require_once 'dbcon.php';
if(isset($_GET['DeleteIncident'])){
    $Ref_ID = base64_decode($_GET['DeleteIncident']);
    mysqli_query($con,"DELETE FROM old_info WHERE Ref_ID ='$Ref_ID'");
    header('location: incidents_old_data.php');
}
?>