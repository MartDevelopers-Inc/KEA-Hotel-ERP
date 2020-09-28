<?php
session_start();
require_once('configs/config.php');
require_once('configs/checklogin.php');
/* 
//Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $adn = "DELETE FROM rooms WHERE id =?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $stmt->close();
    if ($stmt) {
        //inject alert that post is shared  
        $success = "Deleted" && header("refresh:1; url=manage_rooms.php");
    } else {
        //inject alert that task failed
        $info = "Please Try Again Or Try Later";
    }
} */

require_once('partials/_head.php');
?>

<body>

    <!--  BEGIN NAVBAR  -->
    <?php require_once('partials/_nav.php'); ?>
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
                                <li class="breadcrumb-item"><a href="rooms_reports.php">Reports</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Rooms Reports</span></li>
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
        <div class="sidebar-wrapper sidebar-theme">

            <?php require_once('partials/_sidebar.php'); ?>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">

                            
                            <div class="table-responsive mb-4 mt-4">
                                <table id="html5-extension" class="table table-hover" style="width:100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Room Number</th>
                                            <th>Room Type</th>
                                            <th>Room Status</th>
                                            <th>Accomodation Price</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $ret = "SELECT * FROM `rooms` ";
                                        $stmt = $mysqli->prepare($ret);
                                        $stmt->execute(); //ok
                                        $res = $stmt->get_result();
                                        while ($row = $res->fetch_object()) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <a href="view_room.php?view=<?php echo $row->id; ?>" class="badge outline-badge-warning"><?php echo $row->number; ?></a></td>
                                                <td><?php echo $row->type; ?></td>
                                                <td>
                                                    <?php
                                                    if ($row->status == 'Occupied') {
                                                        echo "<span class='badge outline-badge-danger'>$row->status</span>";
                                                    } else {
                                                        echo "<span class='badge outline-badge-warning'>$row->status</span>";
                                                    }
                                                    ?>
                                                </td>
                                                <td>Ksh <?php echo $row->price; ?></td>

                                            </tr>
                                        <?php
                                        } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php require_once('partials/_footer.php'); ?>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
    <?php require_once('partials/_scripts.php'); ?>
</body>

</html>