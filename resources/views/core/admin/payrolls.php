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
    /* Error Handling And Update Room */
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

if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];
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
                                <li class="breadcrumb-item active">Staffs</li>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#import_modal">Import Staff Records</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_modal">Add Staff</button>
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
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="form-row mb-4">
                                            <div style="display:none" class="form-group col-md-6">
                                                <label for="inputEmail4">Id</label>
                                                <input type="text" name="id" value="<?php echo $ID; ?>" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Staff Number</label>
                                                <input type="text" name="number" value="<?php echo $a; ?>-<?php echo $b; ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Full Name</label>
                                                <input required type="text" name="name" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Mobile Phone Number</label>
                                                <input required type="text" name="phone" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email Address</label>
                                                <input required type="text" name="email" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Address</label>
                                                <input required type="text" name="adr" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Password</label>
                                                <input required type="text" name="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" name="Add_Staff" class="btn btn-warning mt-3">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End  Modal -->

                    <!-- Import Modal -->
                    <div class="modal fade" id="import_modal">
                        <div class="modal-dialog  modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="text-center">
                                        Allowed file types: XLS, XLSX.
                                        <a class="text-primary" target="_blank" href="../public/templates/Staff.xlsx">Download</a> A Sample File.
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" enctype="multipart/form-data" role="form">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="exampleInputFile">Select File</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input required name="file" accept=".xls,.xlsx" type="file" class="custom-file-input" id="exampleInputFile">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" name="upload" class="btn btn-primary">Upload File</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Import -->
                    <hr>
                    <div class="col-12">
                        <table id="dt-1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Staff Number</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $ret = "SELECT * FROM `staffs`  ORDER BY `staffs`.`name` ASC ";
                                $stmt = $mysqli->prepare($ret);
                                $stmt->execute(); //ok
                                $res = $stmt->get_result();
                                while ($staff = $res->fetch_object()) {
                                ?>
                                    <tr>
                                        <td><?php echo $staff->number; ?></td>
                                        <td><?php echo $staff->name; ?></td>
                                        <td><?php echo $staff->email; ?></td>
                                        <td><?php echo $staff->phone; ?></td>
                                        <td><?php echo $staff->adr; ?></td>
                                        <td>

                                            <a class="badge badge-primary" data-toggle="modal" href="#update_<?php echo $staff->id; ?>">Update</a>
                                            <!-- Update Modal -->
                                            <div class="modal fade" id="update_<?php echo $staff->id; ?>">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Update <?php echo $staff->name; ?> Details</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" enctype="multipart/form-data">
                                                                <div class="form-row mb-4">
                                                                    <div style="display:none" class="form-group col-md-6">
                                                                        <label for="inputEmail4">Id</label>
                                                                        <input type="text" name="id" value="<?php echo $staff->id; ?>" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row mb-4">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Staff Number</label>
                                                                        <input type="text" name="number" value="<?php echo $staff->number; ?>" class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Full Name</label>
                                                                        <input required type="text" value="<?php echo $staff->name; ?>" name="name" class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Mobile Phone Number</label>
                                                                        <input required type="text" value="<?php echo $staff->phone; ?>" name="phone" class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Email Address</label>
                                                                        <input required type="text" value="<?php echo $staff->email; ?>" name="email" class="form-control">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Address</label>
                                                                        <input required type="text" value="<?php echo $staff->adr; ?>"" name=" adr" class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail4">Password</label>
                                                                        <input required type="text" name="password" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="text-right">
                                                                    <button type="submit" name="Update_Staff" class="btn btn-warning mt-3">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="badge badge-danger" data-toggle="modal" href="#delete_<?php echo $staff->id; ?>">Delete</a>
                                            <!-- Delete Modal -->
                                            <div class="modal fade" id="delete_<?php echo $staff->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">CONFIRM</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-center text-danger">
                                                            <h4>Delete <?php echo $staff->name; ?> - <?php echo $staff->number; ?> ?</h4>
                                                            <br>
                                                            <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                                                            <a href="staffs.php?Delete_Staff=<?php echo $staff->id; ?>" class="text-center btn btn-danger"> Delete </a>
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