<?php require_once 'header.php'; ?>

    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                <li><a href="javascript:avoid(0)">Hardware Repair Status</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-12">
            <h4 class="section-subtitle"><b>Hardware Repair </b>Status
                <a href="hardware_repair_add.php"><span class="badge x-o x-primary"><i class="fa fa-plus"></i> Add New</span></a>
                <a href=""><span class="badge x-o x-warning"><i class="fa fa-exclamation"></i> Pending List</span></a>
            </h4>
            <div class="panel">
                <div class="panel-content">
                    <div class="table-responsive">
                        <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Follow By</th>
                                <th>Incident</th>
                                <th>Branch Name</th>
                                <th>Department</th>
                                <th>User Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = mysqli_query($con, "SELECT * FROM hardware_repair_info");
                            while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?= $row['date_'] ?></td>
                                    <td><?= $row['follow'] ?></td>
                                    <td><?= $row['incident'] ?></td>
                                    <td><?= $row['branch'] ?></td>
                                    <td><?= $row['dept'] ?></td>
                                    <td><?= $row['user'] ?></td>
                                    <!--<td><?/*= $row['Status'] == 1 ? '<span class="badge badge-xs x-success">Resolved</span>' : '<span class="badge badge-xs x-warning">Pending</span>' */?></td>-->
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#id-<?= $row['id'] ?>"<i class="fa fa-eye"> View </i></a>
                                        <a href="" data-toggle="modal" data-target="#Incident_Update-<?= $row['id'] ?>"<i class="fa fa-pencil-square-o"> Edit </i></a>
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
$result = mysqli_query($con, "SELECT * FROM hardware_repair_info");
while ($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $Incident_Details = mysqli_query($con, "SELECT * FROM hardware_repair_info WHERE id ='$id'");
    $Incident_Details_Row = mysqli_fetch_assoc($Incident_Details);
?>
    <!-- Modal -->
    <div class="modal fade" id="Incident_Update-<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
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
                                            <label for="incident" class="col-sm-4 control-label">Incident No</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="incident" class="form-control" id="email2" placeholder="Incident Number" value="<?= $Incident_Details_Row['incident'] ?>" required>
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