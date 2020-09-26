<?php
session_start();
require_once('configs/config.php');
require_once('configs/checklogin.php');
require_once('partials/_head.php');
?>

<body>

    <!--  BEGIN NAVBAR  -->
    <?php
    require_once('partials/_nav.php');
    $view = $_GET['view'];
    $ret = "SELECT * FROM `assets` WHERE id ='$view' ";
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
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="manage_inventory.php">Inventory</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><span>View</span></li>
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

                    <div class="row layout-spacing">

                        <!-- Content -->
                        <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

                            <div class="user-profile layout-spacing">
                                <div class="widget-content widget-content-area">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="text-warning"><?php echo $row->name; ?></h3>
                                        <a href="update_asset.php?update=<?php echo $row->id; ?>" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                <path d="M12 20h9"></path>
                                                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                            </svg></a>
                                    </div>
                                    <div class="text-center user-info">
                                    <img src='assets/img/Asset.jpeg' class='img-fluid img-thumbnail' alt='avatar'>                                        
                                    </div>
                                    <div class="user-info-list">

                                        <div class="">
                                            <ul class="contacts-block list-unstyled">

                                                <li class="contacts-block__item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                                                        <polyline points="23 3 12 14 9 11"></polyline>
                                                    </svg>
                                                    Asset Code: <?php echo $row->code; ?>
                                                </li>

                                                <li class="contacts-block__item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                                                        <polyline points="23 3 12 14 9 11"></polyline>
                                                    </svg>
                                                   Asset Name: <?php echo $row->name; ?>
                                                </li>

                                                <li class="contacts-block__item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                        <path d="M22 11.07V12a10 10 0 1 1-5.93-9.14"></path>
                                                        <polyline points="23 3 12 14 9 11"></polyline>
                                                    </svg>
                                                    Asset Status: 
                                                    <?php 
                                                        if($row->status =='Operational'){
                                                            echo "<span class='badge outline-badge-warning'>$row->status</span>";
                                                        }else{
                                                            echo "<span class='badge outline-badge-danger'>$row->status</span>";
                                                        }
                                                    ?>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="education layout-spacing ">
                                <div class="widget-content widget-content-area">
                                    <h3 class="">Education</h3>
                                    <div class="timeline-alter">
                                        <div class="item-timeline">
                                            <div class="t-meta-date">
                                                <p class="">04 Mar 2009</p>
                                            </div>
                                            <div class="t-dot">
                                            </div>
                                            <div class="t-text">
                                                <p>Royal Collage of Art</p>
                                                <p>Designer Illustrator</p>
                                            </div>
                                        </div>
                                        <div class="item-timeline">
                                            <div class="t-meta-date">
                                                <p class="">25 Apr 2014</p>
                                            </div>
                                            <div class="t-dot">
                                            </div>
                                            <div class="t-text">
                                                <p>Massachusetts Institute of Technology (MIT)</p>
                                                <p>Designer Illustrator</p>
                                            </div>
                                        </div>
                                        <div class="item-timeline">
                                            <div class="t-meta-date">
                                                <p class="">04 Apr 2018</p>
                                            </div>
                                            <div class="t-dot">
                                            </div>
                                            <div class="t-text">
                                                <p>School of Art Institute of Chicago (SAIC)</p>
                                                <p>Designer Illustrator</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="work-experience layout-spacing ">

                                <div class="widget-content widget-content-area">

                                    <h3 class="">Work Experience</h3>

                                    <div class="timeline-alter">

                                        <div class="item-timeline">
                                            <div class="t-meta-date">
                                                <p class="">04 Mar 2009</p>
                                            </div>
                                            <div class="t-dot">
                                            </div>
                                            <div class="t-text">
                                                <p>Netfilx Inc.</p>
                                                <p>Designer Illustrator</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline">
                                            <div class="t-meta-date">
                                                <p class="">25 Apr 2014</p>
                                            </div>
                                            <div class="t-dot">
                                            </div>
                                            <div class="t-text">
                                                <p>Google Inc.</p>
                                                <p>Designer Illustrator</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline">
                                            <div class="t-meta-date">
                                                <p class="">04 Apr 2018</p>
                                            </div>
                                            <div class="t-dot">
                                            </div>
                                            <div class="t-text">
                                                <p>Design Reset Inc.</p>
                                                <p>Designer Illustrator</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div> -->

                        </div>

                        <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

                            <!-- <div class="skills layout-spacing ">
                                <div class="widget-content widget-content-area">
                                    <h3 class="">Skills</h3>
                                    <div class="progress br-30">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-title"><span>PHP</span> <span>25%</span> </div>
                                        </div>
                                    </div>
                                    <div class="progress br-30">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-title"><span>Wordpress</span> <span>50%</span> </div>
                                        </div>
                                    </div>
                                    <div class="progress br-30">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-title"><span>Javascript</span> <span>70%</span> </div>
                                        </div>
                                    </div>
                                    <div class="progress br-30">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-title"><span>jQuery</span> <span>60%</span> </div>
                                        </div>
                                    </div>

                                </div>
                            </div> -->

                            <div class="bio layout-spacing ">
                                <div class="widget-content widget-content-area">
                                    <h3 class="text-warning">Asset Details </h3>
                                    <?php echo $row->details; ?>
                                    <br>
                                    <!-- <div class="bio-skill-box">

                                        <div class="row">

                                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">

                                                <div class="d-flex b-skills">
                                                    <div>
                                                    </div>
                                                    <div class="">
                                                        <h5>Sass Applications</h5>
                                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse eu fugiat nulla pariatur.</p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">

                                                <div class="d-flex b-skills">
                                                    <div>
                                                    </div>
                                                    <div class="">
                                                        <h5>Github Countributer</h5>
                                                        <p>Ut enim ad minim veniam, quis nostrud exercitation aliquip ex ea commodo consequat.</p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-5 ">

                                                <div class="d-flex b-skills">
                                                    <div>
                                                    </div>
                                                    <div class="">
                                                        <h5>Photograhpy</h5>
                                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia anim id est laborum.</p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-0 ">

                                                <div class="d-flex b-skills">
                                                    <div>
                                                    </div>
                                                    <div class="">
                                                        <h5>Mobile Apps</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do et dolore magna aliqua.</p>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php require_once('partials/_footer.php');
        } ?>
            </div>
            <!--  END CONTENT AREA  -->
        </div>
        <!-- END MAIN CONTAINER -->
        <?php require_once('partials/_scripts.php'); ?>
</body>

</html>