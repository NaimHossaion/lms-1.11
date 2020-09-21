<?php
require_once 'header.php';
require_once 'dbcon.php';

if(isset($_POST['new-incident'])){
    $Ref_ID = date('Ymdhis');
    $Date = $_POST['Date'];
    $Incident = $_POST['Incident'];
    $Branch_Name = $_POST['Branch_Name'];
    $Address = $_POST['Address'];
    $Is_Resolved = $_POST['Is_Resolved'];
    $UPS_Model = $_POST['UPS_Model'];
    $UPS_Brand = $_POST['UPS_Brand'];
    $UPS_Capacity = $_POST['UPS_Capacity'];
    $UPS_Capacity = $_POST['UPS_Capacity'];
    $UPS_Serial = $_POST['UPS_Serial'];
    $Remarks = $_POST['Remarks'];

    $result = mysqli_query($con,
        "INSERT INTO `incidents`(`Ref_ID`, `Date`, `Incident`, `Branch_Name`, `Address`, `Is_Resolved`, `UPS_Model`, `UPS_Brand`, `UPS_Capacity`, `UPS_Serial`, `Remarks`) 
            VALUES ('$Ref_ID', '$Date', '$Incident', '$Branch_Name,' '$Address' '$Is_Resolved', '$UPS_Model', '$UPS_Brand', '$UPS_Capacity', '$UPS_Serial', '$Remarks')");

    if ($result){
        $success = "Data added successfully!";
    }else {
        $error = "Something Wrong!";
    }
}
mysqli_close($con);



?>

    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                <li><a href="javascript:avoid(0)">New Incident</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <h5 class="mb-lg">New Incident</h5>
                                <div class="form-group">
                                    <label for="default-datepicker" class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-addon x-primary"><i class="fa fa-calendar"></i></span>
                                            <input type="date" name="Date" class="form-control" id="default-datepicker">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Incident" class="col-sm-2 control-label">Incident</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="Incident" class="form-control" id="Incident" placeholder="Incident">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Branch_Name" class="col-sm-2 control-label">Branch Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="Branch_Name" class="form-control" id="Branch_Name" placeholder="Branch Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Address" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="Address" class="form-control" id="Address" placeholder="Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Is_Resolved" class="col-sm-2 control-label">Is Resolved</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="Is_Resolved" class="form-control" id="Is_Resolved" placeholder="Is Resolved">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="UPS_Model" class="col-sm-2 control-label">UPS Model</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="UPS_Model" class="form-control" id="UPS_Model" placeholder="UPS Model">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="UPS_Brand" class="col-sm-2 control-label">UPS Brand</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="UPS_Brand" class="form-control" id="UPS_Brand" placeholder="UPS Brand">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="UPS_Capacity" class="col-sm-2 control-label">UPS Capacity</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="UPS_Capacity" class="form-control" id="UPS_Capacity" placeholder="UPS Capacity">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="UPS_Serial" class="col-sm-2 control-label">UPS Serial</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="UPS_Serial" class="form-control" id="UPS_Serial" placeholder="UPS Serial">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Remarks" class="col-sm-2 control-label">Remarks</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="Remarks" class="form-control" id="Remarks" placeholder="Remarks">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" name="new-incident" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php require_once 'footer.php'; ?>