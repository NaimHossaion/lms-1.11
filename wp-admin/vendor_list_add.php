<?php
require_once 'header.php';
require_once 'dbcon.php';
error_reporting(0);

if(isset($_POST['add_vendor'])){
    $Vendor_Name = $_POST['Vendor_Name'];
    $Contact_Person = $_POST['Contact_Person'];
    $Email_ID = $_POST['Email_ID'];
    $Mobile_No = $_POST['Mobile_No'];;


    $result = mysqli_query($con,"INSERT INTO vendor_list(Vendor_Name, Contact_Person, Email_ID, Mobile_No, Status) 
                VALUES ('$Vendor_Name', '$Contact_Person', '$Email_ID', '$Mobile_No', '1')");
    if ($result){
        $success = "Vendor: $Vendor_Name has been added successfully!";
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
                                <h5 class="mb-lg">Add Vendor</h5>
                                <div class="form-group">
                                    <label for="Vendor_Name" class="col-sm-4 control-label">Vendor_Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Vendor_Name" class="form-control" id="placeholder" placeholder="Vendor_Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">Contact_Person</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Contact_Person" class="form-control" id="placeholder" placeholder="Contact_Person">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Email_ID" class="col-sm-4 control-label">Email_ID</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Email_ID" class="form-control" id="placeholder" placeholder="Email_ID">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Mobile_No" class="col-sm-4 control-label">Mobile_No</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Mobile_No" class="form-control" id="password2" placeholder="Mobile_No">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" class="btn btn-primary" name="add_vendor">Submit</button>
                                        <button class="btn" onclick="document.location='vendor_list_page.php'">Cancel</button>
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