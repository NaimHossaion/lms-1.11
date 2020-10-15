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
                    <div class="col-sm-12">
                        <div class="row">
                            <?php
                            $users = mysqli_query($con, "SELECT * FROM `users`");
                            $total_users = mysqli_num_rows($users);
                            ?>
                            <!--BOX Style 1-->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="panel widgetbox wbox-1 bg-darker-1">
                                    <a href="all-incidents.php">
                                        <div class="panel-content">
                                            <h1 class="title color-w"><i class="fa fa-globe"></i> <?= $total_users; ?> </h1>
                                            <h4 class="subtitle color-lighter-1">Total Users</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--BOX Style 1-->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="panel widgetbox wbox-1 bg-darker-2 color-light">
                                    <a href="#">
                                        <div class="panel-content">
                                            <h1 class="title color-light-1"> <i class="fa fa-envelope"></i> 124 </h1>
                                            <h4 class="subtitle">New Messages</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--BOX Style 1-->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="panel widgetbox wbox-1 bg-lighter-2 color-light">
                                    <a href="#">
                                        <div class="panel-content">
                                            <h1 class="title color-darker-2"> <i class="fa fa-user"></i> 105 </h1>
                                            <h4 class="subtitle color-darker-1">New Users</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

<?php require_once 'footer.php'; ?>