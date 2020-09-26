<?php

session_start();
include('configs/config.php');
include('configs/checklogin.php');
include('configs/codeGen.php');
check_login();

if (isset($_POST['update'])) {

    $update = $_POST['update'];
    $code = $_POST['code'];
    $name = $_POST['name'];
    $status = $_POST['status'];
    $details = $_POST['details'];

    $query = "UPDATE assets SET  code =?, name =?, status =?, details =? WHERE id =?";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('sssss', $code, $name, $status, $details, $update);
    $stmt->execute();
    if ($stmt) {
        //inject alert that post is shared  
        $success = "Added" && header("refresh:1; url=manage_inventory.php");
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
    $update = $_GET['update'];
    $ret = "SELECT * FROM `assets` WHERE id ='$update' ";
    $stmt = $mysqli->prepare($ret);
    $stmt->execute(); //ok
    $res = $stmt->get_result();
    while ($row = $res->fetch_object()) {
    ?>
        <!--  END NAVBAR  -->

        <!--  BEGIN NAVBAR  -->
        <div class="sub-header-container">
            <header class="header navbar navbar-expand-sm">
                <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg></a>

                <ul class="navbar-nav flex-row">
                    <li>
                        <div class="page-header">

                            <nav class="breadcrumb-one" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="manage_inventory.php">Inventory</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><span>Update Asset</span></li>
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
                                            <input type="text" name="id" value="<?php echo $staff_id; ?>" class="form-control">
                                            <input type="text" name="status" value="Operational" class="form-control">

                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Asset Code</label>
                                            <input required type="text" value="<?php echo $row->code; ?>" name="code" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Asset Status</label>
                                            <select class='form-control basic' name="status" id="">
                                                <option selected><?php echo $row->status; ?></option>
                                                <option>Operational</option>
                                                <option>Faulty</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Asset Name</label>
                                            <input required type="text" value="<?php echo $row->name; ?>" name="name" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Asset Description</label>
                                            <textarea rows="10" required type="text" id="kbase" name="details" class="form-control"><?php echo $row->details; ?></textarea>
                                        </div>
                                    </div>


                                    <button type="submit" name="update" class="btn btn-warning mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            require_once('partials/_footer.php');
        }
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