<?php require_once 'header.php'; ?>

    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                <li><a href="javascript:avoid(0)">All Incidents</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-12">
            <h4 class="section-subtitle"><b>All Incidents</b></h4>
            <div class="panel">
                <div class="panel-content">
                    <div class="table-responsive">
                        <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Incident</th>
                                <th>Remarks</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = mysqli_query($con, "SELECT * FROM testing");
                            while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?= date('d-M-Y', strtotime($row['Date'])) ?></td>
                                    <td><?= $row['Incident'] ?></td>
                                    <td><?= $row['Remarks'] ?></td>
                                    <td><?= $row['Status'] == 1 ? 'Active' : 'Inactive' ?></td>
                                    <td>
                                        <a href="javascript:avoid(0)" data-toggle="modal" data-target="#Ref_ID-<?= $row['Ref_ID'] ?>"<i class="fa fa-eye"></i>&nbsp;</a>
                                        <a href="" data-toggle="modal" data-target="#Incident_Update-<?= $row['Ref_ID'] ?>"><i class="fa fa-pencil" data-toggle="tooltip" title="Edit"></i>&nbsp;</a>
                                        <a href="delete.php?DeleteIncident=<?= base64_encode($row ['Ref_ID']) ?>" onclick="return confirm('Are you sure to delete this item?')"><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete"></i>&nbsp;</a>
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
$result = mysqli_query($con, "SELECT * FROM testing");
while ($row = mysqli_fetch_assoc($result)){
    ?>
    <!-- Modal Item VIEW -->
    <div class="modal fade" id="Ref_ID-<?= $row['Ref_ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header state modal-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-info-label"><i class="fa fa-info-circle"></i>Incident Details</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Date</th>
                            <td><?= date('d-M-Y', strtotime($row['Date'])) ?></td>
                        </tr>
                        <tr>
                            <th>Incident</th>
                            <td><?= $row['Incident'] ?></td>
                        </tr>
                        <tr>
                            <th>Remarks</th>
                            <td><?= $row['Remarks'] ?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><?= $row['Status'] == 1 ? 'Active' : 'Inactive' ?></td>
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
$result = mysqli_query($con, "SELECT * FROM testing");
while ($row = mysqli_fetch_assoc($result)){
    $Ref_ID = $row['Ref_ID'];
    $Incident_Details = mysqli_query($con, "SELECT * FROM testing WHERE Ref_ID ='$Ref_ID'");
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
                                            <label for="password2" class="col-sm-4 control-label">Remarks</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Remarks" class="form-control" id="password2" placeholder="Remarks" value="<?= $Incident_Details_Row['Remarks'] ?>" required>
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