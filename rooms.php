<?php
require_once('config/config.php');
require_once('config/codeGen.php');

if (isset($_POST['Add_Reservation'])) {
    /* Error Handling And Add Room */
    $error = 0;
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = mysqli_real_escape_string($mysqli, trim($_POST['id']));
    } else {
        $error = 1;
        $err = "Reservation ID  Cannot Be Empty";
    }

    if (isset($_POST['room_id']) && !empty($_POST['room_id'])) {
        $room_id = mysqli_real_escape_string($mysqli, trim($_POST['room_id']));
    } else {
        $error = 1;
        $err = "Room ID  Cannot Be Empty";
    }

    if (isset($_POST['room_number']) && !empty($_POST['room_number'])) {
        $room_number = mysqli_real_escape_string($mysqli, trim($_POST['room_number']));
    } else {
        $error = 1;
        $err = "Room Number Cannot Be Empty";
    }

    if (isset($_POST['room_cost']) && !empty($_POST['room_cost'])) {
        $room_cost = mysqli_real_escape_string($mysqli, trim($_POST['room_cost']));
    } else {
        $error = 1;
        $err = "Room Price Cannot Be Empty";
    }

    if (isset($_POST['room_type']) && !empty($_POST['room_type'])) {
        $room_type = mysqli_real_escape_string($mysqli, trim($_POST['room_type']));
    } else {
        $error = 1;
        $err = "Room Type Cannot Be Empty";
    }

    if (isset($_POST['check_in']) && !empty($_POST['check_in'])) {
        $check_in = mysqli_real_escape_string($mysqli, trim($_POST['check_in']));
    } else {
        $error = 1;
        $err = "Check In  Cannot Be Empty";
    }

    if (isset($_POST['check_out']) && !empty($_POST['check_out'])) {
        $check_out = mysqli_real_escape_string($mysqli, trim($_POST['check_out']));
    } else {
        $error = 1;
        $err = "Check Out  Cannot Be Empty";
    }

    if (isset($_POST['cust_name']) && !empty($_POST['cust_name'])) {
        $cust_name = mysqli_real_escape_string($mysqli, trim($_POST['cust_name']));
    } else {
        $error = 1;
        $err = "Customer Name  Cannot Be Empty";
    }

    if (isset($_POST['cust_id']) && !empty($_POST['cust_id'])) {
        $cust_id = mysqli_real_escape_string($mysqli, trim($_POST['cust_id']));
    } else {
        $error = 1;
        $err = "Customer National ID  Cannot Be Empty";
    }

    if (isset($_POST['cust_phone']) && !empty($_POST['cust_phone'])) {
        $cust_phone = mysqli_real_escape_string($mysqli, trim($_POST['cust_phone']));
    } else {
        $error = 1;
        $err = "Customer Phone Number Cannot Be Empty";
    }

    if (isset($_POST['cust_email']) && !empty($_POST['cust_email'])) {
        $cust_email = mysqli_real_escape_string($mysqli, trim($_POST['cust_email']));
    } else {
        $error = 1;
        $err = "Customer Email Number Cannot Be Empty";
    }

    if (isset($_POST['cust_adr']) && !empty($_POST['cust_adr'])) {
        $cust_adr = mysqli_real_escape_string($mysqli, trim($_POST['cust_adr']));
    } else {
        $error = 1;
        $err = "Customer Address Cannot Be Empty";
    }

    if (isset($_POST['status']) && !empty($_POST['status'])) {
        $status = mysqli_real_escape_string($mysqli, trim($_POST['status']));
    } else {
        $error = 1;
        $err = "Status Cannot Be Empty";
    }

    if (!$error) {
        //Update Room That It Has Been Occupied
        $room_status = $_POST['room_status'];
        $query = "INSERT INTO reservations (id, room_id, room_number, room_cost, room_type, check_in, check_out, cust_name, cust_id, cust_phone, cust_email, cust_adr, status) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $room_querry = "UPDATE rooms SET status =? WHERE id =?";
        $stmt = $mysqli->prepare($query);
        $roomstmt = $mysqli->prepare($room_querry);
        $rc = $stmt->bind_param('sssssssssssss', $id, $room_id, $room_number, $room_cost, $room_type, $check_in, $check_out, $cust_name, $cust_id, $cust_phone, $cust_email, $cust_adr, $status);
        $rc = $roomstmt->bind_param('ss', $room_status, $room_id);
        $stmt->execute();
        $roomstmt->execute();
        if ($stmt && $roomstmt) {
            $success = "Added" && header("refresh:1; url=rooms.php");
        } else {
            //inject alert that task failed
            $info = "Please Try Again Or Try Later";
        }
    }
}

/* Persist System Settigs On Landing Pages */
$ret = "SELECT * FROM `system_settings` ";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($sys = $res->fetch_object()) {
    if ($sys_logo = '') {
        $logo_dir = 'public/uploads/sys_logo/logo.png';
    } else {
        $logo_dir = "public/uploads/sys_logo/$sys->sys_logo";
    }
    require_once('partials/cms_head.php');
?>

    <body>
        <div class="super_container">
            <?php require_once("partials/cms_nav.php"); ?>


            <div class="home">
                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="public/cms_assets/images/home.jpg" data-speed="0.8"></div>
                <div class="home_container d-flex flex-column align-items-center justify-content-center">
                    <div class="home_title">
                        <h1><?php echo $sys->sys_name; ?> Rooms</h1>
                    </div>
                </div>
            </div>
            <br>
            <div class="rooms">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card-columns">
                                <?php
                                $ret = "SELECT * FROM `rooms`  WHERE status = 'Vacant' ORDER BY RAND() ";
                                $stmt = $mysqli->prepare($ret);
                                $stmt->execute(); //ok
                                $res = $stmt->get_result();
                                while ($rooms = $res->fetch_object()) {
                                    if ($rooms->image == '') {
                                        //Load Default Image
                                        $img_dir =  "public/uploads/sys_logo/logo.png";
                                    } else {
                                        $img_dir =  "public/uploads/rooms/$rooms->image";
                                    }
                                ?>
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo $img_dir; ?>" alt="Room image description">
                                        <div class="card-body">
                                            <div class="rooms_title">
                                                <h2><?php echo $rooms->type; ?></h2>
                                            </div>
                                            <div class="rooms_price">Ksh <?php echo $rooms->price; ?> /<span>Night</span></div>
                                            <div class="button rooms_button"><a data-toggle="modal" href="#book-<?php echo $rooms->id; ?>">Book Now</a></div>
                                        </div>
                                    </div>
                                    <!-- Book Room Modal -->
                                    <div class="modal fade" id="book-<?php echo $rooms->id; ?>">
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
                                                                <input type="text" name="room_id" value="<?php echo $rooms->id; ?>" class="form-control">
                                                                <input type="text" name="status" value="Pending" class="form-control">
                                                                <input type="text" name="room_status" value="Occupied" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-row mb-4" style="display: none;">
                                                            <div class="form-group col-md-4">
                                                                <label for="inputEmail4">Room Number</label>
                                                                <input type="text" readonly value="<?php echo $rooms->number; ?>" name="room_number" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="inputEmail4">Room Cost</label>
                                                                <input type="text" readonly value="<?php echo $rooms->price; ?>"  name="room_cost" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="inputEmail4">Room Type</label>
                                                                <input type="text" readonly value="<?php echo $rooms->type; ?>"  name="room_type" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-row mb-4">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Check In</label>
                                                                <input type="date" name="check_in" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Check Out</label>
                                                                <input type="date" name="check_out" class="form-control">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-row mb-4">
                                                            <div class="form-group col-md-12">
                                                                <label for="inputEmail4">Full Name</label>
                                                                <input type="text" name="cust_name" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">National ID Number</label>
                                                                <input type="text" name="cust_id" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Phone No</label>
                                                                <input type="text" name="cust_phone" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-row mb-4">
                                                            <div class="form-group col-md-12">
                                                                <label for="inputEmail4">Email</label>
                                                                <input type="email" name="cust_email" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="inputEmail4">Address</label>
                                                                <input type="text" name="cust_adr" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="text-right">
                                                            <button type="submit" name="Add_Reservation" class="btn btn-warning mt-3">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Room Modal -->
                                <?php
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="public/cms_assets/images/footer.jpg" data-speed="0.8"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_logo text-center">
                                <a href="#"><img src="images/logo.png" alt=""></a>
                            </div>
                            <div class="footer_content">
                                <div class="row">
                                    <div class="col-lg-4 footer_col">
                                        <div class="footer_info d-flex flex-column align-items-lg-end align-items-center justify-content-start">
                                            <div class="text-center">
                                                <div>Phone:</div>
                                                <div><?php echo $sys->contacts_phone; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 footer_col">
                                        <div class="footer_info d-flex flex-column align-items-center justify-content-start">
                                            <div class="text-center">
                                                <div>Address:</div>
                                                <div><?php echo $sys->contacts_addres; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 footer_col">
                                        <div class="footer_info d-flex flex-column align-items-lg-start align-items-center justify-content-start">
                                            <div class="text-center">
                                                <div>Mail:</div>
                                                <div><?php echo $sys->contacts_email; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php require_once("partials/cms_footer.php"); ?>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <?php require_once("partials/cms_scripts.php"); ?>
    </body>

    </html>
<?php
} ?>