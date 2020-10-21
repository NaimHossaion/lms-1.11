<?php require_once 'header.php'; ?>

    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                <li><a href="javascript:avoid(0)">Online UPS</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-12">
            <h4 class="section-subtitle"><b>Inventory of Online UPS</b></h4>
            <div class="panel">
                <div class="panel-content">
                    <div class="table-responsive">
                        <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Location</th>
                                <th>Address</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Capacity</th>
                                <th>Serial_Number</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = mysqli_query($con, "SELECT * FROM inventory_online_ups");
                            while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?= $row['Location'] ?></td>
                                    <td><?= $row['Address'] ?></td>
                                    <td><?= $row['Brand'] ?></td>
                                    <td><?= $row['Model'] ?></td>
                                    <td><?= $row['Capacity'] ?></td>
                                    <td><?= $row['Serial_Number'] ?></td>
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#Ref_ID-<?= $row['SL'] ?>"<i class="fa fa-eye"  data-toggle="tooltip" title="View Details"></i>&nbsp;</a>
                                        <a href="" data-toggle="modal" data-target="#Incident_Update-<?= $row['SL'] ?>"><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit"></i>&nbsp;</a>
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
$result = mysqli_query($con, "SELECT * FROM inventory_pc");
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
                            <th>User_Name</th>
                            <td><?= $row['User_Name'] ?></td>
                        </tr>
                        <tr>
                            <th>Emp_ID</th>
                            <td><?= $row['Emp_ID'] ?></td>
                        </tr>
                        <tr>
                            <th>Designation</th>
                            <td><?= $row['Designation'] ?></td>
                        </tr>
                        <tr>
                            <th>CPU Model</th>
                            <td><?= $row['CPU_Model'] ?></td>
                        </tr>
                        <tr>
                            <th>CPU Asset Tag</th>
                            <td><?= $row['CPU_Asset_Tag'] ?></td>
                        </tr>
                        <tr>
                            <th>CPU Serial</th>
                            <td><?= $row['CPU_Serial'] ?></td>
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