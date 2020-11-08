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
$result = mysqli_query($con, "SELECT * FROM vendor_list");
while ($row = mysqli_fetch_assoc($result)){
    ?>
    <!-- Modal View -->
    <div class="modal fade" id="Ref_ID-<?= $row['Ref_ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header state modal-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-info-label"><i class="fa fa-info-circle"></i>Vendor Details</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Vendor_Name</th>
                            <td><?= $row['Vendor_Name'] ?></td>
                        </tr>
                        <tr>
                            <th>Contact_Person</th>
                            <td><?= $row['Contact_Person'] ?></td>
                        </tr>
                        <tr>
                            <th>Email_ID</th>
                            <td><?= $row['Email_ID'] ?></td>
                        </tr>
                        <tr>
                            <th>Mobile_No</th>
                            <td><?= $row['Mobile_No'] ?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><?= $row['Status'] == 1 ? '<span class="badge badge-xs x-success">Active</span>' : '<span class="badge badge-xs x-warning">Inactive</span>' ?></td>
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


<?php
$result = mysqli_query($con, "SELECT * FROM vendor_list");
while ($row = mysqli_fetch_assoc($result)){
$Ref_ID = $row['Ref_ID'];
$Vendor_Details = mysqli_query($con, "SELECT * FROM vendor_list WHERE Ref_ID ='$Ref_ID'");
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
                                            <label for="email2" class="col-sm-4 control-label">Vendor_Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Incident" class="form-control" id="email2" placeholder="Incident Number" value="<?= $Vendor_Details_Row['Vendor_Name'] ?>" required>
                                                <input type="hidden" name="Ref_ID" class="form-control" value="<?= $Vendor_Details_Row['Ref_ID'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Model_Name" class="col-sm-4 control-label">Contact_Person</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Model_Name" class="form-control" id="Model_Name" placeholder="Model_Name" value="<?= $Vendor_Details_Row['Contact_Person'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Model_Name" class="col-sm-4 control-label">Email_ID</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Model_Name" class="form-control" id="Model_Name" placeholder="Model_Name" value="<?= $Vendor_Details_Row['Email_ID'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Model_Name" class="col-sm-4 control-label">Mobile_No</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Model_Name" class="form-control" id="Model_Name" placeholder="Model_Name" value="<?= $Vendor_Details_Row['Mobile_No'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Model_Name" class="col-sm-4 control-label">Status</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Model_Name" class="form-control" id="Model_Name" placeholder="Model_Name" value="<?= $Vendor_Details_Row['Status'] ?>" required>
                                            </div>
                                        </div>
                                        <!-- Example options
                                        <div class="form-group">
                                            <label for="email2" class="col-sm-4 control-label">Vendor_Name</label>
                                            <div class="col-sm-8">
                                                <select name="Vendor_Name" id="email2" class="form-control" style="width: 100%">
                                                    <option value="" label=""></option>
                                                    <option value="SMS System" label="SMS System">SMS System</option>
                                                    <option value="Thakral" label="Thakral">Thakral</option>
                                                    <option value="Pakiza" label="Pakiza">Pakiza</option>
                                                </select>
                                            </div>
                                        </div> -->
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
    <?php
}

//error_reporting(0);

if(isset($_POST['Incident_Update'])){
    $Ref_ID = $_POST['Ref_ID'];
    $Vendor_Name = $_POST['Vendor_Name'];
    $Contact_Person = $_POST['Contact_Person'];
    $Email_ID = $_POST['Email_ID'];
    $Mobile_No = $_POST['Mobile_No'];;


    $result = mysqli_query($con,"UPDATE `vendor_list` SET `Vendor_Name`= '$Vendor_Name',`Contact_Person`= '$Contact_Person',`Email_ID`= '$Email_ID',`Mobile_No`= '$Mobile_No',`Status`= '0' WHERE Ref_ID ='$Ref_ID'");
    if ($result){
        header('location: vendor_list_page.php');
    }
}
?>

<?php require_once 'footer.php'; ?>