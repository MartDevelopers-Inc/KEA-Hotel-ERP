<?php
session_start();
require_once('../config/config.php');
require_once('../config/codeGen.php');
require_once('../config/checklogin.php');
sudo(); /* Invoke Admin Check Login */

if (isset($_POST['Add_Staff'])) {
    /* Error Handling And Add Room */
    $error = 0;
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = mysqli_real_escape_string($mysqli, trim($_POST['id']));
    } else {
        $error = 1;
        $err = "Staff ID  Cannot Be Empty";
    }

    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = mysqli_real_escape_string($mysqli, trim($_POST['name']));
    } else {
        $error = 1;
        $err = "Staff Name Cannot Be Empty";
    }

    if (isset($_POST['number']) && !empty($_POST['number'])) {
        $number = mysqli_real_escape_string($mysqli, trim($_POST['number']));
    } else {
        $error = 1;
        $err = "Staff Number  Cannot Be Empty";
    }

    if (isset($_POST['phone']) && !empty($_POST['phone'])) {
        $phone = mysqli_real_escape_string($mysqli, trim($_POST['phone']));
    } else {
        $error = 1;
        $err = "Phone Cannot Be Empty";
    }

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
    } else {
        $error = 1;
        $err = "Email Cannot Be Empty";
    }

    if (isset($_POST['adr']) && !empty($_POST['adr'])) {
        $adr = mysqli_real_escape_string($mysqli, trim($_POST['adr']));
    } else {
        $error = 1;
        $err = "Address Cannot Be Empty";
    }

    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = mysqli_real_escape_string($mysqli, trim(sha1(md5($_POST['password']))));
    } else {
        $error = 1;
        $err = "Password Cannot Be Empty";
    }

    if (!$error) {
        //Prevent Double Entries
        $sql = "SELECT * FROM  staffs WHERE number = '$number'  ";
        $res = mysqli_query($mysqli, $sql);
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            if ($number == $row['number']) {
                $err =  "A Staff With That Number Already Exists";
            } else {
                //
            }
        } else {
            
            $query = "INSERT INTO staffs (id, name, number, phone, email, adr, password) VALUES (?,?,?,?,?,?,?)";
            $stmt = $mysqli->prepare($query);
            $rc = $stmt->bind_param('sssssss', $id, $name, $number, $phone, $email, $adr, $password);
            $stmt->execute();
            if ($stmt) {
                $success = "Added" && header("refresh:1; url=staffs.php");
            } else {
                $info = "Please Try Again Or Try Later";
            }
        }
    }
}

if (isset($_POST['Update_Staff'])) {
    /* Error Handling And Update Room */
    $error = 0;
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = mysqli_real_escape_string($mysqli, trim($_POST['id']));
    } else {
        $error = 1;
        $err = "Room ID  Cannot Be Empty";
    }

    if (isset($_POST['number']) && !empty($_POST['number'])) {
        $number = mysqli_real_escape_string($mysqli, trim($_POST['number']));
    } else {
        $error = 1;
        $err = "Room Number  Cannot Be Empty";
    }

    if (isset($_POST['type']) && !empty($_POST['type'])) {
        $type = mysqli_real_escape_string($mysqli, trim($_POST['type']));
    } else {
        $error = 1;
        $err = "Room Type Cannot Be Empty";
    }

    if (isset($_POST['price']) && !empty($_POST['price'])) {
        $price = mysqli_real_escape_string($mysqli, trim($_POST['price']));
    } else {
        $error = 1;
        $err = "Room Price Cannot Be Empty";
    }

    if (isset($_POST['status']) && !empty($_POST['status'])) {
        $status = mysqli_real_escape_string($mysqli, trim($_POST['status']));
    } else {
        $error = 1;
        $err = "Room Status Cannot Be Empty";
    }

    if (isset($_POST['details']) && !empty($_POST['details'])) {
        $details = mysqli_real_escape_string($mysqli, trim($_POST['details']));
    } else {
        $error = 1;
        $err = "Room details Cannot Be Empty";
    }

    if (!$error) {
       
        $query = "UPDATE rooms SET number =?, type =?, price =?, status =?, details =?, image =? WHERE id =?";
        $stmt = $mysqli->prepare($query);
        $rc = $stmt->bind_param('sssssss', $number, $type, $price, $status, $details, $image, $id);
        $stmt->execute();
        if ($stmt) {
            $success = "Updated" && header("refresh:1; url=rooms.php");
        } else {
            //inject alert that task failed
            $info = "Please Try Again Or Try Later";
        }
    }
}

if (isset($_GET['Delete_Staff'])) {
    /* Delete Room */
    $id = $_GET['Delete_Room'];
    $adn = "DELETE FROM rooms WHERE id =?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $stmt->close();
    if ($stmt) {
        $success = "Deleted" && header("refresh:1; url=staffs.php");
    } else {
        //inject alert that task failed
        $info = "Please Try Again Or Try Later";
    }
}

/* Bulk Import Staffs With Excel */
use keaHotelERP\DataSource;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

require_once '../config/DataSource.php';
$db = new DataSource();
$conn = $db->getConnection();
require_once '../vendor/autoload.php';

if (isset($_POST['upload'])) {
    $allowedFileType = [
        'application/vnd.ms-excel',
        'text/xls',
        'text/xlsx',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    ];

    if (in_array($_FILES['file']['type'], $allowedFileType)) {
        $targetPath =
            '../public/uploads/sys_data/xls/' . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);

        $Reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

        $spreadSheet = $Reader->load($targetPath);
        $excelSheet = $spreadSheet->getActiveSheet();
        $spreadSheetAry = $excelSheet->toArray();
        $sheetCount = count($spreadSheetAry);

        for ($i = 1; $i <= $sheetCount; $i++) {
            $id = '';
            if (isset($spreadSheetAry[$i][0])) {
                $id = mysqli_real_escape_string($conn, $spreadSheetAry[$i][0]);
            }

            $name  = '';
            if (isset($spreadSheetAry[$i][1])) {
                $name  = mysqli_real_escape_string(
                    $conn,
                    $spreadSheetAry[$i][1]
                );
            }

            $number  = '';
            if (isset($spreadSheetAry[$i][2])) {
                $number  = mysqli_real_escape_string(
                    $conn,
                    $spreadSheetAry[$i][2]
                );
            }

            $phone  = '';
            if (isset($spreadSheetAry[$i][3])) {
                $phone  = mysqli_real_escape_string($conn, $spreadSheetAry[$i][3]);
            }

            $email = '';
            if (isset($spreadSheetAry[$i][4])) {
                $email = mysqli_real_escape_string(
                    $conn,
                    $spreadSheetAry[$i][4]
                );
            }

            $adr = '';
            if (isset($spreadSheetAry[$i][5])) {
                $adr = mysqli_real_escape_string(
                    $conn,
                    $spreadSheetAry[$i][5]
                );
            }

            /* Convert A Plain Text To Bunch Of Mumble Jumble */
            $password = '';
            if (isset($spreadSheetAry[$i][6])) {
                $password = sha1(md5(mysqli_real_escape_string(
                    $conn,
                    $spreadSheetAry[$i][6]
                )));
            }

            
            if (
                !empty($id) ||
                !empty($number) ||
                !empty($phone) ||
                !empty($email) ||
                !empty($password)
            ) {
                $query ='INSERT INTO staffs (id, name, number, phone, email, adr, password) VALUES (?,?,?,?,?,?,?)';
                $paramType = 'sssssss';
                $paramArray = [$id, $name, $number, $phone, $email, $adr, $password];
                $insertId = $db->insert($query, $paramType, $paramArray);
                if (!empty($insertId)) {
                    $err = 'Error Occured While Importing Data';
                } else {
                    $success = 'Staff Data Imported';
                }
            }
        }
    } else {
        $info = 'Invalid File Type. Upload Excel File.';
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
                <div class="container-fluid">
                    <form class="form-inline">
                    </form>
                    <div class="text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#import_modal">Import Rooms</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-room">Add Room</button>
                    </div>
                    <!-- Add  Modal -->
                    <div class="modal fade" id="add-room">
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
                                                <input type="text" name="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Room Number</label>
                                                <input required type="text" value="<?php echo $a; ?>-<?php echo $b; ?>" name="number" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Room Type</label>
                                                <select class='form-control' name="type" id="">
                                                    <option selected>Select Room Type</option>
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
                                                <select class='form-control' name="status" id="">
                                                    <option selected>Vacant</option>
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
                                                <input required type="text" name="price" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-12">
                                                <label for="inputAddress">Room Details</label>
                                                <textarea name="details" rows="6" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" name="Add_Room" class="btn btn-primary">Add Room</button>
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

                    <!-- Import Rooms -->
                    <div class="modal fade" id="import_modal">
                        <div class="modal-dialog  modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="text-center">
                                        Allowed file types: XLS, XLSX.
                                        <a class="text-primary" target="_blank" href="../public/templates/Rooms.xlsx">Download</a> A Sample File.
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
                                                                        <!-- Hide This -->
                                                                        <input required type="hidden" value="<?php echo $rooms->id; ?>" name="id" class="form-control">
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
                                                                <div class="text-right">
                                                                    <button type="submit" name="Update_Room" class="btn btn-primary">Update Room</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                                                            <a href="rooms.php?Delete_Room=<?php echo $rooms->id; ?>" class="text-center btn btn-danger"> Delete </a>
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
            </section>
        </div>
        <?php require_once("../partials/footer.php"); ?>
    </div>
    <?php require_once("../partials/scripts.php"); ?>
</body>

</html>