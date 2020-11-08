<?php require_once 'header.php'; ?>

    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                <li><a href="javascript:avoid(0)">Device List</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-12">
            <h4 class="section-subtitle"><b>Device </b>List <a href="device_add.php"><span class="badge x-o x-primary"><i class="fa fa-plus"></i> Add New</span></a></h4>
            <div class="panel">
                <div class="panel-content">
                    <div class="table-responsive">
                        <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Device_Catagory</th>
                                <th>Device_Model</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = mysqli_query($con, "SELECT * FROM device_model_list");
                            while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?= $row['Device_Catagory'] ?></td>
                                    <td><?= $row['Device_Model'] ?></td>
                                    <td><?= $row['Status'] == 1 ? '<span class="badge badge-xs x-success">Active</span>' : '<span class="badge badge-xs x-warning">Inactive</span>' ?></td>
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


<?php
$result = mysqli_query($con, "SELECT * FROM device_model_list");
while ($row = mysqli_fetch_assoc($result)){
$Ref_ID = $row['Ref_ID'];
$Vendor_Details = mysqli_query($con, "SELECT * FROM device_model_list WHERE Ref_ID ='$Ref_ID'");
$Vendor_Details_Row = mysqli_fetch_assoc($Vendor_Details);
?>

    <!-- Modal Edit -->
    <div class="modal fade" id="Incident_Update-<?= $row['Ref_ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header state modal-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-info-label"><i class="fa fa-info-circle"></i>Vendor Information Update</h4>
                </div>
                <div class="modal-body">
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" method="post" action="">
                                        <div class="form-group">
                                            <label for="Device_Catagory" class="col-sm-4 control-label">Device_Catagory</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Device_Catagory" class="form-control" id="Device_Catagory" placeholder="Device_Catagory" value="<?= $Vendor_Details_Row['Device_Catagory'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Device_Model" class="col-sm-4 control-label">Device_Model</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Device_Model" class="form-control" id="Device_Model" placeholder="Device_Model" value="<?= $Vendor_Details_Row['Device_Model'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Status" class="col-sm-4 control-label">Status</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Status" class="form-control" id="Status" placeholder="Status" value="<?= $Vendor_Details_Row['Status'] ?>" required>
                                                <!--<input type="text" name="Ref_ID" class="form-control" value="<?/*= $Vendor_Details_Row['Ref_ID'] */?>" required>-->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" name="add_device" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
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
    <?php
}

error_reporting(0);

if(isset($_POST['add_device'])){
    $Device_Catagory = $_POST['Device_Catagory'];
    $Device_Model = $_POST['Device_Model'];

    $result = mysqli_query($con,"UPDATE `device_model_list` SET `Device_Catagory`='$Device_Catagory',`Device_Model`='$Device_Model' WHERE `Ref_ID`= '$Ref_ID'");

}

?>

<?php require_once 'footer.php'; ?>