<?php
session_start();
require_once('../config/config.php');
require_once('../config/checklogin.php');
sudo(); /* Invoke Admin Check Login */
require_once('../partials/analytics.php');
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
                            <h1>Rooms </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Rooms</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <table id="dt-1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Room Number</th>
                                            <th>Room Type</th>
                                            <th>Room Status</th>
                                            <th>Accomodation Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $ret = "SELECT * FROM `rooms` ";
                                        $stmt = $mysqli->prepare($ret);
                                        $stmt->execute(); //ok
                                        $res = $stmt->get_result();
                                        while ($rooms = $res->fetch_object()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $rooms->number; ?></td>
                                                <td><?php echo $rooms->type; ?></td>
                                                <td>
                                                    <?php
                                                    if ($rooms->status == 'Occupied') {
                                                        echo "<span class='badge bg-danger'>$rooms->status</span>";
                                                    } else {
                                                        echo "<span class='badge bg-warning'>$rooms->status</span>";
                                                    }
                                                    ?>
                                                </td>
                                                <td>Ksh <?php echo $rooms->price; ?></td>
                                                <td>
                                                    <a class="badge bg-success" data-toggle="modal" href="#view-<?php echo $rooms->id; ?>"> <i class="fas fa-eye"></i> View </a>
                                                    <!-- View Modal -->
                                                    <div class="modal fade" id="view-<?php echo $rooms->id; ?>">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title"><?php echo $rooms->number; ?> Details</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body text-center">
                                                                    <?php
                                                                    if ($rooms->image == '') {
                                                                        //Load Default Image
                                                                        echo "<img src='../public/uploads/sys_logo/logo.png'  class='text-center img-fluid ' alt='Room Image'>";
                                                                    } else {
                                                                        echo "<img src='../public/uploads/rooms/$rooms->image'  class=' img-fluid ' alt='Room Image'>";
                                                                    }
                                                                    ?>
                                                                </div>
                                                                <!-- /.card-header -->
                                                                <div class="card-body">
                                                                    <table class="table table-sm">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>
                                                                                    Room Number
                                                                                </th>
                                                                                <th>
                                                                                    Room Price
                                                                                </th>
                                                                                <th>
                                                                                    Room Category
                                                                                </th>
                                                                                <th>
                                                                                    Room Status
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="td-content"><span class="badge badge-success"><?php echo $rooms->number; ?></span></div>
                                                                                </td>

                                                                                <td>
                                                                                    KSH <?php echo $rooms->price; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $rooms->type; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php
                                                                                    if ($rooms->status == 'Occupied') {
                                                                                        echo "<span class='badge bg-danger'>$rooms->status</span>";
                                                                                    } else {
                                                                                        echo "<span class='badge bg-warning'>$rooms->status</span>";
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <br>
                                                                    <h4 class="text-center">Room Details / Distinct Features</h4>
                                                                    <p>
                                                                        <?php echo $rooms->details; ?>
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End View Modal -->

                                                    <!-- Prevent Deleting / Updating Occupied Room -->
                                                    <?php
                                                    if ($rooms->status == 'Occupied') {
                                                    } else {
                                                        //Update And Delete
                                                        echo "<a class='badge bg-primary' href='#update-$rooms->id' data-toggle='modal'> <i class='fas fa-edit'></i> Update </a>";
                                                        echo "<a class='badge bg-danger text-danger' href='#delete-$rooms->id' data-toggle='modal'> <i class='fas fa-trash'></i> Delete </a>";
                                                    }
                                                    ?>
                                                    <!-- Update Modal -->
                                                    <div class="modal fade" id="update-<?php echo $rooms->id; ?>">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Update Room Number: <?php echo $rooms->number; ?></h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" enctype="multipart/form-data">
                                                                        <div class="form-row mb-4">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputEmail4">Room Number</label>
                                                                                <input required type="text" value="<?php echo $rooms->number; ?>" name="number" class="form-control">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputEmail4">Room Type</label>
                                                                                <select class='form-control ' name="type" id="">
                                                                                    <option><?php echo $rooms->type; ?></option>
                                                                                    <option>Single Rooms</option>
                                                                                    <option>Double Rooms</option>
                                                                                    <option>Deluxe Rooms</option>
                                                                                    <option>Regular Suite</option>
                                                                                    <option>Penthouse Suites</option>
                                                                                    <option>Presidential Suites</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-4">
                                                                                <label for="inputEmail4">Room Status</label>
                                                                                <select class='form-control ' name="status" id="">
                                                                                    <option selected><?php echo $rooms->status; ?></option>
                                                                                    <option>Vacant</option>
                                                                                    <option>Occupied</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-4">
                                                                                <label for="exampleInputFile">Room Image</label>
                                                                                <div class="input-group">
                                                                                    <div class="custom-file">
                                                                                        <input required name="image" accept=".png,.jpg" type="file" class="custom-file-input" id="exampleInputFile">
                                                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-4">
                                                                                <label for="inputEmail4">Accomodation Price</label>
                                                                                <input required type="text" value="<?php echo $rooms->price; ?>" name="price" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-row mb-4">
                                                                            <div class="form-group col-md-12">
                                                                                <label for="inputAddress">Room Details</label>
                                                                                <textarea name="details" rows="8" class="form-control"><?php echo $rooms->details; ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    <button type="button" name="update" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Update Modal -->

                                                    <!-- Delete Confirmation -->
                                                    <div class="modal fade" id="delete-<?php echo $rooms->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">CONFIRM</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body text-center text-danger">
                                                                    <h4>Delete Room <?php echo $rooms->number; ?> ?</h4>
                                                                    <br>
                                                                    <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                                                                    <a href="rooms.php?delete=<?php echo $rooms->id; ?>" class="text-center btn btn-danger"> Delete </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Delete Confirmation -->
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
            </section>
        </div>
    </div>
    <?php require_once("../partials/footer.php"); ?>
    </div>
    <?php require_once("../partials/scripts.php"); ?>
</body>

</html>