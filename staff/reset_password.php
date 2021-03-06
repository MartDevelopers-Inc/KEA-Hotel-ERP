<?php
session_start();
include('../config/config.php');

if (isset($_POST['reset_password'])) {
    //prevent posting blank value for first name
    $error = 0;
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
    } else {
        $error = 1;
        $err = "Enter Your Email";
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $err = 'Invalid Email';
    }
    $checkEmail = mysqli_query($mysqli, "SELECT `email` FROM `staffs` WHERE `email` = '" . $_POST['email'] . "'") or exit(mysqli_error($mysqli));
    if (mysqli_num_rows($checkEmail) > 0) {

        $n = date('y');
        $new_password = bin2hex(random_bytes($n));
        //Insert Captured information to a database table
        $query = "UPDATE staffs SET  password=? WHERE email =?";
        $stmt = $mysqli->prepare($query);
        //bind paramaters
        $rc = $stmt->bind_param('ss', $new_password, $email);
        $stmt->execute();
        if ($stmt) {
            /* Alert */
            $_SESSION['email'] = $email;

            $success = "Confim Your Password" && header("refresh:1; url=confirm_password.php");
        } else {
            $err = "Password reset failed";
        }
    } else  // user does not exist
    {
        $err = "Email Does Not Exist";
    }
}

require_once('../partials/head.php');
?>

<body class="hold-transition login-page">
    <div class="login-box">
        <?php
        /* Persist System Settings */
        $ret = "SELECT * FROM `system_settings` ";
        $stmt = $mysqli->prepare($ret);
        $stmt->execute(); //ok
        $res = $stmt->get_result();
        while ($sys = $res->fetch_object()) {
            /* Check For Missing Logo And Load Default */
            if ($sys_logo = '') {
                $logo_dir = '../public/uploads/sys_logo/logo.png';
            } else {
                $logo_dir = "../public/uploads/sys_logo/$sys->sys_logo";
            }
        ?>
            <div class="login-logo">
                <!-- Adjust This Dimensions To Fit Your Logo -->
                <img class="img-fluid" height="100" width="150" src="<?php echo $logo_dir; ?>" alt="">
            </div>
        <?php
        } ?>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Reset Password</p>
                <form method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" name="reset_password" class="btn btn-primary btn-block">Reset Password</button>
                        </div>
                    </div>
                </form>

                <p class="mb-1">
                    <a href="index.php">Remembered Passoword</a>
                </p>
            </div>
        </div>
    </div>
    <!-- /.login-box -->
    <?php require_once('../partials/scripts.php'); ?>

</body>


</html>