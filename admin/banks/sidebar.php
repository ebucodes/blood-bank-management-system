<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../dashboard.php" class="brand-link">
        <img src="../../assets/img/bloodbankicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Blood MS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../assets/img/bloodbankicon.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">NAME: <strong class="text-white"><?php echo $firstname . ' ' . $lastname; ?></strong></a>
                <a href="#" class="d-block">ROLE: <strong class="text-white"><?php echo $role; ?></strong></a>
            </div>
        </div>
        <?php
        if ($role == 'Admin' || $role == 'Manager') {
        ?>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="../dashboard.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <!-- Blood Donation -->
                    <li class="nav-item">
                        <a href="../donation/" class="nav-link">
                            <i class="nav-icon fas fa-heartbeat"></i>
                            <p>Blood Donation</p>
                        </a>
                    </li>
                    <!-- Donors -->
                    <li class="nav-item">
                        <a href="../donors/" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Donors</p>
                        </a>
                    </li>
                    <!-- Blood groups -->
                    <li class="nav-item">
                        <a href="../group/" class="nav-link">
                            <i class="nav-icon fa-solid fa-droplet"></i>
                            <p>Blood Groups</p>
                        </a>
                    </li>
                    <!-- Blood banks -->
                    <li class="nav-item">
                        <a href="../banks/" class="nav-link active">
                            <i class="nav-icon fas fa-bank"></i>
                            <p>Blood Banks</p>
                        </a>
                    </li>
                    <!-- Staffs -->
                    <li class="nav-item">
                        <a href="../staff/" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Staffs</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        <?
        } elseif ($role == 'Scientist') {
        ?>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="../dashboard.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <!-- Blood Donation -->
                    <li class="nav-item">
                        <a href="../donation/" class="nav-link">
                            <i class="nav-icon fas fa-heartbeat"></i>
                            <p>Blood Donation</p>
                        </a>
                    </li>
                    <!-- Donors -->
                    <li class="nav-item">
                        <a href="../donors/" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Donors</p>
                        </a>
                    </li>
                    <!-- Blood groups -->
                    <li class="nav-item">
                        <a href="../group/" class="nav-link">
                            <i class="nav-icon fa-solid fa-droplet"></i>
                            <p>Blood Groups</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        <?php
        } else {
        ?>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="../dashboard.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <!-- Blood Donation -->
                    <li class="nav-item">
                        <a href="../donation/" class="nav-link">
                            <i class="nav-icon fas fa-heartbeat"></i>
                            <p>Blood Donation</p>
                        </a>
                    </li>
                    <!-- Donors -->
                    <li class="nav-item">
                        <a href="../donors/" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Donors</p>
                        </a>
                    </li>
                    <!-- Blood groups -->
                    <li class="nav-item">
                        <a href="../group/" class="nav-link">
                            <i class="nav-icon fa-solid fa-droplet"></i>
                            <p>Blood Groups</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        <?php
        }
        ?>
    </div>
    <!-- /.sidebar -->
</aside>