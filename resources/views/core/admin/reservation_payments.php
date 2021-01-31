<?php
session_start();
require_once('../config/config.php');
require_once('../config/codeGen.php');
require_once('../config/checklogin.php');
sudo(); /* Invoke Admin Check Login */

if (isset($_GET['delete'])) {
    /* Delete Reservation Payment */
    $id = $_GET['delete'];
    $adn = "DELETE FROM payments WHERE id =?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $stmt->close();
    if ($stmt) {
        $success = "Deleted" && header("refresh:1; url=reservation_payments.php");
    } else {
        //inject alert that task failed
        $info = "Please Try Again Or Try Later";
    }
}
require_once("../partials/head.php");
?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once("../partials/admin_nav.php"); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require_once("../partials/admin_sidebar.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Reservations Paymets </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="reservations.php">Reservations</a></li>
                                <li class="breadcrumb-item active">Payments</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <form class="form-inline">
                    </form>
                    <div class="text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_payment">Add Reservation Payment</button>
                    </div>
                    <!-- Add  Modal -->
                    <div class="modal fade" id="add_payment">
                        <div class="modal-dialog  modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Fill All Values </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End  Modal -->

                    <hr>
                    <div class="col-12">
                        <table id="dt-1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Amount</th>
                                    <th>Customer Name</th>
                                    <th>Payment Means</th>
                                    <th>Paid On</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $ret = "SELECT * FROM `payments` WHERE service_paid ='Reservations' ";
                                $stmt = $mysqli->prepare($ret);
                                $stmt->execute(); //ok
                                $res = $stmt->get_result();
                                while ($payments = $res->fetch_object()) {
                                ?>
                                    <tr>
                                        <td><?php echo $payments->code; ?></td>
                                        <td>Ksh <?php echo $payments->amt; ?></td>
                                        <td><?php echo $payments->cust_name; ?></td>
                                        <td><?php echo $payments->payment_means; ?></td>
                                        <td><?php echo date('d M Y', strtotime($payments->created_at)); ?></td>
                                        <td>
                                            <a class="badge badge-danger" data-toggle="modal" href="#delete-<?php echo $payments->id; ?>">Delete</a>
                                            <!-- Delete Confirmation -->
                                            <div class="modal fade" id="delete-<?php echo $payments->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">CONFIRM</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-center text-danger">
                                                            <h4>Delete <?php echo $payments->cust_name; ?> Room Reservation Payment Record ?</h4>
                                                            <br>
                                                            <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                                                            <a href="reservation_payments.php?delete=<?php echo $payments->id; ?>" class="text-center btn btn-danger"> Delete </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Confirmation -->
                                        </td>
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
    <!-- Ajax Scripts -->

</body>

</html>