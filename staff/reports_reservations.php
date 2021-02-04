<?php
session_start();
require_once('../config/config.php');
require_once('../config/codeGen.php');
require_once('../config/checklogin.php');
staff(); /* Invoke  Check Login */

require_once("../partials/head.php");
?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once("../partials/admin_nav.php"); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require_once("../partials/staff_sidebar.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Reservation And Accomodations Reports </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="dashboard.php">Reports</a></li>
                                <li class="breadcrumb-item active">Reservations</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <hr>
                    <div class="col-12">
                        <table id="reports" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>Type</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>
                                    <th>Customer Name</th>
                                    <th>ID No</th>
                                    <th>Payment Status</th>
                                    <th>Reserved On </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $ret = "SELECT * FROM `reservations` ORDER BY `reservations`.`created_at` DESC";
                                $stmt = $mysqli->prepare($ret);
                                $stmt->execute(); //ok
                                $res = $stmt->get_result();
                                while ($reservation = $res->fetch_object()) {
                                ?>
                                    <tr>
                                        <td><?php echo $reservation->room_number; ?></td>
                                        <td><?php echo $reservation->room_type; ?></td>
                                        <td><?php echo date('d-M-Y', strtotime($reservation->check_in)); ?></td>
                                        <td><?php echo date('d-M-Y', strtotime($reservation->check_out)); ?></td>
                                        <td><?php echo $reservation->cust_name; ?></td>
                                        <td><?php echo $reservation->cust_id; ?></td>
                                        <td><?php echo $reservation->status; ?></td>
                                        <td><?php echo date('d-M-Y g:ia', strtotime($reservation->created_at)); ?></td>
                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <?php require_once("../partials/footer.php"); ?>

    </div>
    <?php require_once("../partials/scripts.php"); ?>

</body>

</html>