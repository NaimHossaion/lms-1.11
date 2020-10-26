<?php
require_once 'header.php';
require_once 'dbcon.php';
error_reporting(0);

if(isset($_POST['add_ups'])){
    $Follow_Up = $_POST['Follow_Up'];
    $Incident_No = $_POST['Incident_No'];
    $Issue_Date = $_POST['Issue_Date'];
    $Branch_Name = $_POST['Branch_Name'];
    $Department = $_POST['Department'];
    $User_Name = $_POST['User_Name'];


    $result = mysqli_query($con,"INSERT INTO inventory_offline_ups(Follow_Up, Incident_No, Issue_Date, Branch_Name, Department, User_Name, Delivery_Date) 
                VALUES ('$Follow_Up', '$Incident_No', '$Issue_Date', '$Branch_Name', '$Department', '$User_Name', '')");
    if ($result){
        $success = "Incident No - $Incident_No has been added successfully!";
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
                <li><a href="incident_add_ups.php">Add UPS</a></li>
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
                                <h5 class="mb-lg">Add UPS</h5>
                                <div class="form-group">
                                    <label for="Follow_Up" class="col-sm-4 control-label">Follow_Up</label>
                                    <div class="col-sm-8">
                                            <select class="form-control" name="Officer_Name">
                                                <option value="" disabled selected hidden>Follow Up Engineer</option>
                                                <?php
                                                $result = mysqli_query($con, "SELECT * FROM officer_list");
                                                while ($row = mysqli_fetch_assoc($result)){ ?>
                                                    <option value=""><?= $row['Officer_Name'] ?></option>
                                                <?php     }
                                                ?>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">Incident_No</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Incident_No" class="form-control" id="password2" placeholder="Model Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label ">Issue_Date</label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <span class="input-group-addon x-primary"><i class="fa fa-calendar"></i></span>
                                            <input type="date" name="Issue_Date" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">Branch_Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Branch_Name" class="form-control" id="password2" placeholder="Asset Tag">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">Department</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Department" class="form-control" id="password2" placeholder="User Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">User_Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="User_Name" class="form-control" id="password2" placeholder="Department">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" class="btn btn-primary" name="add_ups">Submit</button>
                                        <button class="btn" onclick="document.location='incident_ups.php'">Cancel</button>
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