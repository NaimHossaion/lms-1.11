<?php require_once 'header.php'; ?>

    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                <li><a href="javascript:avoid(0)">Warranty Status</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-12">
            <h4 class="section-subtitle"><b>Warranty Claim Status</b></h4>
            <div class="panel">
                <div class="panel-content">
                    <div class="table-responsive">
                        <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Model_Name</th>
                                <th>Vendor_Name</th>
                                <th>User_Name</th>
                                <th>Department</th>
                                <th>Mailing_Date</th>
                                <th>Sending_Date</th>
                                <th>Return_Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = mysqli_query($con, "SELECT * FROM warranty_claim");
                            while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?= $row['Model_Name'] ?></td>
                                    <td><?= $row['Vendor_Name'] ?></td>
                                    <td><?= $row['User_Name'] ?></td>
                                    <td><?= $row['Department'] ?></td>
                                    <td><?= $row['Mailing_Date'] ?></td>
                                    <td><?= $row['Sending_Date'] ?></td>
                                    <td><?= $row['Return_Date'] ?></td>
                                    <td><?= $row['Status'] == 1 ? '<span class="badge badge-xs x-success">Resolved</span>' : '<span class="badge badge-xs x-warning">Pending</span>' ?></td>
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#Ref_ID-<?= $row['SL'] ?>"<i class="fa fa-eye"> View </i></a>
                                        <a href="" data-toggle="modal" data-target="#Incident_Update-<?= $row['SL'] ?>"<i class="fa fa-pencil-square-o"> Edit </i></a>
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
    <div class="modal fade" id="Ref_ID-<?= $row['SL'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header state modal-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-info-label"><i class="fa fa-info-circle"></i>Item Details</h4>
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



<?php require_once 'footer.php'; ?>