<?php

require_once 'header.php';
require_once 'dbcon.php';

if(isset($_POST['add_asset'])){
    $Ref_ID = date('Ymdhis');
    $Date = $_POST['Date'];
    $Incident = $_POST['Incident'];
    $Remarks = $_POST['Remarks'];

    //Ref_ID    //Date    //Incident    //Remarks

    $input_error = array();
    if(empty($Ref_ID)) {
        $input_error['Ref_ID'] = "Enter Receive Date!";
    }
    if(empty($IDate)) {
        $input_error['Date'] = "Enter Incident Number!";
    }
    if(empty($Incident)) {
        $input_error['Incident'] = "Enter Branch or ATM Location!";
    }
    if(empty($Remarks)) {
        $input_error['Remarks'] = "Enter Issue Status!";
    }
    if (count($input_error) == 0) {
        //$password_hash = password_hash($password, PASSWORD_DEFAULT);
        $result = mysqli_query($con,"INSERT INTO add_asset(Ref_ID, Date, Incident, Remarks) VALUES ( '$Ref_ID', '$Date', '$Incident', '$Remarks')");
        if ($result){
            $success = "Data added successfully!";
        }else {
            $error = "Something Wrong!";
        }
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
                        <li><a href="add-asset.php">Add Asset</a></li>
                    </ul>
                </div>
            </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            <div class="row animated fadeInUp">
                <!--BASIC-->
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
                                        <h5 class="mb-lg">New Incident!</h5>
                                        <div class="form-group">
                                            <label for="default-datepicker" class="col-sm-4 control-label ">Date</label>
                                            <div class="col-sm-5">
                                                <div class="input-group">
                                                    <span class="input-group-addon x-primary"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" name="Date" class="form-control" id="default-datepicker">
                                                    <?php
                                                    if (isset($input_error['Date'])) {
                                                        echo '<span class="input-error">'.$input_error['Date'].'</span>';
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email2" class="col-sm-4 control-label">Incident No</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Incident" class="form-control" id="email2" placeholder="Incident Number">
                                                <?php
                                                if (isset($input_error['Incident'])) {
                                                    echo '<span class="input-error">'.$input_error['Incident'].'</span>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email2" class="col-sm-4 control-label">Location</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Location" class="form-control" id="email2" placeholder="ATM or Branch Location">
                                                <?php
                                                if (isset($input_error['Location'])) {
                                                    echo '<span class="input-error">'.$input_error['Location'].'</span>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password2" class="col-sm-4 control-label">Status</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="Status" class="form-control" id="password2" placeholder="Issue Status">
                                                <?php
                                                if (isset($input_error['Status'])) {
                                                    echo '<span class="input-error">'.$input_error['Status'].'</span>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-4 col-sm-8">
                                                <button type="submit" class="btn btn-primary" name="add_asset">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

<?php require_once 'footer.php'; ?>