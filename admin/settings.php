<?php
session_start();
require_once('../config/config.php');
require_once('../config/checklogin.php');
sudo();

/* System Settings */
if (isset($_POST['systemSettings'])) {
    //Error Handling and prevention of posting double entries
    $error = 0;
    if (isset($_POST['sys_id']) && !empty($_POST['sys_id'])) {
        $sys_id = mysqli_real_escape_string($mysqli, trim($_POST['sys_id']));
    } else {
        $error = 1;
        $err = "System ID Cannot Be Empty";
    }

    if (isset($_POST['sys_name']) && !empty($_POST['sys_name'])) {
        $sys_name = mysqli_real_escape_string($mysqli, trim($_POST['sys_name']));
    } else {
        $error = 1;
        $err = "System Name Cannot Be Empty";
    }

    if (isset($_POST['sys_tagline']) && !empty($_POST['sys_tagline'])) {
        $sys_tagline = mysqli_real_escape_string($mysqli, trim($_POST['sys_tagline']));
    } else {
        $error = 1;
        $err = "System Tagline Cannot Be Empty";
    }


    if (!$error) {
        $sys_logo = $_FILES['sys_logo']['name'];
        move_uploaded_file($_FILES["sys_logo"]["tmp_name"], "../public/uploads/sys_logo/" . $_FILES["sys_logo"]["name"]);
        $query = "UPDATE system_settings SET sys_name=?, sys_logo=?, sys_tagline=?WHERE sys_id = ?";
        $stmt = $mysqli->prepare($query);
        $rc = $stmt->bind_param('ssss',  $sys_name, $sys_logo, $sys_tagline, $sys_id);
        $stmt->execute();
        if ($stmt) {
            $success = "Settings Updated" && header("refresh:1; url=settings.php");
        } else {
            $info = "Please Try Again Or Try Later";
        }
    }
}

/* Home Page Customizations And Other Page */
if (isset($_POST['HomePageCustomizations'])) {
    //Error Handling and prevention of posting double entries
    if (isset($_POST['sys_id']) && !empty($_POST['sys_id'])) {
        $sys_id = mysqli_real_escape_string($mysqli, trim($_POST['sys_id']));
    } else {
        $error = 1;
        $err = "System ID Cannot Be Empty";
    }

    if (isset($_POST['welcome_heading']) && !empty($_POST['welcome_heading'])) {
        $welcome_heading = mysqli_real_escape_string($mysqli, trim($_POST['welcome_heading']));
    } else {
        $error = 1;
        $err = "System Welcome Heading Cannot Be Empty";
    }

    if (isset($_POST['welcome_content']) && !empty($_POST['welcome_content'])) {
        $welcome_content  = mysqli_real_escape_string($mysqli, trim($_POST['welcome_content']));
    } else {
        $error = 1;
        $err = "System Welcome Content Cannot Be Empty";
    }

    

    if (!$error) {
        $query = "UPDATE system_settings SET welcome_heading = ?, welcome_content = ? WHERE sys_id = ?";
        $stmt = $mysqli->prepare($query);
        $rc = $stmt->bind_param('sss',  $welcome_heading, $welcome_content, $sys_id);
        $stmt->execute();
        if ($stmt) {
            $success = "Updated" && header("refresh:1; url=settings.php");
        } else {
            $info = "Please Try Again Or Try Later";
        }
    }
}

/* Contacts Customizations */
if (isset($_POST['ContactsCustomizations'])) {
    //Error Handling and prevention of posting double entries
    if (isset($_POST['sys_id']) && !empty($_POST['sys_id'])) {
        $sys_id = mysqli_real_escape_string($mysqli, trim($_POST['sys_id']));
    } else {
        $error = 1;
        $err = "System ID Cannot Be Empty";
    }

    if (isset($_POST['contacts_phone']) && !empty($_POST['contacts_phone'])) {
        $contacts_phone  = mysqli_real_escape_string($mysqli, trim($_POST['contacts_phone']));
    } else {
        $error = 1;
        $err = "System Phone Number Content Cannot Be Empty";
    }

    if (isset($_POST['contacts_email']) && !empty($_POST['contacts_email'])) {
        $contacts_email  = mysqli_real_escape_string($mysqli, trim($_POST['contacts_email']));
    } else {
        $error = 1;
        $err = "System Email Content Cannot Be Empty";
    }

    if (isset($_POST['contacts_addres']) && !empty($_POST['contacts_addres'])) {
        $contacts_addres   = mysqli_real_escape_string($mysqli, trim($_POST['contacts_addres']));
    } else {
        $error = 1;
        $err = "System Address Content Cannot Be Empty";
    }

    if (isset($_POST['social_fb']) && !empty($_POST['social_fb'])) {
        $social_fb   = mysqli_real_escape_string($mysqli, trim($_POST['social_fb']));
    } else {
        $error = 1;
        $err = "System Facebook Profile Cannot Be Empty";
    }

    if (isset($_POST['social_ig']) && !empty($_POST['social_ig'])) {
        $social_ig   = mysqli_real_escape_string($mysqli, trim($_POST['social_ig']));
    } else {
        $error = 1;
        $err = "System Instagram Content Cannot Be Empty";
    }

    if (isset($_POST['social_twitter']) && !empty($_POST['social_twitter'])) {
        $social_twitter   = mysqli_real_escape_string($mysqli, trim($_POST['social_twitter']));
    } else {
        $error = 1;
        $err = "System Twitter Content Cannot Be Empty";
    }

    /*  if (isset($_POST['contact_about']) && !empty($_POST['contact_about'])) {
        $contact_about   = mysqli_real_escape_string($mysqli, trim($_POST['contact_about']));
    } else {
        $error = 1;
        $err = "System Abou Content Cannot Be Empty";
    } */

    if (!$error) {
        $query = "UPDATE system_settings SET  contacts_phone = ?, contacts_email =?, contacts_addres = ?, social_fb = ?, social_ig = ?, social_twitter = ? WHERE sys_id = ?";
        $stmt = $mysqli->prepare($query);
        $rc = $stmt->bind_param('sssssss',  $contacts_phone, $contacts_email, $contacts_addres, $social_fb, $social_ig, $social_twitter, $sys_id);
        $stmt->execute();
        if ($stmt) {
            $success = "Settings" && header("refresh:1; url=settings.php");
        } else {
            $info = "Please Try Again Or Try Later";
        }
    }
}

/* About Settings */
if (isset($_POST['AboutCustomization'])) {
    //Error Handling and prevention of posting double entries
    if (isset($_POST['sys_id']) && !empty($_POST['sys_id'])) {
        $sys_id = mysqli_real_escape_string($mysqli, trim($_POST['sys_id']));
    } else {
        $error = 1;
        $err = "System ID Cannot Be Empty";
    }

    if (isset($_POST['contact_about']) && !empty($_POST['contact_about'])) {
        $contact_about  = mysqli_real_escape_string($mysqli, trim($_POST['contact_about']));
    } else {
        $error = 1;
        $err = "About Content Cannot Be Empty";
    }

   
    if (!$error) {
        $query = "UPDATE system_settings SET  contact_about = ? WHERE sys_id = ?";
        $stmt = $mysqli->prepare($query);
        $rc = $stmt->bind_param('ss',  $contact_about, $sys_id);
        $stmt->execute();
        if ($stmt) {
            $success = "Settings" && header("refresh:1; url=settings.php");
        } else {
            $info = "Please Try Again Or Try Later";
        }
    }
}

require_once('../partials/head.php');
?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once('../partials/admin_nav.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <?php require_once('../partials/admin_sidebar.php'); ?>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">System Settings</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">System Settings</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <section class="content">
                    <div class="container-fluid">
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-primary card-outline">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Customization</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link " id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home-page" role="tab" aria-controls="custom-content-below-home-page" aria-selected="true">Home Page Customization</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link " id="custom-content-below-home-tab" data-toggle="pill" href="#contact_details" role="tab" aria-controls="custom-content-below-home-page" aria-selected="true">Contact</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link " id="custom-content-below-home-tab" data-toggle="pill" href="#about" role="tab" aria-controls="custom-content-below-home-page" aria-selected="true">About</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="custom-content-below-tabContent">
                                            <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                                                <br>
                                                <?php
                                                /* Persisit System Settings On Brand */
                                                $ret = "SELECT * FROM `system_settings` ";
                                                $stmt = $mysqli->prepare($ret);
                                                $stmt->execute(); //ok
                                                $res = $stmt->get_result();
                                                while ($sys = $res->fetch_object()) {
                                                ?>
                                                    <form method="post" enctype="multipart/form-data" role="form">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="">System Name</label>
                                                                    <input type="text" required name="sys_name" value="<?php echo $sys->sys_name; ?>" class="form-control">
                                                                    <input type="hidden" required name="sys_id" value="<?php echo $sys->sys_id; ?>" class="form-control">

                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label for="">System Logo</label>
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <input required name="sys_logo" type="file" class="custom-file-input">
                                                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="">System Tagline</label>
                                                                    <input type="text" required name="sys_tagline" class="form-control" value="<?php echo $sys->sys_tagline; ?>">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="">System License</label>
                                                                    <textarea rows="10" type="text" readonly name="sys_license" class="form-control"><?php echo $sys->sys_license; ?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-right">
                                                            <button type="submit" name="systemSettings" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                <?php
                                                } ?>
                                            </div>

                                            <div class="tab-pane fade show " id="custom-content-below-home-page" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                                                <br>
                                                <?php
                                                /* Persisit System Settings On Brand */
                                                $ret = "SELECT * FROM `system_settings` ";
                                                $stmt = $mysqli->prepare($ret);
                                                $stmt->execute(); //ok
                                                $res = $stmt->get_result();
                                                while ($sys = $res->fetch_object()) {
                                                ?>
                                                    <form method="post" enctype="multipart/form-data" role="form">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="">Welcome Tagline</label>
                                                                    <input type="text" required name="welcome_heading" value="<?php echo $sys->welcome_heading; ?>" class="form-control">
                                                                    <!-- Sys Id -->
                                                                    <input type="hidden" required name="sys_id" value="<?php echo $sys->sys_id; ?>" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="">Welcome Content</label>
                                                                    <textarea rows="10" type="text" name="welcome_content" class="form-control"><?php echo $sys->welcome_content; ?></textarea>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="text-right">
                                                            <button type="submit" name="HomePageCustomizations" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                <?php
                                                } ?>
                                            </div>

                                            <div class="tab-pane fade show " id="contact_details" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                                                <br>
                                                <?php
                                                /* Persisit System Settings On Brand */
                                                $ret = "SELECT * FROM `system_settings` ";
                                                $stmt = $mysqli->prepare($ret);
                                                $stmt->execute(); //ok
                                                $res = $stmt->get_result();
                                                while ($sys = $res->fetch_object()) {
                                                ?>
                                                    <form method="post" enctype="multipart/form-data" role="form">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <!-- Sys Id -->
                                                                    <input type="hidden" required name="sys_id" value="<?php echo $sys->sys_id; ?>" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="">Contact Phone Number</label>
                                                                    <input type="text" required name="contacts_phone" value="<?php echo $sys->contacts_phone; ?>" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="">Contact Email Address</label>
                                                                    <input type="text" required name="contacts_email" value="<?php echo $sys->contacts_email; ?>" class="form-control">
                                                                </div>

                                                                <div class="form-group col-md-4">
                                                                    <label for="">Facebook Username</label>
                                                                    <input type="text" required name="social_fb" value="<?php echo $sys->social_fb; ?>" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="">Twitter Username</label>
                                                                    <input type="text" required name="social_ig" value="<?php echo $sys->social_ig; ?>" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="">Instagram Username</label>
                                                                    <input type="text" required name="social_twitter" value="<?php echo $sys->social_twitter; ?>" class="form-control">
                                                                </div>

                                                                <div class="form-group col-md-12">
                                                                    <label for="">Physical Address</label>
                                                                    <input type="text" required name="contacts_addres" value="<?php echo $sys->contacts_addres; ?>" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-right">
                                                            <button type="submit" name="ContactsCustomizations" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                <?php
                                                } ?>
                                            </div>

                                            <div class="tab-pane fade show " id="about" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                                                <br>
                                                <?php
                                                /* Persisit System Settings On Brand */
                                                $ret = "SELECT * FROM `system_settings` ";
                                                $stmt = $mysqli->prepare($ret);
                                                $stmt->execute(); //ok
                                                $res = $stmt->get_result();
                                                while ($sys = $res->fetch_object()) {
                                                ?>
                                                    <form method="post" enctype="multipart/form-data" role="form">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <!-- Sys Id -->
                                                                    <input type="hidden" required name="sys_id" value="<?php echo $sys->sys_id; ?>" class="form-control">
                                                                </div>

                                                                <div class="form-group col-md-12">
                                                                    <label for="">About</label>
                                                                    <textarea type="text" rows="10" required name="contact_about" class="form-control"><?php echo $sys->contacts_about;?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-right">
                                                            <button type="submit" name="AboutCustomization" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                <?php
                                                } ?>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Main Footer -->
                <?php require_once('..//partials/footer.php'); ?>
            </div>
        </div>
        <!-- ./wrapper -->
        <?php require_once('../partials/scripts.php'); ?>
</body>

</html>