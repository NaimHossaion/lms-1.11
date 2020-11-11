<?php require_once 'header.php'; ?>

    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                <li><a href="javascript:avoid(0)">Vendor List</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-12">
            <h4 class="section-subtitle"><b>Vendor List </b><a href="vendor_add.php"><span class="badge x-o x-primary"><i class="fa fa-plus"></i> Add New</span></a></h4>
            <div class="panel">
                <div class="panel-content">
                    <div class="table-responsive">
                        <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Vendor_Name</th>
                                <th>Contact_Person</th>
                                <th>Email_ID</th>
                                <th>Mobile_No</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = mysqli_query($con, "SELECT * FROM vendor_list");
                            while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?= $row['Vendor_Name'] ?></td>
                                    <td><?= $row['Contact_Person'] ?></td>
                                    <td><?= $row['Email_ID'] ?></td>
                                    <td><?= $row['Mobile_No'] ?></td>
                                    <td><?= $row['Status'] == 1 ? '<span class="badge badge-xs x-success">Active</span>' : '<span class="badge badge-xs x-warning">Inactive</span>' ?></td>
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#Ref_ID-<?= $row['Ref_ID'] ?>"<i class="fa fa-eye"> View </i></a>
                                        <a href="javascript:avoid(0)" data-toggle="modal" data-target="lg-modal"<i class="fa fa-pencil-square-o"> Edit </i></a>
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
    <!-- Modal Start -->
<?php
$result = mysqli_query($con, "SELECT * FROM warranty_claim");
while ($row = mysqli_fetch_assoc($result)){
    ?>
    <!-- Modal -->
    <div class="modal fade" id="Ref_ID-<?= $row['Ref_ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-large-label">
        <div class="modal-dialog" role="document">
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
    <!-- Modal End -->
<?php require_once 'footer.php'; ?>