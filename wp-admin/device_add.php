<?php
require_once 'header.php';
require_once 'dbcon.php';
error_reporting(0);

if(isset($_POST['add_device'])){
    $Device_Category = $_POST['Device_Category'];
    $Device_Model = $_POST['Device_Model'];

    $result = mysqli_query($con,"INSERT INTO device_model_list(Device_Category, Device_Model, Status) 
                VALUES ('$Device_Category', '$Device_Model', '1')");
    if ($result){
        $success = "Device: $Device_Model has been added successfully!";
    }else {
        $error = "Something Wrong!";
    }
}

?>

    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                <li><a href="device_list.php">Device List</a></li>
                <li><a href="javascript:avoid(0)">Add New</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <!--BASIC-->
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
                                    <label for="Device_Category" class="col-sm-4 control-label">Device_Category</label>
                                    <div class="col-sm-8">
                                        <select name="Device_Category" id="Device_Category" class="form-control" style="width: 100%">
                                            <option value="" disabled selected hidden>Choose Vendor Name</option>
                                            <option value="Desktop">Desktop</option>
                                            <option value="Laptop">Laptop</option>
                                            <option value="Online UPS">Online UPS</option>
                                            <option value="650VA UPS">650VA UPS</option>
                                            <option value="Printer">Printer</option>
                                            <option value="Scanner">Scanner</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Device_Model" class="col-sm-4 control-label">Device_Model</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Device_Model" class="form-control" id="placeholder" placeholder="Device Model Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" class="btn btn-primary" name="add_device">Submit</button>
                                        <a href="device_list.php" class="btn btn-default">Cancel</a>
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

<?php require_once 'footer.php'; ?>