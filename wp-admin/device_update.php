<?php
require_once 'header.php';
require_once 'dbcon.php';

if(isset($_GET['Ref_ID'])){
    $Ref_ID = $_GET['Ref_ID'];
}else{
    $Ref_ID = "No ID Found";
}

$Details = mysqli_query($con, "SELECT * FROM device_model_list WHERE Ref_ID ='$Ref_ID'");
$Details_Row = mysqli_fetch_assoc($Details);
error_reporting(0);
?>

    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                <li><a href="device_list.php">Device List</a></li>
                <li><a href="javascript:avoid(0)">Update Info</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-6 col-sm-offset-3">
            <!-- START: Show error or success messages -->
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
            <!-- END: Show error or success messages -->
            <div class="panel">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
                                <h5 class="mb-lg">Add New Device</h5>
                                <div class="form-group">
                                    <label for="Device_Catagory" class="col-sm-4 control-label">Device_Catagory</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Device_Catagory" class="form-control" id="Status" placeholder="Device_Catagory" value="<?= $Details_Row['Device_Catagory'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Model_Name" class="col-sm-4 control-label">Status</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Status" class="form-control" id="Status" placeholder="Status" value="<?= $Details_Row['Status'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Device_Model" class="col-sm-4 control-label">Status</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Device_Model" class="form-control" id="Device_Model" placeholder="Device_Model" value="<?= $Details_Row['Device_Model'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" class="btn btn-primary" name="update_device">Submit</button>
                                        <button class="btn" onclick="document.location='device_list.php'">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

if (isset($_POST['update_device'])) {
    $Device_Catagory = $_POST['Device_Catagory'];
    $Device_Model = $_POST['Device_Model'];
    $Status = $_POST['Status'];

    mysqli_query($con,"UPDATE `device_model_list` SET `Device_Catagory`='$Device_Catagory',`Device_Model`='$Device_Model',`Status`='$Status' WHERE `Ref_ID` = '$Ref_ID'");
}
?>

<?php

?>
<?php require_once 'footer.php'; ?>