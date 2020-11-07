<?php require_once 'header.php'; ?>

    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                <li><a href="javascript:avoid(0)">Inventory Laptop</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-12">
            <h4 class="section-subtitle"><b>Inventory Laptop</b> Branch</h4>
            <div class="panel">
                <div class="panel-content">
                    <div class="table-responsive">
                        <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Location</th>
                                <th>Department_Name</th>
                                <th>User_Name</th>
                                <th>Designation	</th>
                                <th>Device_Model</th>
                                <th>Device_Serial</th>
                                <th>OS</th>
                                <th>Device_Category</th>
                                <th>Purchase_Year</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = mysqli_query($con, "SELECT * FROM inventory_laptop_branch");
                            while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?= $row['Location'] ?></td>
                                    <td><?= $row['Department_Name'] ?></td>
                                    <td><?= $row['User_Name'] ?></td>
                                    <td><?= $row['Designation'] ?></td>
                                    <td><?= $row['Device_Model'] ?></td>
                                    <td><?= $row['Device_Serial'] ?></td>
                                    <td><?= $row['OS'] ?></td>
                                    <td><?= $row['Device_Category'] ?></td>
                                    <td><?= $row['Purchase_Year'] ?></td>
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