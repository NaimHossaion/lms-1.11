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
            <h4 class="section-subtitle"><b>Warranty Status </b>Pending
                <a href="add_claim.php"><span class="badge x-o x-primary"><i class="fa fa-plus"></i> Add New</span></a>
                <a href="warranty_claim_pending.php"><span class="badge x-o x-warning"><i class="fa fa-exclamation"></i> Pending List</span></a>
                <a href="<?= $_SERVER['PHP_SELF'] ?>"><span class="badge x-primary"><i class="fa fa-refresh"></i> Refresh</span></a>
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
                            $result = mysqli_query($con, "SELECT * FROM warranty_claim");
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
    $result = mysqli_query($con, "SELECT * FROM warranty_claim");
    while ($row = mysqli_fetch_assoc($result)){
    $Ref_ID = $row['Ref_ID'];
    $Incident_Details = mysqli_query($con, "SELECT * FROM warranty_claim WHERE Ref_ID ='$Ref_ID'");
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
                                            <label for="password2" class="col-sm-4 control-label">Incident</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Incident" class="form-control" id="password2" value="<?= $Incident_Details_Row['Incident'] ?>" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password2" class="col-sm-4 control-label">Model Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Model_Name" class="form-control" id="password2" value="<?= $Incident_Details_Row['Model_Name'] ?>"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password2" class="col-sm-4 control-label">Device Serial</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Device_Serial" class="form-control" id="password2" value="<?= $Incident_Details_Row['Device_Serial'] ?>"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password2" class="col-sm-4 control-label">Asset Tag</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Asset_Tag" class="form-control" id="password2" value="<?= $Incident_Details_Row['Asset_Tag'] ?>" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password2" class="col-sm-4 control-label">User Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="User_Name" class="form-control" id="password2" value="<?= $Incident_Details_Row['User_Name'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password2" class="col-sm-4 control-label">Department</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Department" class="form-control" id="password2" value="<?= $Incident_Details_Row['Department'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="default-datepicker" class="col-sm-4 control-label ">Date</label>
                                            <div class="col-sm-5">
                                                <div class="input-group">
                                                    <span class="input-group-addon x-primary"><i class="fa fa-calendar"></i></span>
                                                    <input type="date" name="Sending_Date" class="form-control" id="default-datepicker" value="<?= $Incident_Details_Row['Sending_Date'] ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Vendor_Name" class="col-sm-4 control-label">Vendor_Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Vendor_Name" class="form-control" id="Vendor_Name" value="<?= $Incident_Details_Row['Vendor_Name'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password2" class="col-sm-4 control-label">Remarks/Problem</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Remarks" class="form-control" id="password2" placeholder="Problem Description">
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
//error_reporting(0);
if(isset($_POST['Incident_Update'])){
    $Incident = $_POST['Incident'];
    $Model_Name = $_POST['Model_Name'];
    $Device_Serial = $_POST['Device_Serial'];
    $Asset_Tag = $_POST['Asset_Tag'];
    $User_Name = $_POST['User_Name'];
    $Department = $_POST['Department'];
    $Mailing_Date = $_POST['Mailing_Date'];
    $Vendor_Name = $_POST['Vendor_Name'];
    $Remarks = $_POST['Remarks'];

    $result = mysqli_query($con,"INSERT INTO warranty_claim(Incident, Model_Name, Device_Serial, Asset_Tag, User_Name, Department, Mailing_Date, Vendor_Name, Remarks) 
                VALUES ('$Incident', '$Model_Name', '$Device_Serial', '$Asset_Tag', '$User_Name', '$Department', '$Mailing_Date', '$Vendor_Name', '$Remarks')");
    if ($result){
        header('location: index.php');
    } else
    {
        echo "Problem";
    }
}
?>

<?php require_once 'footer.php'; ?>