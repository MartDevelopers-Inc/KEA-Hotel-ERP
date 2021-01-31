<?php
session_start();
require_once('../config/config.php');
require_once('../config/codeGen.php');
require_once('../config/checklogin.php');
sudo(); /* Invoke Admin Check Login */

if (isset($_POST['add'])) {
    /* Error Handling And Add Room */
    $error = 0;
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = mysqli_real_escape_string($mysqli, trim($_POST['id']));
    } else {
        $error = 1;
        $err = "Payment ID  Cannot Be Empty";
    }

    if (isset($_POST['code']) && !empty($_POST['code'])) {
        $code = mysqli_real_escape_string($mysqli, trim($_POST['number']));
    } else {
        $error = 1;
        $err = "Payment Code  Cannot Be Empty";
    }

    if (isset($_POST['payment_means']) && !empty($_POST['payment_means'])) {
        $type = mysqli_real_escape_string($mysqli, trim($_POST['payment_means']));
    } else {
        $error = 1;
        $err = "Payment Means Cannot Be Empty";
    }

    if (isset($_POST['amt']) && !empty($_POST['amt'])) {
        $amt = mysqli_real_escape_string($mysqli, trim($_POST['price']));
    } else {
        $error = 1;
        $err = "Amout Paid Cannot Be Empty";
    }

    if (isset($_POST['cust_name']) && !empty($_POST['cust_name'])) {
        $cust_name = mysqli_real_escape_string($mysqli, trim($_POST['cust_name']));
    } else {
        $error = 1;
        $err = "Customer Name Cannot Be Empty";
    }

    if (isset($_POST['service_paid']) && !empty($_POST['service_paid'])) {
        $service_paid = mysqli_real_escape_string($mysqli, trim($_POST['service_paid']));
    } else {
        $error = 1;
        $err = "Service Paid Cannot Be Empty";
    }

    /* No Need To Do Error Handling On These */
    $month = $_POST['month'];

    $status = $_POST['status'];
    $r_id = $_POST['r_id'];


    if (!$error) {
        //Prevent Double Entries Of Payments
        $sql = "SELECT * FROM  payments WHERE code = '$code'  ";
        $res = mysqli_query($mysqli, $sql);
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            if ($code == $row['code']) {
                $err =  "A Payment With  That Code  Already Exists";
            } else {
                //
            }
        } else {
            $query = "INSERT INTO payments (id, code, payment_means, amt, cust_name, service_paid, month) VALUES (?,?,?,?,?,?,?)";
            $r_qry = "UPDATE reservations SET status =? WHERE id =?";
            $stmt = $mysqli->prepare($query);
            $rstmt = $mysqli->prepare($r_qry);
            $rc = $rstmt->bind_param('ss', $status, $r_id);
            $rc = $stmt->bind_param('sssssss', $id, $code, $payment_means, $amt, $cust_name, $service_paid, $month);
            $stmt->execute();
            $rstmt->execute();
            if ($stmt && $rstmt) {
                $success = "Paid" && header("refresh:1; url=add_reservation_payment.php");
            } else {
                $info = "Please Try Again Or Try Later";
            }
        }
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
                            <h1>Add Reservations Payment</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="reservations.php">Reservations</a></li>
                                <li class="breadcrumb-item"><a href="reservation_payments.php">Payments</a></li>
                                <li class="breadcrumb-item active">Add Payments</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="col-12">
                        <table id="dt-1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Room No</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>
                                    <th>Cust Name</th>
                                    <th>Days Reserved</th>
                                    <th>Amount</th>
                                    <th>Reserved On</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $ret = "SELECT * FROM `reservations` WHERE status ='Pending' ";
                                $stmt = $mysqli->prepare($ret);
                                $stmt->execute(); //ok
                                $res = $stmt->get_result();
                                while ($reservation = $res->fetch_object()) {
                                    //Get days reserved room
                                    $date1 = date_create("$reservation->check_in");
                                    $date2 = date_create("$reservation->check_out");

                                    $diff = date_diff($date1, $date2);
                                    $days_stayed =  $diff->format("%a");

                                    //Payment
                                    $amount = $days_stayed * $reservation->room_cost;

                                ?>
                                    <tr>
                                        <td><?php echo $reservation->room_number; ?></td>
                                        <td><?php echo $reservation->check_in; ?></td>
                                        <td><?php echo $reservation->check_out; ?></td>
                                        <td><?php echo $reservation->cust_name; ?></td>
                                        <td><?php echo $days_stayed; ?> Days</td>
                                        <td>Ksh <?php echo $amount; ?></td>
                                        <td><?php echo date('d M Y', strtotime($reservation->created_at)); ?></td>
                                        <td>
                                            <a class="badge badge-warning" data-toggle="modal" href="#pay_<?php echo $reservation->id; ?>"> Pay Reservation Fee </a>
                                            <!-- Payment Modal -->
                                            <div class="modal fade " id="pay_<?php echo $reservation->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Fill All Values </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" enctype="multipart/form-data">
                                                                <div class="form-row mb-4">
                                                                    <div style="display:none" class="form-group col-md-6">
                                                                        <label for="inputEmail4">Id</label>
                                                                        <input type="text" name="id" value="<?php echo $ID; ?>" class="form-control">
                                                                        <input type="text" name="month" value="<?php echo date('M'); ?>" class="form-control">
                                                                        <input type="text" name="service_paid" value="Reservations" class="form-control">
                                                                        <input type="text" name="r_id" value="<?php echo $reservation->id; ?>" class="form-control">
                                                                        <input type="text" name="status" value="Paid" class="form-control">

                                                                    </div>
                                                                </div>
                                                                <div class="form-row mb-4">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Customer Name</label>
                                                                        <input required type="text" value="<?php echo $reservation->cust_name; ?>" readonly name="cust_name" class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Reservation Amount</label>
                                                                        <input required type="text" value="<?php echo $amount; ?>" readonly name="amt" class="form-control">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Payment Code</label>
                                                                        <input required type="text" value="<?php echo $paycode; ?>" name="code" class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Payment Means</label>
                                                                        <select class='form-control' name="payment_means" id="">
                                                                            <option selected>Cash</option>
                                                                            <option>Mpesa</option>
                                                                            <option>Credit Card</option>
                                                                            <option>Airtel Money</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="text-right">
                                                                    <button type="submit" name="Pay_Reservation" class="btn btn-primary mt-3">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Payment Modal -->
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

</body>

</html>