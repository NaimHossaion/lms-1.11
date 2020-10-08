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
                                    <td><?= $row['Status'] ?></td>
                                    <td>
                                        <a href="javascript:avoid(0)" data-toggle="modal" data-target="#Ref_ID-<?= $row['Ref_ID'] ?>"<i class="fa fa-eye"></i>&nbsp;</a>
                                        <a href=""><i class="fa fa-pencil"></i>&nbsp;</a>
                                        <a href="delete.php?DeleteIncident=<?= base64_encode($row ['Ref_ID']) ?>" onclick="return confirm('Are you sure to delete this item?')"><i class="fa fa-trash-o"></i>&nbsp;</a>
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
    <!-- Modal -->
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
                            <td><?= $row['Status'] ?></td>
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