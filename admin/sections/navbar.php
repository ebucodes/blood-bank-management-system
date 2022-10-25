        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalDefault">
                        <i class="fas fa-sign-out"></i>&nbsp;Sign Out
                    </button>
                </li>
            </ul>
        </nav>
        <!-- Sign Out modal -->
        <div class="modal fade text-white" id="exampleModalDefault" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-dark">
                    <div class="modal-header">
                        <h5 class="modal-title" style="color: white;" id="exampleModalLabel">Are You Sure?</h5>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to sign out?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="../includes/signOut.php" class="btn btn-danger">Sign Out</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Sign Out -->
        <!-- /.navbar -->