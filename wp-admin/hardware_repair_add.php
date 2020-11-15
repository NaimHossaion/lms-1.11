<?php
require_once 'header.php';
require_once 'dbcon.php';
//error_reporting(0);

if(isset($_POST['add_device'])){
    $follow = $_POST['follow'];
    $incident = $_POST['incident'];
    $branch = $_POST['branch'];
    $dept = $_POST['dept'];
    $user = $_POST['user'];
    $prob = $_POST['prob'];

    $result = mysqli_query($con,"INSERT INTO hardware_repair_info(date_,follow,incident,branch,dept,user,ip,tag,model,serial_,prob,status,remark,delivery,os,is_repaired, mail_sent) 
                VALUES ('', '$follow', '$incident', '$branch', '$dept', '$user', '', '', '', '', '$prob', '', '', '', '', '', '')");
    if ($result){
        $success = "Incident: $incident has been added successfully!";
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
                <li><a href="hardware_repair.php">Hardware Repair List</a></li>
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
                                <h5 class="color-darker-1"><b>Please Enter the Data</b></h5>
                                <p class="color-muted">*To be filled by the assigned IT Service Engineers only</p>
                                <div class="form-group">
                                    <label for="follow" class="col-sm-4 control-label">follow</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="follow" class="form-control" id="placeholder" placeholder="follow" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="incident" class="col-sm-4 control-label">incident</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="incident" class="form-control" id="placeholder" placeholder="incident">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="branch" class="col-sm-4 control-label">branch</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="branch" class="form-control" id="placeholder" placeholder="branch">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dept" class="col-sm-4 control-label">dept</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="dept" class="form-control" id="placeholder" placeholder="dept">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="user" class="col-sm-4 control-label">user</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="user" class="form-control" id="placeholder" placeholder="user">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="prob" class="col-sm-4 control-label">prob</label>
                                    <div class="col-sm-8">
                                        <textarea type="text" name="prob" class="form-control" id="placeholder" placeholder="prob"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" class="btn btn-primary" name="add_device">Submit</button>
                                        <a href="hardware_repair.php" class="btn btn-default">Cancel</a>
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