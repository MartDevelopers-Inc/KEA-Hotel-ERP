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
                            <a class="dropdown-item" data-value="Medical Experts" href="hr_reports.php">Medical Experts</a>
                            <a class="dropdown-item" data-value="Members" href="member_reports.php">Members</a>
                            <a class="dropdown-item" data-value="Packages" href="package_reports.php">Packages</a>
                            <a class="dropdown-item" data-value="Payments" href="payment_reports.php">Payments</a>
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
                                <h5 class="">Enrollments</h5>
                                <ul class="tabs tab-pills">
                                    <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Monthly</a></li>
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
                                <h5 class="">Membership by Packages</h5>
                            </div>
                            <div class="widget-content">
                                <div id="chart-2" class=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-one">
                            <div class="widget-heading">
                                <h5 class="">Recent Membership Fee Payments <span class="badge outline-badge-success"><a href="membership_fee.php">View All</a></span> </h5>
                            </div>

                            <div class="widget-content">
                                <?php
                                $ret = "SELECT * FROM `membership_payments` WHERE status ='Confirmed' ORDER BY `membership_payments`.`created_at` DESC LIMIT 4  ";
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
                                                    <h4><?php echo $row->member_name;?></h4>
                                                    <p class="meta-date"><?php echo date('d M Y g:i', strtotime($row->created_at));?></p>
                                                </div>

                                            </div>
                                            <div class="t-rate rate-dec">
                                                <p>
                                                    <span>KSH <?php echo $row->pay_amt;?></span>
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
                                <h5 class="">Account Info</h5>
                            </div>

                            <div class="widget-content">
                                <div class="invoice-box">

                                    <div class="acc-total-info">
                                        <h5>Account Balance</h5>
                                        <p class="acc-amount">Ksh <?php echo $acc_bal;?>  </p>
                                    </div>

                                    <div class="inv-detail">
                                        <div class="info-detail-1">
                                            <p>Monthly Payments</p>
                                            <p>Ksh <?php echo $membership_payment;?></p>
                                        </div>
                                        <div class="info-detail-2">
                                            <p>Taxes</p>
                                            <p>Ksh <?php echo $tax;?></p>
                                        </div>
                                    </div>

                                    <div class="inv-action">
                                        <a href="membership_fee.php" class="btn btn-dark">View Summary</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-two">

                            <div class="widget-heading">
                                <h5 class="">Recent Joined Doctors</h5>
                            </div>

                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="th-content">Number</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Name</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Email</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">Phone </div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Acc Status</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $ret = "SELECT * FROM `medical_experts` ";
                                            $stmt = $mysqli->prepare($ret);
                                            $stmt->execute(); //ok
                                            $res = $stmt->get_result();
                                            while ($row = $res->fetch_object()) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <div class="td-content product-brand"><?php echo $row->doc_number; ?></div>

                                                    </td>
                                                    <td>
                                                        <div class="td-content product-brand"><?php echo $row->doc_name; ?></div>
                                                    </td>
                                                    <td>
                                                        <div class="td-content"><?php echo $row->doc_email; ?></div>
                                                    </td>
                                                    <td>
                                                        <div class="td-content pricing"><span class=""><?php echo $row->doc_phone; ?></span></div>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($row->doc_status == 'Pending') {
                                                            echo "<div class='td-content'><span class='badge outline-badge-danger'>$row->doc_status</span></div>";
                                                        } else {
                                                            echo "<div class='td-content'><span class='badge outline-badge-success'>$row->doc_status</span></div>";
                                                        }

                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-three">

                            <div class="widget-heading">
                                <h5 class="">Top Selling Packages</h5>
                            </div>

                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="th-content">Package Code</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">Package Name</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">Number Of Members Under Package</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $ret = "SELECT * FROM `packages` ";
                                            $stmt = $mysqli->prepare($ret);
                                            $stmt->execute(); //ok
                                            $res = $stmt->get_result();
                                            while ($row = $res->fetch_object()) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <div class="td-content"><span class="badge outline-badge-success"><?php echo $row->package_id; ?></span></div>
                                                    </td>
                                                    <td>
                                                        <div class="td-content"><span class="pricing"><?php echo $row->package_name; ?></span></div>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $MP = $row->package_name;
                                                        $query = "SELECT COUNT(*) FROM `members` WHERE member_package = '$MP' ";
                                                        $stmt = $mysqli->prepare($query);
                                                        $stmt->execute();
                                                        $stmt->bind_result($members);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                        ?>
                                                        <div class="td-content"><span class="discount-pricing"><?php echo $members; ?> </span></div>
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