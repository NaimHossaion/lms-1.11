<?php require_once 'header.php'; ?>

                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <!--WIDGET BOX STYLE, Row 1-->
                    <h4 class="section-subtitle"><b>Status:</b> Workstation & Online UPS</h4>
                    <div class="col-sm-12">
                        <div class="row">
                            <?php
                            $claims = mysqli_query($con, "SELECT * FROM `warranty_claim` WHERE `Return_Date` IS NULL");
                            $total_claims = mysqli_num_rows($claims);
                            ?>
                            <!--BOX Style 1-->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="panel widgetbox wbox-1 bg-lighter-2 color-light">
                                    <a href="warranty_claim_page.php">
                                        <div class="panel-content">
                                            <h1 class="title color-darker-2"> <i class="fa fa-exclamation-triangle"></i> <?= $total_claims; ?> </h1>
                                            <h4 class="subtitle color-darker-1">Warranty Claim </h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <?php
                            $users = mysqli_query($con, "SELECT * FROM `inventory_pc`");
                            $total_users = mysqli_num_rows($users);
                            ?>
                            <!--BOX Style 1-->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="panel widgetbox wbox-1 bg-lighter-2 color-light">
                                    <a href="inventory_page.php">
                                        <div class="panel-content">
                                            <h1 class="title color-darker-2"> <i class="fa fa-desktop"></i> <?= $total_users; ?>  </h1>
                                            <h4 class="subtitle color-darker-1">Total Workstations</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                            $users = mysqli_query($con, "SELECT * FROM `users`");
                            $total_users = mysqli_num_rows($users);
                            ?>
                            <!--BOX Style 1-->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="panel widgetbox wbox-1 bg-light color-darker-2">
                                    <a href="all_users.php">
                                        <div class="panel-content">
                                            <h1 class="title"><i class="fa fa-globe"></i> <?= $total_users; ?> </h1>
                                            <h4 class="subtitle">Total Users</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--WIDGET BOX STYLE, Row 2-->
                        </div>
                    </div>
                </div>

<?php require_once 'footer.php'; ?>