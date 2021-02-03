<?php
session_start();
require_once('../config/config.php');
require_once('../config/codeGen.php');
require_once('../config/checklogin.php');
sudo(); /* Invoke Admin Check Login */

if (isset($_POST['add_asset'])) {
    /* Error Handling  */
    $error = 0;
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = mysqli_real_escape_string($mysqli, trim($_POST['id']));
    } else {
        $error = 1;
        $err = "Asset ID  Cannot Be Empty";
    }

    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = mysqli_real_escape_string($mysqli, trim($_POST['name']));
    } else {
        $error = 1;
        $err = "Asset Name Cannot Be Empty";
    }

    if (isset($_POST['code']) && !empty($_POST['code'])) {
        $code = mysqli_real_escape_string($mysqli, trim($_POST['code']));
    } else {
        $error = 1;
        $err = "Asset Code Cannot Be Empty";
    }

    if (isset($_POST['details']) && !empty($_POST['details'])) {
        $details = mysqli_real_escape_string($mysqli, trim($_POST['details']));
    } else {
        $error = 1;
        $err = "Details Cannot Be Empty";
    }

    if (isset($_POST['status']) && !empty($_POST['status'])) {
        $status = mysqli_real_escape_string($mysqli, trim($_POST['status']));
    } else {
        $error = 1;
        $err = "Status Cannot Be Empty";
    }


    if (!$error) {

        //Prevent Double Entries
        $sql = "SELECT * FROM  assets WHERE code = '$code'  ";
        $res = mysqli_query($mysqli, $sql);
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            if ($code == $row['code']) {
                $err =  "An Asset With That  Code  Number Already Exists";
            } else {
                //
            }
        } else {
            $query = "INSERT INTO assets (id, code, name, details, status) VALUES (?,?,?,?,?)";
            $stmt = $mysqli->prepare($query);
            $rc = $stmt->bind_param('sssss', $id, $code, $name, $details, $status);
            $stmt->execute();
            if ($stmt) {
                $success = "Added" && header("refresh:1; url=inventory_assets.php");
            } else {
                $info = "Please Try Again Or Try Later";
            }
        }
    }
}

if (isset($_POST['Update_Asset'])) {
    /* Error Handling  */
    $error = 0;
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = mysqli_real_escape_string($mysqli, trim($_POST['id']));
    } else {
        $error = 1;
        $err = "Asset ID  Cannot Be Empty";
    }

    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = mysqli_real_escape_string($mysqli, trim($_POST['name']));
    } else {
        $error = 1;
        $err = "Asset Name Cannot Be Empty";
    }

    if (isset($_POST['code']) && !empty($_POST['code'])) {
        $code = mysqli_real_escape_string($mysqli, trim($_POST['code']));
    } else {
        $error = 1;
        $err = "Asset Code Cannot Be Empty";
    }

    if (isset($_POST['details']) && !empty($_POST['details'])) {
        $details = mysqli_real_escape_string($mysqli, trim($_POST['details']));
    } else {
        $error = 1;
        $err = "Details Cannot Be Empty";
    }

    if (isset($_POST['status']) && !empty($_POST['status'])) {
        $status = mysqli_real_escape_string($mysqli, trim($_POST['status']));
    } else {
        $error = 1;
        $err = "Status Cannot Be Empty";
    }


    if (!$error) {

        $query = "UPDATE assets SET code =?, name =?, details =?, status =? WHERE id =?";
        $stmt = $mysqli->prepare($query);
        $rc = $stmt->bind_param('sssss', $code, $name, $details, $status, $id);
        $stmt->execute();
        if ($stmt) {
            $success = "Updated" && header("refresh:1; url=inventory_assets.php");
        } else {
            $info = "Please Try Again Or Try Later";
        }
    }
}


if (isset($_GET['Delete'])) {
    $id = $_GET['Delete'];
    $adn = "DELETE FROM assets WHERE id =?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $stmt->close();
    if ($stmt) {
        $success = "Deleted" && header("refresh:1; url=inventory_assets.php");
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
                            <h1>Hotel Assets Mananagement </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="">Inventory</a></li>
                                <li class="breadcrumb-item active">Assets</li>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_modal">Add Asset</button>
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
                                                <input type="text" name="status" value="Operational" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Asset Code</label>
                                                <input required type="text" value="<?php echo $a; ?>-<?php echo $b; ?>" name="code" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Asset Name</label>
                                                <input required type="text" name="name" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Asset Description</label>
                                                <textarea rows="5" required type="text" name="details" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" name="add_asset" class="btn btn-warning mt-3">Submit</button>
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

                    <hr>
                    <div class="col-12">
                        <table id="dt-1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Asset Code</th>
                                    <th>Asset Name</th>
                                    <th>Asset Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $ret = "SELECT * FROM `assets` ";
                                $stmt = $mysqli->prepare($ret);
                                $stmt->execute(); //ok
                                $res = $stmt->get_result();
                                while ($asset = $res->fetch_object()) {
                                ?>
                                    <tr>
                                        <td><?php echo $asset->code; ?></td>
                                        <td><?php echo $asset->name; ?></td>
                                        <td><?php echo $asset->status; ?></td>
                                        <td><?php echo date('d M Y', strtotime($asset->created_at)); ?></td>
                                        <td>
                                            <a class="badge badge-success" data-toggle="modal" href="#view_<?php echo $asset->id; ?>">View </a>
                                            <!-- View Asset -->
                                            <div class="modal fade" id="view_<?php echo $asset->id; ?>">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div id="Print_Payroll" class="invoice p-3 mb-3">
                                                                <div class="row">
                                                                    <div class="col-12 ">
                                                                        <h4 class="text-center">
                                                                            <img height="100" width="200" src="../public/uploads/sys_logo/logo.png" class="img-thumbnail img-fluid" alt="System Logo">
                                                                            <br>
                                                                            <small class="float-right">Asset Recorded On: <?php echo date('d M Y g:ia', strtotime($asset->created_at)); ?></small>
                                                                        </h4>
                                                                        <h4>
                                                                            Kea Hotels Inc Assets Records
                                                                        </h4>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-12 table-responsive">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Asset Code Number</th>
                                                                                    <th>Asset Name</th>
                                                                                    <th>Asset Status</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><?php echo $asset->code; ?></td>
                                                                                    <td><?php echo $asset->name; ?></td>
                                                                                    <td><?php echo $asset->status; ?></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-12 table-responsive">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="text-center">Asset Description.</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center"><?php echo $asset->details; ?></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                            <button id="print" onclick="printContent('Print_Payroll');" type="button" class="btn btn-primary">Print</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="badge badge-primary" data-toggle="modal" href="#update_<?php echo $asset->id; ?>">Update</a>
                                            <!-- Update Asset -->
                                            <div class="modal fade" id="update_<?php echo $asset->id; ?>">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Update <?php echo $asset->code; ?> <?php echo $asset->code; ?> Record. </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" enctype="multipart/form-data">
                                                                <div class="form-row mb-4">
                                                                    <div style="display:none" class="form-group col-md-6">
                                                                        <label for="inputEmail4">Id</label>
                                                                        <input type="text" name="id" value="<?php echo $asset->id; ?>" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row mb-4">
                                                                    <div class="form-group col-md-4">
                                                                        <label for="inputEmail4">Asset Code</label>
                                                                        <input required type="text" value="<?php echo $asset->code; ?>" name="code" class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="inputEmail4">Asset Status</label>
                                                                        <select class='form-control ' name="status" id="">
                                                                            <option selected><?php echo $asset->status; ?></option>
                                                                            <option>Operational</option>
                                                                            <option>Faulty</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="inputEmail4">Asset Name</label>
                                                                        <input required type="text" value="<?php echo $asset->name; ?>" name="name" class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label for="inputEmail4">Asset Description</label>
                                                                        <textarea rows="5" required type="text" name="details" class="form-control"><?php echo $asset->details; ?></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="text-right">
                                                                    <button type="submit" name="Update_Asset" class="btn btn-warning mt-3">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="badge badge-danger" data-toggle="modal" href="#delete_<?php echo $asset->id; ?>">Delete</a>
                                            <!-- Delete Asset -->
                                            <div class="modal fade" id="delete_<?php echo $asset->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">CONFIRM</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-center text-danger">
                                                            <h4>Delete <?php echo $asset->name; ?> Record ?</h4>
                                                            <br>
                                                            <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                                                            <a href="inventory_assets.php?Delete=<?php echo $asset->id; ?>" class="text-center btn btn-danger"> Delete </a>
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