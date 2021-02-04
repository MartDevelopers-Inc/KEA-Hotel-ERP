<?php
session_start();
require_once('../config/config.php');
require_once('../config/checklogin.php');
staff();/* Invoke Staff */

if (isset($_POST['Update_Staff'])) {

    /* Update Profile */
    $error = 0;
    if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
        $id = mysqli_real_escape_string($mysqli, trim($_SESSION['id']));
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
   
    if (!$error) {

        $query = "UPDATE staffs SET name =?, number =?, phone =?, email =?, adr =? WHERE id =?";
        $stmt = $mysqli->prepare($query);
        $rc = $stmt->bind_param('ssssss', $name, $number, $phone, $email, $adr, $id);
        $stmt->execute();
        if ($stmt) {
            $success = "Updated" && header("refresh:1; url=profile.php");
        } else {
            //inject alert that task failed
            $info = "Please Try Again Or Try Later";
        }
    }
}


if (isset($_POST['change_password'])) {

    //Change Password
    $error = 0;
    if (isset($_POST['old_password']) && !empty($_POST['old_password'])) {
        $old_password = mysqli_real_escape_string($mysqli, trim(sha1(md5($_POST['old_password']))));
    } else {
        $error = 1;
        $err = "Old Password Cannot Be Empty";
    }
    if (isset($_POST['new_password']) && !empty($_POST['new_password'])) {
        $new_password = mysqli_real_escape_string($mysqli, trim(sha1(md5($_POST['new_password']))));
    } else {
        $error = 1;
        $err = "New Password Cannot Be Empty";
    }
    if (isset($_POST['confirm_password']) && !empty($_POST['confirm_password'])) {
        $confirm_password = mysqli_real_escape_string($mysqli, trim(sha1(md5($_POST['confirm_password']))));
    } else {
        $error = 1;
        $err = "Confirmation Password Cannot Be Empty";
    }

    if (!$error) {
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM  staffs  WHERE id = '$id'";
        $res = mysqli_query($mysqli, $sql);
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            if ($old_password != $row['password']) {
                $err =  "Please Enter Correct Old Password";
            } elseif ($new_password != $confirm_password) {
                $err = "Confirmation Password Does Not Match";
            } else {
                $query = "UPDATE staffs SET  password =? WHERE id =?";
                $stmt = $mysqli->prepare($query);
                $rc = $stmt->bind_param('ss', $new_password, $id);
                $stmt->execute();
                if ($stmt) {
                    $success = "Password Changed" && header("refresh:1; url=profile.php");
                } else {
                    $err = "Please Try Again Or Try Later";
                }
            }
        }
    }
}
require_once('../partials/head.php');
?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once("../partials/admin_nav.php"); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        require_once("../partials/admin_sidebar.php");
        $id = $_SESSION['id'];
        $ret = "SELECT * FROM `staffs` WHERE id ='$id' ";
        $stmt = $mysqli->prepare($ret);
        $stmt->execute(); //ok
        $res = $stmt->get_result();
        while ($staff = $res->fetch_object()) {
        ?>
            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1><?php echo $staff->name; ?> Profile</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">User Profile</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header p-2">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                                            <li class="nav-item"><a class="nav-link " href="#changePassword" data-toggle="tab">Change Password</a></li>
                                        </ul>
                                    </div><!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="active tab-pane" id="settings">
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
                                                            <input type="text" name="number" readonly value="<?php echo $staff->number; ?>" class="form-control">
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

                                                        <div class="form-group col-md-12">
                                                            <label for="inputEmail4">Address</label>
                                                            <input required type="text" value="<?php echo $staff->adr; ?>"" name=" adr" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" name="Update_Staff" class="btn btn-warning mt-3">Submit</button>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="tab-pane" id="changePassword">
                                                <form method='post' class="form-horizontal">
                                                    <div class="form-group row">
                                                        <label for="inputName" class="col-sm-2 col-form-label">Old Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" name="old_password" required class="form-control" id="inputName">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail" class="col-sm-2 col-form-label">New Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" name="new_password" required class="form-control" id="inputEmail">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputName2" class="col-sm-2 col-form-label">Confirm New Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" name="confirm_password" required class="form-control" id="inputName2">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-sm-2 col-sm-10">
                                                            <button type="submit" name="change_password" class="btn btn-primary">Change Password</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <?php require_once('../partials/footer.php');
        } ?>
    </div>

    <?php require_once('../partials/scripts.php'); ?>
</body>

</html>