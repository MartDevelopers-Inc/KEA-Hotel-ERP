<?php
session_start();
require_once('../config/config.php');
require_once('../config/codeGen.php');
require_once('../config/checklogin.php');
staff(); /* Invoke Admin Check Login */

if (isset($_POST['Add_Sale'])) {

    /* Error Handling */
    $error = 0;
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = mysqli_real_escape_string($mysqli, trim($_POST['id']));
    } else {
        $error = 1;
        $err = "Payment ID  Cannot Be Empty";
    }

    if (isset($_POST['code']) && !empty($_POST['code'])) {
        $code = mysqli_real_escape_string($mysqli, trim($_POST['code']));
    } else {
        $error = 1;
        $err = "Payment Code  Cannot Be Empty";
    }

    if (isset($_POST['payment_means']) && !empty($_POST['payment_means'])) {
        $payment_means = mysqli_real_escape_string($mysqli, trim($_POST['payment_means']));
    } else {
        $error = 1;
        $err = "Payment Means  Cannot Be Empty";
    }

    if (isset($_POST['amt']) && !empty($_POST['amt'])) {
        $amt = mysqli_real_escape_string($mysqli, trim($_POST['amt']));
    } else {
        $error = 1;
        $err = "Payment Amount  Cannot Be Empty";
    }

    if (isset($_POST['cust_name']) && !empty($_POST['cust_name'])) {
        $cust_name = mysqli_real_escape_string($mysqli, trim($_POST['cust_name']));
    } else {
        $error = 1;
        $err = "Customer Name  Cannot Be Empty";
    }

    if (isset($_POST['service_paid']) && !empty($_POST['service_paid'])) {
        $service_paid = mysqli_real_escape_string($mysqli, trim($_POST['service_paid']));
    } else {
        $error = 1;
        $err = "Service Paid  Cannot Be Empty";
    }

    if (isset($_POST['month']) && !empty($_POST['month'])) {
        $month = mysqli_real_escape_string($mysqli, trim($_POST['month']));
    } else {
        $error = 1;
        $err = "Month Paid  Cannot Be Empty";
    }
    /* Prevent Double Entrie */
    if (!$error) {
        //Prevent Double Entries
        $sql = "SELECT * FROM  payments WHERE code = '$code'  ";
        $res = mysqli_query($mysqli, $sql);
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            if ($code == $row['code']) {
                $err =  "A Payment With That Code  Already Exists";
            } else {
                //
            }
        } else {
            $query = "INSERT INTO payments (id, code, payment_means, amt, cust_name, service_paid, month) VALUES (?,?,?,?,?,?,?)";
            $stmt = $mysqli->prepare($query);
            $rc = $stmt->bind_param('sssssss', $id, $code, $payment_means, $amt, $cust_name, $service_paid, $month);
            $stmt->execute();
            if ($stmt) {
                $success = "Added" && header("refresh:1; url=resturant_sales.php");
            } else {
                $info = "Please Try Again Or Try Later";
            }
        }
    }
}

if (isset($_POST['Update_Sale'])) {

    /* Error Handling And Update Sale */
    $error = 0;
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = mysqli_real_escape_string($mysqli, trim($_POST['id']));
    } else {
        $error = 1;
        $err = "Payment ID  Cannot Be Empty";
    }

    if (isset($_POST['code']) && !empty($_POST['code'])) {
        $code = mysqli_real_escape_string($mysqli, trim($_POST['code']));
    } else {
        $error = 1;
        $err = "Payment Code  Cannot Be Empty";
    }

    if (isset($_POST['payment_means']) && !empty($_POST['payment_means'])) {
        $payment_means = mysqli_real_escape_string($mysqli, trim($_POST['payment_means']));
    } else {
        $error = 1;
        $err = "Payment Means  Cannot Be Empty";
    }

    if (isset($_POST['amt']) && !empty($_POST['amt'])) {
        $amt = mysqli_real_escape_string($mysqli, trim($_POST['amt']));
    } else {
        $error = 1;
        $err = "Payment Amount  Cannot Be Empty";
    }

    if (isset($_POST['cust_name']) && !empty($_POST['cust_name'])) {
        $cust_name = mysqli_real_escape_string($mysqli, trim($_POST['cust_name']));
    } else {
        $error = 1;
        $err = "Customer Name  Cannot Be Empty";
    }

    if (isset($_POST['service_paid']) && !empty($_POST['service_paid'])) {
        $service_paid = mysqli_real_escape_string($mysqli, trim($_POST['service_paid']));
    } else {
        $error = 1;
        $err = "Service Paid  Cannot Be Empty";
    }

    if (isset($_POST['month']) && !empty($_POST['month'])) {
        $month = mysqli_real_escape_string($mysqli, trim($_POST['month']));
    } else {
        $error = 1;
        $err = "Month Paid  Cannot Be Empty";
    }
    /* Prevent Double Entrie */
    if (!$error) {

        $query = "UPDATE payments SET  code =?, payment_means =?, amt =?, cust_name =?, service_paid =?, month =? WHERE id =?";
        $stmt = $mysqli->prepare($query);
        $rc = $stmt->bind_param('sssssss', $code, $payment_means, $amt, $cust_name, $service_paid, $month, $id);
        $stmt->execute();
        if ($stmt) {
            $success = "Added" && header("refresh:1; url=resturant_sales.php");
        } else {
            $info = "Please Try Again Or Try Later";
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
        <?php require_once("../partials/staff_sidebar.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Resturant Sales </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Resturant Sales</li>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-sale">Add Resturant Sale</button>
                    </div>
                    <!-- Add Sale Modal -->
                    <div class="modal fade" id="add-sale">
                        <div class="modal-dialog  modal-xl">
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
                                                <input type="text" name="service_paid" value="Resturant Sales" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Sale Code</label>
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
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Customer Name</label>
                                                <input required type="text" name="cust_name" class="form-control">

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Sales Amount</label>
                                                <input required type="text" name="amt" class="form-control">
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <button type="submit" name="Add_Sale" class="btn btn-primary mt-3">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./End Modal -->
                    <hr>
                    <div class="col-12">
                        <table id="dt-1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Amount</th>
                                    <th>Customer Name</th>
                                    <th>Payment Means</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $ret = "SELECT * FROM `payments` WHERE service_paid ='Resturant Sales' ORDER BY `payments`.`created_at` ASC ";
                                $stmt = $mysqli->prepare($ret);
                                $stmt->execute(); //ok
                                $res = $stmt->get_result();
                                while ($payments = $res->fetch_object()) {
                                ?>
                                    <tr>
                                        <td><?php echo $payments->code; ?></td>
                                        <td><?php echo $payments->amt; ?></td>
                                        <td><?php echo $payments->cust_name; ?></td>
                                        <td><?php echo $payments->payment_means; ?></td>
                                        <td><?php echo date('d M Y g:ia', strtotime($payments->created_at)); ?></td>
                                        <td>
                                            <a class="badge badge-success" data-toggle="modal" href="#receipt-<?php echo $payments->id; ?>">Receipt</a>
                                            <!-- Receipt Modal -->
                                            <div class="modal fade" id="receipt-<?php echo $payments->id; ?>">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div id="Print_Receipt" class="invoice p-3 mb-3">
                                                                <div class="row">
                                                                    <div class="col-12 ">
                                                                        <h4 class="text-center">
                                                                            <img height="100" width="200" src="../public/uploads/sys_logo/logo.png" class="img-thumbnail img-fluid" alt="System Logo">
                                                                            <br>
                                                                            <small class="float-right">Date: <?php echo date('d M Y'); ?></small>
                                                                        </h4>
                                                                        <h4>
                                                                            Kea Hotels Inc
                                                                        </h4>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-12 table-responsive">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Customer Name</th>
                                                                                    <th>Amount Paid</th>
                                                                                    <th>Service Paid</th>
                                                                                    <th>Payment Means</th>
                                                                                    <th>Payment Code</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><?php echo $payments->cust_name; ?></td>
                                                                                    <td>Ksh <?php echo $payments->amt; ?></td>
                                                                                    <td><?php echo $payments->service_paid; ?></td>
                                                                                    <td><?php echo $payments->payment_means; ?></td>
                                                                                    <td><?php echo $payments->code; ?></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                            <button id="print" onclick="printContent('Print_Receipt');" type="button" class="btn btn-primary">Print</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="badge badge-primary" data-toggle="modal" href="#update-<?php echo $payments->id; ?>">Update</a>
                                            <!-- Update Modal -->
                                            <div class="modal fade" id="update-<?php echo $payments->id; ?>">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Update Resturant Sale: <?php echo $payments->cust_name; ?></h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" enctype="multipart/form-data">
                                                                <div class="form-row mb-4">
                                                                    <div style="display:none" class="form-group col-md-6">
                                                                        <label for="inputEmail4">Id</label>
                                                                        <input type="text" name="id" value="<?php echo $payments->id; ?>" class="form-control">
                                                                        <input type="text" name="month" value="<?php echo date('M'); ?>" class="form-control">
                                                                        <input type="text" name="service_paid" value="Resturant Sales" class="form-control">

                                                                    </div>
                                                                </div>
                                                                <div class="form-row mb-4">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Sale Code</label>
                                                                        <input required type="text" value="<?php echo $payments->code; ?>" name="code" class="form-control">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Payment Means</label>
                                                                        <select class='form-control' name="payment_means" id="">
                                                                            <option><?php echo $payments->payment_means; ?></option>
                                                                            <option>Cash</option>
                                                                            <option>Mpesa</option>
                                                                            <option>Credit Card</option>
                                                                            <option>Airtel Money</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Customer Name</label>
                                                                        <input required type="text" value="<?php echo $payments->cust_name; ?>" name="cust_name" class="form-control">

                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Sales Amount</label>
                                                                        <input required type="text" value="<?php echo $payments->amt; ?>" name="amt" class="form-control">
                                                                    </div>
                                                                </div>

                                                                <div class="text-right">
                                                                    <button type="submit" name="Update_Sale" class="btn btn-primary mt-3">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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