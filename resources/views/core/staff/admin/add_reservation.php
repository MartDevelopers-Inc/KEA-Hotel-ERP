<?php

session_start();
include('configs/config.php');
include('configs/checklogin.php');
include('configs/codeGen.php');
check_login();

if (isset($_POST['add'])) {

    $id = $_POST['id'];
    $room_id = $_POST['room_id'];
    $room_number = $_POST['room_number'];
    $room_cost = $_POST['room_cost'];
    $room_type = $_POST['room_type'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $cust_name = $_POST['cust_name'];
    $cust_id = $_POST['cust_id'];
    $cust_phone = $_POST['cust_phone'];
    $cust_email = $_POST['cust_email'];
    $cust_adr = $_POST['cust_adr'];
    $status = $_POST['status'];

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
        //inject alert that post is shared  
        $success = "Added" && header("refresh:1; url=manage_reservations.php");
    } else {
        //inject alert that task failed
        $info = "Please Try Again Or Try Later";
    }
}


require_once('partials/_head.php');
?>

<body>

    <!--  BEGIN NAVBAR  -->
    <?php
    require_once('partials/_nav.php');
    ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="manage_reservations.php">Reservations</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Add Reservation</span></li>
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
        <?php require_once('partials/_sidebar.php'); ?>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="form-row mb-4">
                                    <div style="display:none" class="form-group col-md-6">
                                        <label for="inputEmail4">Id</label>
                                        <input type="text" name="id" value="<?php echo $assign_id; ?>" class="form-control">
                                        <input type="text" name="status" value="Pending" class="form-control">
                                        <input type="text" name="room_status" value="Occupied" class="form-control">

                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Room Number</label>
                                        <select id="roomNumber" onChange="getRoomDetails(this.value)" class='form-control basic' name="room_number" id="">
                                            <option selected>Select Room Number</option>
                                            <?php
                                            $ret = "SELECT * FROM `rooms` ";
                                            $stmt = $mysqli->prepare($ret);
                                            $stmt->execute(); //ok
                                            $res = $stmt->get_result();
                                            while ($row = $res->fetch_object()) {
                                            ?>
                                                <option><?php echo $row->number; ?></option>

                                            <?php } ?>

                                        </select>
                                        <input type="hidden" name="room_id" id="RoomID" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Room Cost</label>
                                        <input type="text" readonly id="roomCost" name="room_cost" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Room Type</label>
                                        <input type="text" readonly id="roomType" name="room_type" class="form-control">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Check In</label>
                                        <input type="date"  name="check_in" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Check Out</label>
                                        <input type="date" name="check_out" class="form-control">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Customer Full Name</label>
                                        <input type="text" name="cust_name" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Customer National ID Number</label>
                                        <input type="text" name="cust_id" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Customer Phone</label>
                                        <input type="text" name="cust_phone" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Customer Email</label>
                                        <input type="email" name="cust_email" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Customer Address</label>
                                        <input type="text" name="cust_adr" class="form-control">
                                    </div>
                                </div>

                                <button type="submit" name="add" class="btn btn-warning mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            require_once('partials/_footer.php');
            ?>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <?php
    require_once('partials/_scripts.php');
    ?>
</body>

</html>