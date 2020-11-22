<?php require_once 'header.php'; ?>

    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                <li><a href="javascript:avoid(0)">3KVA UPS Repair</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-12">
            <h4 class="section-subtitle"><b>Online UPS </b>Repair
                <a href="3kva_ups_repair_add.php"><span class="badge x-o x-primary"><i class="fa fa-plus"></i> Add New</span></a>
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
                            $result = mysqli_query($con, "SELECT * FROM 3kva_ups_repair");
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
                                        <a href="" data-toggle="modal" data-target="#Ref_ID-<?= $row['Ref_ID'] ?>"<i class="fa fa-eye"> View </i></a>
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

<?php
$result = mysqli_query($con, "SELECT * FROM 3kva_ups_repair");
while ($row = mysqli_fetch_assoc($result)){
    ?>
    <!-- Modal -->
    <div class="modal fade" id="Ref_ID-<?= $row['Ref_ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header state modal-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-info-label"><i class="fa fa-info-circle"></i>Device Details</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Location</th>
                            <td><?= $row['Location'] ?></td>
                        </tr>
                        <tr>
                            <th>UPS_Brand</th>
                            <td><?= $row['UPS_Brand'] ?></td>
                        </tr>
                        <tr>
                            <th>UPS_Capacity</th>
                            <td><?= $row['UPS_Capacity'] ?></td>
                        </tr>
                        <tr>
                            <th>UPS_Serial</th>
                            <td><?= $row['UPS_Serial'] ?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><?= $row['Repair_Status'] == 'Resolved' ? '<span class="badge badge-xs x-success">Resolved</span>' : '<span class="badge badge-xs x-warning">Pending</span>' ?></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>

    <!-- Modal for Edit or Update -->
<?php
$result = mysqli_query($con, "SELECT * FROM warranty_claim");
while ($row = mysqli_fetch_assoc($result)){
    $Ref_ID = $row['Ref_ID'];
    $Incident_Details = mysqli_query($con, "SELECT * FROM warranty_claim WHERE Ref_ID ='$Ref_ID'");
    $Incident_Details_Row = mysqli_fetch_assoc($Incident_Details);
    ?>
    <!-- Modal -->
    <div class="modal fade" id="Incident_Update-<?= $row['Ref_ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header state modal-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-info-label"><i class="fa fa-edit"></i>Update Incident</h4>
                </div>
                <div class="modal-body">
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" method="post" action="">
                                        <div class="form-group">
                                            <label for="Location" class="col-sm-4 control-label">Location</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Location" class="form-control" id="Location" placeholder="Location" value="<?= $Incident_Details_Row['Location'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Vendor_Name" class="col-sm-4 control-label">Vendor_Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Vendor_Name" class="form-control" id="Vendor_Name" placeholder="Vendor_Name" value="<?= $Incident_Details_Row['Vendor_Name'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" name="Incident_Update" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
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

if(isset($_POST['Incident_Update'])){
    $Location = $_POST['Location'];
    $Vendor_Name = $_POST['Vendor_Name'];

    $result = mysqli_query($con,"UPDATE `3kva_ups_repair` SET `Location`='$Location', `Vendor_Name`='$Vendor_Name' WHERE `Ref_ID` = '$Ref_ID'");
    if ($result){
        header('location: 3kva_ups_repair.php');
    }
}

?>

<?php require_once 'footer.php'; ?>