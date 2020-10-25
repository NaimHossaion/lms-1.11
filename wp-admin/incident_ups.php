<?php require_once 'header.php'; ?>

    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                <li><a href="javascript:avoid(0)">UPS Status</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-12">
            <h4 class="section-subtitle"><b>UPS Status, Offline</b></h4>
            <div class="panel">
                <div class="panel-content">
                    <div class="table-responsive">
                        <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Issue_Date</th>
                                <th>Incident_No</th>
                                <th>Branch_Name</th>
                                <th>Department</th>
                                <th>User_Name</th>
                                <th>UPS_Model</th>
                                <th>Status</th>
                                <th>Problem_Description</th>
                                <th>Delivery_Date</th>
                                <th>Is_Repaired</th>
                                <th>Mail_Sent</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = mysqli_query($con, "SELECT * FROM inventory_offline_ups");
                            while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?= $row['Issue_Date'] ?></td>
                                    <td><?= $row['Incident_No'] ?></td>
                                    <td><?= $row['Branch_Name'] ?></td>
                                    <td><?= $row['Department'] ?></td>
                                    <td><?= $row['User_Name'] ?></td>
                                    <td><?= $row['UPS_Model'] ?></td>
                                    <td><?= $row['Status'] ?></td>
                                    <td><?= $row['Problem_Description'] ?></td>
                                    <td><?= $row['Delivery_Date'] ?></td>
                                    <td><?= $row['Is_Repaired'] ?></td>
                                    <td><?= $row['Mail_Sent'] ?></td>
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

<?php require_once 'footer.php'; ?>