<?php
require_once 'header.php';
require_once 'dbcon.php';
error_reporting(0);
if(isset($_POST['add_item'])){
    $User_Name = $_POST['User_Name'];
    $Department = $_POST['Department'];
    $Form_Copy = $_POST['Form_Copy'];

    $result = mysqli_query($con,"INSERT INTO asset_receive_form(User_Name, Department, Form_Copy) 
                VALUES ('$User_Name', '$Department', '$Form_Copy')");
    if ($result){
        $success = "Asset Receive Form - $User_Name added successfully!";
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
                <li><a href="asset_receive_form.php">Asset Receive Form</a></li>
                <li><a href="javascript:avoid(0)">Add Asset Receive Form</a></li>
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
                                <h5 class="mb-lg">Add New Item</h5>
                                <div class="form-group">
                                    <label for="User_Name" class="col-sm-4 control-label">User_Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="User_Name" class="form-control" placeholder="User_Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Department" class="col-sm-4 control-label">Department</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Department" class="form-control" id="Department" placeholder="Department" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Form_Copy" class="col-sm-4 control-label">Form_Copy</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Form_Copy" class="form-control" id="Form_Copy" placeholder="Form_Copy" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" class="btn btn-primary" name="add_item">Submit</button>
                                        <a href="asset_receive_form.php" class="btn btn-default">Cancel</a>
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