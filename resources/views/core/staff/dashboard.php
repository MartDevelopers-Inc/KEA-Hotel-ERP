<?php
session_start();
require_once('configs/config.php');
require_once('configs/checklogin.php');
require_once('partials/_analytics.php');
check_login();
require_once('partials/_head.php');

?>

<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <?php require_once('partials/_nav.php'); ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Main Dashboard</span></li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>
            <ul class="navbar-nav flex-row ml-auto ">
                <li class="nav-item more-dropdown">
                    <div class="dropdown  custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Reports</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg></a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                            <a class="dropdown-item" data-value="Revenue Reports" href="revenue_reports.php">Revenue</a>
                            <a class="dropdown-item" data-value="Reservations" href="reservation_reports.php">Reservations</a>
                            <a class="dropdown-item" data-value="Rooms Reports" href="rooms_reports.php">Room Reports</a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <?php require_once('partials/_sidebar.php'); ?>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">

                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="text-warning">Income Per Month</h5>
                                <ul class="tabs tab-pills">
                                    <?php require_once('partials/_timeAPI.php'); ?>
                                </ul>
                            </div>

                            <div class="widget-content">
                                <div class="tabs tab-content">
                                    <div id="content_1" class="tabcontent">
                                        <div id="revenueMonthly"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-two">
                            <div class="widget-heading">
                                <h5 class="text-warning">Rooms Per Room Type</h5>
                            </div>
                            <div class="widget-content">
                                <div id="chart-2" class=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-one">
                            <div class="widget-heading">
                                <h5 class="text-warning">Recent Room Reservations<span class="badge outline-badge-warning"> <a href="reservation_reports.php"> View All </a></span> </h5>
                            </div>

                            <div class="widget-content">
                                <?php
                                $ret = "SELECT * FROM `reservations` ORDER BY `reservations`.`created_at` DESC LIMIT 4  ";
                                $stmt = $mysqli->prepare($ret);
                                $stmt->execute(); //ok
                                $res = $stmt->get_result();
                                while ($row = $res->fetch_object()) {
                                ?>
                                    <div class="transactions-list">
                                        <div class="t-item">
                                            <div class="t-company-name">
                                                <div class="t-icon">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="t-name">
                                                    <h4><?php echo $row->room_number; ?></h4>
                                                    <p class="meta-date"><?php echo date('d M Y g:i', strtotime($row->created_at)); ?></p>
                                                </div>

                                            </div>
                                            <div class="t-rate rate-dec">
                                                <p>
                                                    <span>KSH <?php echo $row->room_cost; ?></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                        <div class="widget widget-account-invoice-one">

                            <div class="widget-heading">
                                <h5 class="text-warning">Account Info</h5>
                            </div>

                            <div class="widget-content">
                                <div class="invoice-box">

                                    <div class="acc-total-info">
                                        <h5>Account Balance</h5>
                                        <p class="acc-amount">Ksh <?php echo $total_revenue; ?> </p>
                                    </div>

                                    <div class="inv-detail">
                                        <div class="info-detail-1">
                                            <p>Resturant Sales</p>
                                            <p>Ksh <?php echo $Resturant_Service; ?></p>
                                        </div>
                                        <div class="info-detail-2">
                                            <p>Room Reservations</p>
                                            <p>Ksh <?php echo $accomodation; ?></p>
                                        </div>
                                    </div>

                                    <div class="inv-action">
                                        <a href="revenue_reports.php" class="btn btn-dark">View Summary</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-three">

                            <div class="widget-heading">
                                <h5 class="text-warning">Top Reserved Rooms</h5>
                            </div>

                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="th-content">Room Code</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">Room Type</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">Room Price</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">Number Of Times Reserved</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $ret = "SELECT * FROM `rooms` ";
                                            $stmt = $mysqli->prepare($ret);
                                            $stmt->execute(); //ok
                                            $res = $stmt->get_result();
                                            while ($row = $res->fetch_object()) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <div class="td-content"><span class="badge outline-badge-success"><?php echo $row->number; ?></span></div>
                                                    </td>
                                                    <td>
                                                        <div class="td-content"><span class="pricing"><?php echo $row->type; ?></span></div>
                                                    </td>
                                                    <td>
                                                        <div class="td-content"><span class="pricing">Ksh <?php echo $row->price; ?></span></div>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $room = $row->id;
                                                        $query = "SELECT COUNT(*) FROM `reservations` WHERE room_id = '$room' ";
                                                        $stmt = $mysqli->prepare($query);
                                                        $stmt->execute();
                                                        $stmt->bind_result($rooms_count);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                        ?>
                                                        <div class="td-content"><span class="discount-pricing"><?php echo $rooms_count; ?> </span></div>
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
            <?php require_once('partials/_footer.php'); ?>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <?php require_once('partials/_scripts.php'); ?>

</body>

</html>