<?php
session_start();
require_once('../config/config.php');
require_once('../config/codeGen.php');
require_once('../config/checklogin.php');
sudo(); /* Invoke Admin Check Login */

if (isset($_POST['Add_Payroll'])) {
    /* Error Handling  */
    $error = 0;
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = mysqli_real_escape_string($mysqli, trim($_POST['id']));
    } else {
        $error = 1;
        $err = "ID  Cannot Be Empty";
    }

    if (isset($_POST['code']) && !empty($_POST['code'])) {
        $code = mysqli_real_escape_string($mysqli, trim($_POST['code']));
    } else {
        $error = 1;
        $err = "Payroll Code Cannot Be Empty";
    }

    if (isset($_POST['month']) && !empty($_POST['month'])) {
        $month = mysqli_real_escape_string($mysqli, trim($_POST['number']));
    } else {
        $error = 1;
        $err = "Payment Month  Cannot Be Empty";
    }

    if (isset($_POST['staff_id']) && !empty($_POST['staff_id'])) {
        $staff_id = mysqli_real_escape_string($mysqli, trim($_POST['staff_id']));
    } else {
        $error = 1;
        $err = "Staff ID cannot Be Empty";
    }

    if (isset($_POST['staff_name']) && !empty($_POST['staff_name'])) {
        $staff_name = mysqli_real_escape_string($mysqli, trim($_POST['staff_name']));
    } else {
        $error = 1;
        $err = "Staff Name Cannot Be Empty";
    }

    if (isset($_POST['salary']) && !empty($_POST['salary'])) {
        $salary = mysqli_real_escape_string($mysqli, trim($_POST['salary']));
    } else {
        $error = 1;
        $err = "Salary Cannot Be Empty";
    }


    if (!$error) {
        //Prevent Double Entries
        $sql = "SELECT * FROM  payrolls WHERE code = '$code'  ";
        $res = mysqli_query($mysqli, $sql);
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            if ($code == $row['code']) {
                $err =  "A Payroll With That Code  Number Already Exists";
            } else {
                //
            }
        } else {

            $query = "INSERT INTO payrolls (id, code, month, staff_id, staff_name, salary) VALUES (?,?,?,?,?,?)";
            $stmt = $mysqli->prepare($query);
            $rc = $stmt->bind_param('ssssss', $id, $code, $month, $staff_id, $staff_name, $salary);
            $stmt->execute();
            if ($stmt) {
                $success = "Added" && header("refresh:1; url=payrolls.php");
            } else {
                $info = "Please Try Again Or Try Later";
            }
        }
    }
}

if (isset($_POST['Update_Payroll'])) {
    /* Error Handling */
    $error = 0;
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = mysqli_real_escape_string($mysqli, trim($_POST['id']));
    } else {
        $error = 1;
        $err = "ID  Cannot Be Empty";
    }

    if (isset($_POST['code']) && !empty($_POST['code'])) {
        $code = mysqli_real_escape_string($mysqli, trim($_POST['code']));
    } else {
        $error = 1;
        $err = "Payroll Code Cannot Be Empty";
    }

    if (isset($_POST['month']) && !empty($_POST['month'])) {
        $month = mysqli_real_escape_string($mysqli, trim($_POST['number']));
    } else {
        $error = 1;
        $err = "Payment Month  Cannot Be Empty";
    }

    if (isset($_POST['staff_id']) && !empty($_POST['staff_id'])) {
        $staff_id = mysqli_real_escape_string($mysqli, trim($_POST['staff_id']));
    } else {
        $error = 1;
        $err = "Staff ID cannot Be Empty";
    }

    if (isset($_POST['staff_name']) && !empty($_POST['staff_name'])) {
        $staff_name = mysqli_real_escape_string($mysqli, trim($_POST['staff_name']));
    } else {
        $error = 1;
        $err = "Staff Name Cannot Be Empty";
    }

    if (isset($_POST['salary']) && !empty($_POST['salary'])) {
        $salary = mysqli_real_escape_string($mysqli, trim($_POST['salary']));
    } else {
        $error = 1;
        $err = "Salary Cannot Be Empty";
    }

    if (!$error) {

        $query = "UPDATE  payrolls SET code =?, month =?, salary =? WHERE id =?";
        $stmt = $mysqli->prepare($query);
        $rc = $stmt->bind_param('ssss', $code, $month, $salary, $id);
        $stmt->execute();
        if ($stmt) {
            $success = "Updated" && header("refresh:1; url=payrolls.php");
        } else {
            //inject alert that task failed
            $info = "Please Try Again Or Try Later";
        }
    }
}

if (isset($_GET['Delete'])) {
    $delete = $_GET['Delete'];
    $adn = "DELETE FROM payrolls WHERE id =?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('s', $delete);
    $stmt->execute();
    $stmt->close();
    if ($stmt) {
        $success = "Deleted" && header("refresh:1; url=payrolls.php");
    } else {
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
                            <h1>Staffs </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="">HRM</a></li>
                                <li class="breadcrumb-item active">Payrolls</li>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_modal">Add Payroll</button>
                    </div>
                    <!-- Add  Modal -->
                    <div class="modal fade" id="add_modal">
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
                        <table id="dt-1" class="table table-border table-hover">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Month</th>
                                    <th>Amount</th>
                                    <th>Staff Name</th>
                                    <th>Generated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $ret = "SELECT * FROM `payrolls` ";
                                $stmt = $mysqli->prepare($ret);
                                $stmt->execute(); //ok
                                $res = $stmt->get_result();
                                while ($payrolls = $res->fetch_object()) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $payrolls->code; ?>
                                        </td>
                                        <td><?php echo $payrolls->month; ?></td>
                                        <td>Ksh <?php echo $payrolls->salary; ?></td>
                                        <td><?php echo $payrolls->staff_name; ?></td>
                                        <td><?php echo date('d M Y g:i', strtotime($payrolls->created_at)); ?></td>
                                        <td>
                                            <a class="badge badge-primary" data-toggle="modal" href="#view_<?php echo $payrolls->id; ?>">View</a>
                                            <!-- View Modal -->
                                            <div class="modal fade" id="receipt-<?php echo $payrolls->id; ?>">
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
                                                                            Kea Hotels Inc Staff Payroll
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

                                            <a class="badge badge-primary" data-toggle="modal" href="#update_<?php echo $payrolls->id; ?>">Update</a>
                                            <!-- Update Modal -->
                                            <div class="modal fade" id="update_<?php echo $payrolls->id; ?>">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Update <?php echo $payrolls->code; ?></h4>
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

                                            <a class="badge badge-danger" data-toggle="modal" href="#delete_<?php echo $payrolls->id; ?>">Delete</a>
                                            <!-- Delete Modal -->
                                            <div class="modal fade" id="delete_<?php echo $payrolls->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">CONFIRM</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-center text-danger">
                                                            <h4>Delete <?php echo $payrolls->staff_name; ?> Payroll ?</h4>
                                                            <br>
                                                            <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                                                            <a href="payrolls.php?Delete=<?php echo $payrolls->id; ?>" class="text-center btn btn-danger"> Delete </a>
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