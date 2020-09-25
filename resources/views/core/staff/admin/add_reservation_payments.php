<?php
session_start();
require_once('configs/config.php');
require_once('configs/checklogin.php');

require_once('partials/_head.php');
?>

<body>

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
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="manage_reservations.php">Reservations</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Add Reservation Payment</span></li>
                            </ol>
                        </nav>

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
        <div class="sidebar-wrapper sidebar-theme">

            <?php require_once('partials/_sidebar.php'); ?>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover" style="width:100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Room Number</th>
                                            <th>Check In</th>
                                            <th>Check Out</th>
                                            <th>Customer Name</th>
                                            <th>Days Reserved</th>
                                            <th>Amount</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $ret = "SELECT * FROM `reservations` WHERE status ='Pending' ";
                                        $stmt = $mysqli->prepare($ret);
                                        $stmt->execute(); //ok
                                        $res = $stmt->get_result();
                                        while ($row = $res->fetch_object()) {
                                            //Get days reserved room
                                            $date1 = date_create("$row->check_in");
                                            $date2 = date_create("$row->check_out");

                                            $diff = date_diff($date1, $date2);
                                            $days_stayed =  $diff->format("%a");

                                            //Payment
                                            $amount = $days_stayed * $row->room_cost;

                                        ?>
                                            <tr>
                                                <td><?php echo $row->room_number; ?></td>
                                                <td><?php echo $row->check_in; ?></td>
                                                <td><?php echo $row->check_out; ?></td>
                                                <td><?php echo $row->cust_name; ?></td>
                                                <td><?php echo $days_stayed;?>Days</td>
                                                <td>Ksh <?php echo $amount;?></td>
                                                <td><?php echo date('d M Y', strtotime($row->created_at)); ?></td>
                                                <td>
                                                    <a class="badge outline-badge-warning text-warning" href="pay_reservation.php?cust_name=<?php echo $row->cust_name; ?>&amt=<?php echo $amount;?>&r_id=<?php echo $row->id;?>&status=Paid">Pay Reservation Fee</a>
                                                </td>
                                            </tr>
                                        <?php
                                        } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php require_once('partials/_footer.php'); ?>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
    <?php require_once('partials/_scripts.php'); ?>
</body>

</html>