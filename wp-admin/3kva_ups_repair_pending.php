<?php require_once 'header.php'; ?>

    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                <li><a href="3kva_ups_repair.php">3KVA UPS Repair</a></li>
                <li><a href="javascript:avoid(0)">3KVA UPS Repair Pending</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-12">
            <h4 class="section-subtitle"><b>Online UPS </b>Repair
                <a href="3kva_ups_repair_add.php"><span class="badge x-o x-primary"><i class="fa fa-plus"></i> Add New</span></a>
                <a href="3kva_ups_repair.php"><span class="badge x-darker-1"><i class="fa fa-bars"></i> List All Repair</span></a>
                <a href="<?= $_SERVER['PHP_SELF'] ?>"><span class="badge x-primary"><i class="fa fa-refresh"></i> Refresh</span></a>
            </h4>

            <div class="panel">
                <div class="panel-content">
                    <div class="table-responsive">
                        <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Location</th>
                                    <th>UPS_Brand</th>
                                    <th>UPS_Capacity</th>
                                    <th>UPS_Serial</th>
                                    <th>Sending_Date</th>
                                    <th>Return_Date</th>
                                    <th>Repair_Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = mysqli_query($con, "SELECT * FROM 3kva_ups_repair WHERE Return_Date IS NULL");
                            while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?= $row['Location'] ?></td>
                                    <td><?= $row['UPS_Brand'] ?></td>
                                    <td><?= $row['UPS_Capacity'] ?></td>
                                    <td><?= $row['UPS_Serial'] ?></td>
                                    <td><?= $row['Sending_Date'] ?></td>
                                    <td><?= $row['Return_Date'] ?></td>
                                    <td><?= $row['Repair_Status'] ?></td>
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#Incident_Update-<?= $row['Ref_ID'] ?>"<i class="fa fa-pencil-square-o"> Edit </i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Edit or Update -->
<?php
    $result = mysqli_query($con, "SELECT * FROM 3kva_ups_repair");
    while ($row = mysqli_fetch_assoc($result)){
    $Ref_ID = $row['Ref_ID'];
    $Incident_Details = mysqli_query($con, "SELECT * FROM 3kva_ups_repair WHERE Ref_ID ='$Ref_ID'");
    $Incident_Details_Row = mysqli_fetch_assoc($Incident_Details);
    ?>
    <!-- Modal -->
    <div class="modal fade" id="Incident_Update-<?= $row['Ref_ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-large-label">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header state modal-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-large-label"><i class="fa fa-edit"></i>Update Incident</h4>
                </div>
                <div class="modal-body">
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" method="post" action="">
                                        <div class="form-group">
                                            <label for="Incident" class="col-sm-4 control-label">Incident</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Incident" class="form-control" id="Incident" value="<?= $Incident_Details_Row['Incident'] ?>" required>
                                                <input type="hidden" name="Ref_ID" class="form-control" id="Ref_ID" value="<?= $Incident_Details_Row['Ref_ID'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Location" class="col-sm-4 control-label">Location</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Location" class="form-control" id="Location" value="<?= $Incident_Details_Row['Location'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="UPS_Model" class="col-sm-4 control-label">UPS_Model</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="UPS_Model" class="form-control" id="UPS_Model" value="<?= $Incident_Details_Row['UPS_Model'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="UPS_Brand" class="col-sm-4 control-label">UPS_Brand</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="UPS_Brand" class="form-control" id="UPS_Brand" value="<?= $Incident_Details_Row['UPS_Brand'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="UPS_Capacity" class="col-sm-4 control-label">UPS_Capacity</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="UPS_Capacity" class="form-control" id="UPS_Capacity" value="<?= $Incident_Details_Row['UPS_Capacity'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="UPS_Serial" class="col-sm-4 control-label">UPS_Serial</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="UPS_Serial" class="form-control" id="UPS_Serial" value="<?= $Incident_Details_Row['UPS_Serial'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Vendor_Name" class="col-sm-4 control-label">Vendor_Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Vendor_Name" class="form-control" id="Vendor_Name" value="<?= $Incident_Details_Row['Vendor_Name'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Sending_Date" class="col-sm-4 control-label">Sending_Date</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Sending_Date" class="form-control" id="Sending_Date" value="<?= $Incident_Details_Row['Sending_Date'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Return_Date" class="col-sm-4 control-label">Return_Date</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Return_Date" class="form-control" id="Return_Date" value="<?= $Incident_Details_Row['Return_Date'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Repair_Status" class="col-sm-4 control-label">Repair_Status</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Repair_Status" class="form-control" id="Repair_Status" value="<?= $Incident_Details_Row['Repair_Status'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Remarks" class="col-sm-4 control-label">Remarks</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Remarks" class="form-control" id="Remarks" value="<?= $Incident_Details_Row['Remarks'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-4 col-sm-10">
                                                <button type="submit" name="Incident_Update" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                                                <a href="3kva_ups_repair.php" class="btn btn-default">Cancel</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
error_reporting(0);
if(isset($_POST['Incident_Update'])){
    $Ref_ID = $_POST['Ref_ID'];
    $Incident = $_POST['Incident'];
    $Location = $_POST['Location'];
    $UPS_Model = $_POST['UPS_Model'];
    $UPS_Brand = $_POST['UPS_Brand'];
    $UPS_Capacity = $_POST['UPS_Capacity'];
    $UPS_Serial = $_POST['UPS_Serial'];
    $Vendor_Name = $_POST['Vendor_Name'];
    $Sending_Date = $_POST['Sending_Date'];
    $Return_Date = $_POST['Return_Date'];
    $Repair_Status = $_POST['Repair_Status'];
    $Remarks = $_POST['Remarks'];



    $result = mysqli_query($con,"UPDATE 3kva_ups_repair SET Incident ='$Incident', Location ='$Location', UPS_Model ='$UPS_Model', UPS_Brand ='$UPS_Brand', UPS_Capacity ='$UPS_Capacity', UPS_Serial ='$UPS_Serial', Vendor_Name ='$Vendor_Name', Sending_Date ='$Sending_Date', Return_Date ='$Return_Date', Repair_Status ='$Repair_Status', Remarks ='$Remarks' WHERE  Ref_ID = '$Ref_ID'");
    if ($result){
        header('location: 3kva_ups_repair.php');
    }
}

?>

<?php require_once 'footer.php'; ?>