<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php
    /* Persisit System Settings On Brand */
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
        <a href="dashboard.php" class="brand-link">
            <img src="<?php echo $logo_dir; ?>" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><?php echo $sys->sys_name; ?></span>
        </a>
    <?php
    } ?>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="rooms.php" class="nav-link">
                        <i class="nav-icon fas fa-bed"></i>
                        <p>
                            Hotel Rooms
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>
                            Reservations
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="reservations.php" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="reservation_payments.php" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Payments</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="resturant_sales.php" class="nav-link">
                        <i class="nav-icon fas fa-utensils"></i>
                        <p>
                            Resturant Sales
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="room_service.php" class="nav-link">
                        <i class="nav-icon fas fa-person-booth"></i>
                        <p>
                            Room Service
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-dolly-flatbed"></i>
                        <p>
                            Inventory
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="inventory_assets.php" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Assets</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="rooms.php" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Rooms</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Reports
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="reports_rooms.php" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Rooms</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="reports_reservations.php" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Reservations</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="reports_revenues.php" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Revenues</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            End Session
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>