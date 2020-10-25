<?php
require_once 'header.php';
require_once 'dbcon.php';

if(isset($_POST['add_claim'])){
    $Incident = $_POST['Incident'];
    $Model_Name = $_POST['Model_Name'];
    $Device_Serial = $_POST['Device_Serial'];
    $Asset_Tag = $_POST['Asset_Tag'];
    $User_Name = $_POST['User_Name'];
    $Department = $_POST['Department'];
    $Mailing_Date = $_POST['Mailing_Date'];
    $Vendor_Name = $_POST['Vendor_Name'];
    $Remarks = $_POST['Remarks'];

    $result = mysqli_query($con,"INSERT INTO warranty_claim(Incident, Model_Name, Device_Serial, Asset_Tag, User_Name, Department, Mailing_Date, Vendor_Name, Remarks) 
                VALUES ('$Incident', '$Model_Name', '$Device_Serial', '$Asset_Tag', '$User_Name', '$Department', '$Mailing_Date', '$Vendor_Name', '$Remarks')");
    if ($result){
        $success = "Claim for - $Model_Name added successfully!";
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
                <li><a href="add-claim.php">Add Claim</a></li>
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
                                <h5 class="mb-lg">Add Warranty Claim</h5>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">Incident</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Incident" class="form-control" id="password2" placeholder="Incident">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">Model Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Model_Name" class="form-control" id="password2" placeholder="Model Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">Device Serial</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Device_Serial" class="form-control" id="password2" placeholder="Device Serial" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">Asset Tag</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Asset_Tag" class="form-control" id="password2" placeholder="Asset Tag">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">User Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="User_Name" class="form-control" id="password2" placeholder="User Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">Department</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Department" class="form-control" id="password2" placeholder="Department">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="default-datepicker" class="col-sm-4 control-label ">Mailing Date</label>
                                    <div class="col-sm-5">
                                        <input type="date" name="Mailing_Date" class="form-control" id="default-datepicker" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email2" class="col-sm-4 control-label">Vendor Name</label>
                                    <div class="col-sm-8">
                                        <select name="Vendor_Name" id="email2" class="form-control" style="width: 100%">
                                            <option value="" disabled selected hidden>Choose Vendor Name</option>
                                            <option value="SMS Systems">SMS Systems</option>
                                            <option value="Thakral Information Systems">Thakral Information Systems</option>
                                            <option value="Pakiza Technovation Limited">Pakiza Technovation Limited</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">Remarks/Problem</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Remarks" class="form-control" id="password2" placeholder="Problem Description" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" class="btn btn-primary" name="add_claim">Submit</button>
                                        <button class="btn" onclick="document.location='warranty_claim_page.php'">Cancel</button>
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