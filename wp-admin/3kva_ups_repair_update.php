<?php
require_once 'header.php';
require_once 'dbcon.php';

if(isset($_POST['add_item'])){
    $Incident = $_POST['Incident'];
    $Location = $_POST['Location'];
    $UPS_Model = $_POST['UPS_Model'];
    $UPS_Brand = $_POST['UPS_Brand'];
    $UPS_Capacity = $_POST['UPS_Capacity'];
    $UPS_Serial = $_POST['UPS_Serial'];
    $Vendor_Name = $_POST['Vendor_Name'];
    $Sending_Date = $_POST['Sending_Date'];
    $Remarks = $_POST['Remarks'];

    $result = mysqli_query($con,"INSERT INTO 3kva_ups_repair(Incident, Location, UPS_Model, UPS_Brand, UPS_Capacity, UPS_Serial, Vendor_Name, Sending_Date, Remarks) 
                VALUES ('$Incident', '$Location', '$UPS_Model', '$UPS_Brand', '$UPS_Capacity', '$UPS_Serial', '$Vendor_Name', '$Sending_Date', '$Remarks')");
    if ($result){
        $success = "Claim for - $UPS_Brand added successfully!";
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
                <li><a href="3kva_ups_repair.php">3KVA UPS Repair</a></li>
                <li><a href="javascript:avoid(0)">Add 3KVA UPS</a></li>
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
                                    <label for="password2" class="col-sm-4 control-label">Incident</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Incident" class="form-control" placeholder="Incident">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">Location</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Location" class="form-control" id="password2" placeholder="Model Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">UPS_Model</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="UPS_Model" class="form-control" id="password2" placeholder="Device Serial" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">UPS_Brand</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="UPS_Brand" class="form-control" id="password2" placeholder="Asset Tag">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">UPS_Capacity</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="UPS_Capacity" class="form-control" id="password2" placeholder="User Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">UPS_Serial</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="UPS_Serial" class="form-control" id="password2" placeholder="Department">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Vendor_Name" class="col-sm-4 control-label">Vendor_Name</label>
                                    <div class="col-sm-8">
                                        <select name="Vendor_Name" id="Vendor_Name" class="form-control" style="width: 100%">
                                            <option value="" disabled selected hidden>Choose Vendor Name</option>
                                            <?php
                                            $result = mysqli_query($con, "SELECT * FROM vendor_list  WHERE `Status` = '1'");
                                            while ($row = mysqli_fetch_assoc($result)){ ?>
                                                <option value="<?= $row['Vendor_Name'] ?> "><?= $row['Vendor_Name'] ?></option>
                                            <?php     }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Sending_Date</label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <span class="input-group-addon x-primary"><i class="fa fa-calendar"></i></span>
                                            <input type="date" name="Sending_Date" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">Remarks</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Remarks" class="form-control" id="password2" placeholder="Problem Description" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" class="btn btn-primary" name="add_item">Submit</button>
                                        <button class="btn" onclick="document.location='3kva_ups_repair.php'">Cancel</button>
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