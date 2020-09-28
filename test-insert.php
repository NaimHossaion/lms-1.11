<?php
require_once 'header.php';
require_once 'dbcon.php';

if(isset($_POST['add_asset'])){
    $Ref_ID = date('mdhis');
    $Date = $_POST['Date'];
    $Incident = $_POST['Incident'];
    $Remarks = $_POST['Remarks'];

    $result = mysqli_query($con,"INSERT INTO testing(Ref_ID, Date, Incident, Remarks) 
                VALUES ('$Ref_ID', '$Date', '$Incident', '$Remarks')");
    if ($result){
        $success = "Incident - $Incident added successfully!";
    }else {
        $error = "Something Wrong!";
    }
}

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
            <!-- START: Show error or success messages -->
            <?php
            if (isset($success)){
                ?>
                <div class="alert alert-success fade in">
                    <?= $success ?>
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                </div>
                <?php
            }
            ?>

            <?php
            if (isset($error)){
                ?>
                <div class="alert alert-danger fade in">
                    <?= $error ?>
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                </div>
                <?php
            }
            ?>
            <!-- END: Show error or success messages -->
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
                                            <input type="date" name="Date" class="form-control" id="default-datepicker" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email2" class="col-sm-4 control-label">Incident No</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Incident" class="form-control" id="email2" placeholder="Incident Number" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-4 control-label">Remarks</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="Remarks" class="form-control" id="password2" placeholder="Remarks" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" class="btn btn-primary" name="add_asset">Submit</button>
                                        <button class="btn" onclick="document.location='all-incidents.php'">Cancel</button>
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