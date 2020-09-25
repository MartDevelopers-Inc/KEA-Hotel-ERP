<?php
session_start();
require_once('configs/config.php');
require_once('configs/checklogin.php');

//Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $adn = "DELETE FROM payments WHERE id =?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $stmt->close();
    if ($stmt) {
        //inject alert that post is shared  
        $success = "Deleted" && header("refresh:1; url=manage_resturant_sales.php");
    } else {
        //inject alert that task failed
        $info = "Please Try Again Or Try Later";
    }
}

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
                                <li class="breadcrumb-item"><a href="manage_resturant_sales.php">Resturant</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Manage Resturant Sales</span></li>
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

                            <a class="btn btn-outline-warning" href="add_resturant_sale.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="12" y1="18" x2="12" y2="12"></line>
                                    <line x1="9" y1="15" x2="15" y2="15"></line>
                                </svg>

                                Add New Sale Record
                            </a>
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover" style="width:100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Amount</th>
                                            <th>Customer Name</th>
                                            <th>Payment Means</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $ret = "SELECT * FROM `payments` WHERE service_paid ='Resturant Sales' ";
                                        $stmt = $mysqli->prepare($ret);
                                        $stmt->execute(); //ok
                                        $res = $stmt->get_result();
                                        while ($row = $res->fetch_object()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row->code; ?></td>
                                                <td><?php echo $row->amt; ?></td>
                                                <td><?php echo $row->cust_name; ?></td>
                                                <td><?php echo $row->payment_means; ?></td>
                                                <td><?php echo date('d M Y', strtotime($row->created_at)); ?></td>
                                                <td>
                                                    <a class="badge outline-badge-primary" href="update_resturant_sale.php?update=<?php echo $row->id; ?>">Update</a>
                                                    <a class="badge outline-badge-danger text-danger" href="manage_resturant_sales.php?delete=<?php echo $row->id; ?>">Delete</a>
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