<?php
include("../includes/session.php");
include("modal.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel </title>

    <?php include("../includes/cdnLink.php"); ?>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php include("../sections/navbar.php"); ?>

        <!-- Main Sidebar Container -->
        <?php include("sidebar.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4 class="m-0">Welcome, <?php echo $firstname . ' ' . $lastname; ?></h4>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Blood Bank</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                            <!-- Add New Staff -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Add New Blood Bank</h5>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
                                                <i class="fa fa-plus-circle"></i> Add New
                                            </button>
                                            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
                                                Add New
                                            </button> -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- ./card-body -->
                            </div>
                            <!-- /.card -->
                            <!-- List of staff(s) -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">List of Blood Banks</h5>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="example1" class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>Name</th>
                                                        <th>Address</th>
                                                        <th>State</th>
                                                        <!-- <th>L.G.A</th> -->
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $query = mysqli_query($conn, "SELECT * FROM `banks` ORDER BY `state` ASC");
                                                    $count = 1;
                                                    while ($row = mysqli_fetch_array($query)) {
                                                        $d = $row["created_at"];
                                                        $created_at = date('F j, Y, g:i a', strtotime($d))
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $count++; ?></td>
                                                            <td>
                                                                <?php echo ucwords($row['name']); ?>
                                                            </td>
                                                            <td><?php echo $row['address']; ?></td>
                                                            <td><?php echo $row['state']; ?></td>
                                                            <!-- <td><?php echo $row['lga']; ?></td> -->
                                                            <td>
                                                                <a href="#view<?php echo $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#view<?php echo $row['id']; ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                                <a href="#edit<?php echo $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                                                <a href="#edit<?php echo $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#del<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                                <?php include('modal.php'); ?>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    };
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- ./card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?php //include("../sections/footer.php"); 
        ?>
    </div>
    <!-- ./wrapper -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": true,
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "buttons": ["copy", "csv", "excel", "pdf", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>