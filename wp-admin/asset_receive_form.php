<?php require_once 'header.php'; ?>

    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                <li><a href="javascript:avoid(0)">Asset Receive Form</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-12">
            <h4 class="section-subtitle"><b>Asset Receive </b>Form
                <a href="asset_receive_form_add.php"><span class="badge x-o x-primary"><i class="fa fa-plus"></i> Add New</span></a>
                <a href="<?= $_SERVER['PHP_SELF'] ?>"><span class="badge x-primary"><i class="fa fa-refresh"></i> Refresh</span></a>
            </h4>

            <div class="panel">
                <div class="panel-content">
                    <div class="table-responsive">
                        <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>User_Name</th>
                                    <th>Department</th>
                                    <th>Form_Copy</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = mysqli_query($con, "SELECT * FROM asset_receive_form");
                            while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?= $row['User_Name'] ?></td>
                                    <td><?= $row['Department'] ?></td>
                                    <td><?= $row['Form_Copy'] ?></td>
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
    $result = mysqli_query($con, "SELECT * FROM asset_receive_form");
    while ($row = mysqli_fetch_assoc($result)){
    $Ref_ID = $row['Ref_ID'];
    $Incident_Details = mysqli_query($con, "SELECT * FROM asset_receive_form WHERE Ref_ID ='$Ref_ID'");
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
                                                <input type="text" name="User_Name" class="form-control" id="User_Name" value="<?= $Incident_Details_Row['User_Name'] ?>" required>
                                                <input type="hidden" name="Ref_ID" class="form-control" id="Ref_ID" value="<?= $Incident_Details_Row['Ref_ID'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Department" class="col-sm-4 control-label">Department</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Department" class="form-control" id="Department" value="<?= $Incident_Details_Row['Department'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Form_Copy" class="col-sm-4 control-label">Form_Copy</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Form_Copy" class="form-control" id="Form_Copy" value="<?= $Incident_Details_Row['Form_Copy'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-4 col-sm-10">
                                                <button type="submit" name="Incident_Update" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                                                <a href="asset_receive_form.php" class="btn btn-default">Cancel</a>
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
    $User_Name = $_POST['User_Name'];
    $Department = $_POST['Department'];
    $Form_Copy = $_POST['Form_Copy'];

    $result = mysqli_query($con,"UPDATE asset_receive_form SET User_Name ='$User_Name', Department ='$Department', Form_Copy ='$Form_Copy' WHERE  Ref_ID = '$Ref_ID'");
    if ($result){
        header('location: asset_receive_form.php');
    }
}

?>

<?php require_once 'footer.php'; ?>