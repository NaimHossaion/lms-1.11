<?php require_once 'header.php'; ?>

    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                <li><a href="warranty_claim_page.php">Warranty Status</a></li>
                <li><a href="javascript:avoid(0)">Pending List</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-12">
            <h4 class="section-subtitle"><b>Warranty Status </b>Pending
                <a href="add_claim.php"><span class="badge x-o x-primary"><i class="fa fa-plus"></i> Add New</span></a>
                <a href="warranty_claim_pending.php"><span class="badge x-o x-warning"><i class="fa fa-exclamation"></i> Pending List</span></a>
            </h4>
            <div class="panel">
                <div class="panel-content">
                    <div class="table-responsive">
                        <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Model Name</th>
                                <th>Vendor Name</th>
                                <th>User Name</th>
                                <th>Device Serial</th>
                                <th>Sending Date</th>
                                <th>Return Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = mysqli_query($con, "SELECT * FROM warranty_claim WHERE Return_Date IS NULL");
                            while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?= $row['Model_Name'] ?></td>
                                    <td><?= $row['Vendor_Name'] ?></td>
                                    <td><?= $row['User_Name'] ?></td>
                                    <td><?= $row['Device_Serial'] ?></td>
                                    <td><?= $row['Sending_Date'] ?></td>
                                    <td><?= $row['Return_Date'] ?></td>
                                    <td><?= $row['Status'] == 1 ? '<span class="badge badge-xs x-success">Resolved</span>' : '<span class="badge badge-xs x-warning">Pending</span>' ?></td>
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
$result = mysqli_query($con, "SELECT * FROM warranty_claim");
while ($row = mysqli_fetch_assoc($result)){
    ?>
    <!-- Modal -->
    <div class="modal fade" id="Ref_ID-<?= $row['Ref_ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-large-label">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header state modal-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-large-label"><i class="fa fa-info-circle"></i>Item Details</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Model_Name</th>
                            <td><?= $row['Model_Name'] ?></td>
                        </tr>
                        <tr>
                            <th>Device_Serial</th>
                            <td><?= $row['Device_Serial'] ?></td>
                        </tr>
                        <tr>
                            <th>Asset_Tag</th>
                            <td><?= $row['Asset_Tag'] ?></td>
                        </tr>
                        <tr>
                            <th>User_Name</th>
                            <td><?= $row['User_Name'] ?></td>
                        </tr>
                        <tr>
                            <th>Department</th>
                            <td><?= $row['Department'] ?></td>
                        </tr>
                        <tr>
                            <th>Mailing_Date</th>
                            <td><?= $row['Mailing_Date'] ?></td>
                        </tr>
                        <tr>
                            <th>Sending_Date</th>
                            <td><?= $row['Sending_Date'] ?></td>
                        </tr>
                        <tr>
                            <th>Return_Date</th>
                            <td><?= $row['Return_Date'] ?></td>
                        </tr>
                        <tr>
                            <th>Vendor_Name</th>
                            <td><?= $row['Vendor_Name'] ?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><?= $row['Status'] == 1 ? '<span class="badge badge-xs x-success">Resolved</span>' : '<span class="badge badge-xs x-warning">Pending</span>' ?></td>
                        </tr>
                        <tr>
                            <th>Remarks</th>
                            <td><?= $row['Remarks'] ?></td>
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
                                            <label for="default-datepicker" class="col-sm-4 control-label ">Date</label>
                                            <div class="col-sm-5">
                                                <div class="input-group">
                                                    <span class="input-group-addon x-primary"><i class="fa fa-calendar"></i></span>
                                                    <input type="date" name="Date" class="form-control" id="default-datepicker" value="<?= $Incident_Details_Row['Date'] ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email2" class="col-sm-4 control-label">Incident No</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Incident" class="form-control" id="email2" placeholder="Incident Number" value="<?= $Incident_Details_Row['Incident'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Model_Name" class="col-sm-4 control-label">Model_Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Model_Name" class="form-control" id="Model_Name" placeholder="Model_Name" value="<?= $Incident_Details_Row['Model_Name'] ?>" required>
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
?>

<?php require_once 'footer.php'; ?>