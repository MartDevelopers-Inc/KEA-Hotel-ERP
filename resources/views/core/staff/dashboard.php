<?php
session_start();
require_once('../config/config.php');
require_once('../config/checklogin.php');
staff(); /* Invoke Staff Check Login */
require_once('../partials/analytics.php');
require_once("../partials/head.php");
?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once('../partials/admin_nav.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require_once('../partials/admin_sidebar.php'); ?>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-bed"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Hotel Rooms</span>
                                    <span class="info-box-number">
                                        <?php echo $rooms; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-thumbs-up"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Occupied Room</span>
                                    <span class="info-box-number"><?php echo $rooms_occupied; ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix hidden-md-up"></div>

                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-thumbs-down"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Vacant Rooms</span>
                                    <span class="info-box-number"><?php echo $rooms_vacant; ?></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-shopping-cart"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Rooms Revenue</span>
                                    <span class="info-box-number">
                                        Ksh <?php echo $accomodation; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-shopping-basket"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Resturant Revenue</span>
                                    <span class="info-box-number">Ksh <?php echo $Resturant_Service; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Income As Per Rooms Categories</h5>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="chart">
                                                <canvas id="RoomsIncome" style="height: 200px;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-6 col-6">
                                            <div class="description-block border-right">
                                                <h5 class="description-header">Ksh <?php echo ($Resturant_Service + $accomodation); ?></h5>
                                                <span class="description-text">REVENUE</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <div class="description-block border-right">
                                                <h5 class="description-header">Ksh <?php echo ($Resturant_Service + $accomodation) - ($salary); ?></h5>
                                                <span class="description-text">TOTAL PROFIT</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Number Of Rooms As Per Room Type</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="d-md-flex">
                                        <canvas id="NumberOfRoomsAsType" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Room Reservations Per Room Types</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="d-md-flex">
                                        <div class="table-responsive">
                                            <canvas id="roomReservations" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Recent Rooms Reservations
                                        <!-- <span class="pull-right badge bg-warning">View All</span> -->
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="d-md-flex">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Code
                                                    </th>
                                                    <th>
                                                        Price
                                                    </th>
                                                    <th>
                                                        Client
                                                    </th>
                                                    <th>
                                                        Time Reserved
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $ret = "SELECT * FROM `reservations` ORDER BY `reservations`.`created_at` DESC LIMIT 5  ";
                                                $stmt = $mysqli->prepare($ret);
                                                $stmt->execute(); //ok
                                                $res = $stmt->get_result();
                                                while ($reservation = $res->fetch_object()) {
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <div class="td-content"><span class="badge badge-success"><?php echo $reservation->room_number; ?></span></div>
                                                        </td>

                                                        <td>
                                                            KSH <?php echo $reservation->room_cost; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $reservation->cust_name; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo date('d M Y g:i', strtotime($reservation->created_at)); ?>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Recent Payments</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="d-md-flex">
                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Code
                                                        </th>
                                                        <th>
                                                            Amount
                                                        </th>
                                                        <th>
                                                            Service Paid
                                                        </th>
                                                        <th>
                                                            Paid On
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $ret = "SELECT  * FROM `payments`  ORDER BY `payments`.`created_at` DESC  LIMIT 5 ";
                                                    $stmt = $mysqli->prepare($ret);
                                                    $stmt->execute(); //ok
                                                    $res = $stmt->get_result();
                                                    while ($payments = $res->fetch_object()) {
                                                    ?>
                                                        <tr>
                                                            <td>
                                                                <div class="td-content"><span class="badge badge-success"><?php echo $payments->code; ?></span></div>
                                                            </td>
                                                            <td>
                                                            Ksh <?php echo $payments->amt; ?>
                                                            </td>
                                                            <td>
                                                                 <?php echo $payments->service_paid; ?>
                                                            </td>
                                                            <td>
                                                                <span class="text-center badge bg-primary"><?php echo date('d M Y g:ia', strtotime($payments->created_at)); ?> </span>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Main Footer -->
        <?php require_once('../partials/footer.php'); ?>
    </div>
    <!-- ./wrapper -->

    <?php
    require_once('../partials/scripts.php');
    require_once("../partials/charts.php");
    ?>

</body>

</html>