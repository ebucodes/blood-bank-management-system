<?php
include("../../includes/session.php");
$get_user_id = $user_info['id'];
$get_firstname = $user_info['firstname'];
$get_lastname = $user_info['lastname'];
$get_gender = $user_info['gender'];
$get_dob = $user_info['dob'];
$get_blood_group = $user_info['blood_group'];
$get_address = $user_info['address'];
$get_state = $user_info['state'];
$get_lga = $user_info['lga'];
$get_email = $user_info['email'];
$get_phone = $user_info['phone'];
?>
<?php
if (isset($_POST['submit'])) {
    $firstname = mysqli_real_escape_string($conn, $get_firstname);
    $lastname = mysqli_real_escape_string($conn, $get_lastname);
    $gender = mysqli_real_escape_string($conn, $get_gender);
    $dob = mysqli_real_escape_string($conn, $get_dob);
    $blood_group = mysqli_real_escape_string($conn, $get_blood_group);
    $address = mysqli_real_escape_string($conn, $get_address);
    $state = mysqli_real_escape_string($conn, $get_state);
    $lga = mysqli_real_escape_string($conn, $get_lga);
    $email = mysqli_real_escape_string($conn, $get_email);
    $phone = mysqli_real_escape_string($conn, $get_phone);
    $user_id = mysqli_real_escape_string($conn, $get_user_id);
    // Calculate the age of the member
    $today = date("Y-m-d");
    $diff = date_diff(
        date_create($dob),
        date_create($today)
    );
    $age = $diff->format('%y');
    $weight = 0;
    $volume = 0;
    $identification_type = "Pending";
    $status = "Pending";
    $donation_date = date('Y-m-d');
    //generate donor ID
    $set = "0123456789";
    $donor = substr(str_shuffle($set), 0, 6);
    // Donor ID
    $donorID = "DONOR-$donor";
    $donor_id = mysqli_real_escape_string($conn, $donorID);
    // Donor query
    $registerQuery = mysqli_query($conn, "INSERT INTO donors (firstname,lastname,gender,dob,age,blood_group,address,state,lga,email,phone,weight,volume,identification_type,status,donation_date,donor_id, user_id) VALUES ('$firstname','$lastname','$gender','$dob','$age', '$blood_group', '$address', '$state', '$lga', '$email', '$phone', '$weight', '$volume', '$identification_type', '$status', '$donation_date', '$donor_id', '$user_id')") or die(mysqli_error($conn));
    if ($registerQuery) {
?>
        <script>
            setTimeout(function() {
                    swal({
                        title: "Successfully",
                        text: "",
                        icon: "success",
                        button: "OK",
                    }).then(function() {
                        window.location.href = "home.php";
                    });
                },
                100);
        </script>
    <?php
    } else {
    ?>
        <script>
            setTimeout(function() {
                    swal({
                        title: "Error",
                        text: "",
                        icon: "error",
                        button: "OK",
                    }).then(function() {
                        window.location.href = "home.php";
                    });
                },
                100);
        </script>
<?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BloodBank MS | User Home Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- DataTable  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
    <!--Main CSS-->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../../index.html">
                    <img src="../../assets/img/bloodbankicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../../index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../about.html">About blood donation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../donation_process.html">Donation
                                process</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../who_can_donate.html">Who can
                                donate?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../blood_directory.php">Where can I donate?</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn btn-primary" href="editProfile.php"><i class="fas fa-user"></i>&nbsp;Edit Profile</a>
                        &nbsp;&nbsp;
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalDefault">
                            <i class="fas fa-sign-out"></i>&nbsp;Sign Out
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
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
                    <a href="../../includes/signOut.php" class="btn btn-danger">Sign Out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Sign Out -->
    <!-- /End of header -->
    <!--why donate section-->
    <section class="py-5 bg-white">
        <div class="container">
            <!--Title-->
            <div class="row">
                <div class="col text-center">
                    <h4 class="display-6 text-uppercase text-danger font-weight-bold mb-4">
                        <strong>View your donation details</strong>
                    </h4>
                    <div class="title-underline bg-danger"></div>
                </div>
            </div>
            <!--end of title-->
            <div class="row">
                <!--single col-->
                <div class="col-md-3 col-lg-3 text-center my-4">
                    <div class="card">
                        <div class="card-header bg-danger">
                            <h4 class="card-title">New Donation</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="home.php">
                                <button type="submit" name="submit" class="btn btn-danger">Donate</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end of single col-->
                <!--single col-->
                <div class="col-md-12 col-lg-12 text-center my-4">
                    <div class="card">
                        <div class="card-header bg-danger">
                            <h4 class="card-title">Blood donation</h4>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-hover table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Donor ID</th>
                                        <th>Date of registration</th>
                                        <th>Status</th>
                                        <th>Quantity donated</th>
                                        <th>Date of donation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($conn, "SELECT * FROM `donors` WHERE `user_id`= '$get_user_id'") or die(mysqli_error($conn));
                                    $count = 1;
                                    while ($row = mysqli_fetch_array($query)) {
                                        $date = $row["created_at"];
                                        $created_at = date('F j, Y, g:i a', strtotime($date));
                                        $date2 = $row["created_at"];
                                        $donated1 = date('F j, Y', strtotime($date2));
                                        $donor_id = $row["donor_id"];
                                        $firstname = $row["firstname"];
                                        $lastname = $row["lastname"];
                                        $status = $row["status"];
                                        $age = $row["age"];
                                        $volume = $row["volume"];
                                        $user_type = $row["user_id"];


                                    ?>
                                        <tr>
                                            <td><?php echo $count++; ?></td>
                                            <td><?php echo $donor_id; ?></td>
                                            <td><?php echo $created_at; ?></td>
                                            <!-- Status -->
                                            <?php
                                            if ($status == 'Donated') {
                                            ?>
                                                <td class="bg-success">
                                                    <?php echo 'Donated'; ?>
                                                </td>
                                                <td>
                                                    <?php echo $volume; ?>&nbsp;ml
                                                </td>
                                                <td>
                                                    <?php echo $donated1; ?>
                                                </td>
                                            <?php
                                            } else {
                                            ?>
                                                <td class="bg-danger">
                                                    <?php echo 'Pending'; ?>
                                                </td>
                                                <td>
                                                    <?php echo 'Not yet donated'; ?>
                                                </td>
                                                <td>
                                                    <?php echo 'Not yet donated'; ?>&nbsp;
                                                </td>
                                            <?php
                                            }
                                            ?>
                                        </tr>
                                    <?php
                                    };
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end of single col-->
            </div>
        </div>
    </section>
    <!--end of why donate section-->
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js" integrity="sha512-pax4MlgXjHEPfCwcJLQhigY7+N8rt6bVvWLFyUMuxShv170X53TRzGPmPkZmGBhk+jikR8WBM4yl7A9WMHHqvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js" integrity="sha512-KBeR1NhClUySj9xBB0+KRqYLPkM6VvXiiWaSz/8LCQNdRpUm38SWUrj0ccNDNSkwCD9qPA4KobLliG26yPppJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/pages/dashboard2.min.js" integrity="sha512-/On5eFU1vz1sGgejVpebEmg91zdKYXBcm4HPzDHcKOF1icilwxSR0C1ClBcK9IodnQdow2HjmHnqxt8PdQRrAA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> <!-- DataTables  & Plugins -->
    <!-- DataTables -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js" integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.dataTables.min.js" integrity="sha512-fQmyZE5e3plaa6ADOXBM17WshoZzDIvo7sR4GC1VsmSKqm13Ed8cO2kPwFPAOoeF0RcdhuQQlPq46X/HnPmllg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables-buttons/2.2.3/js/dataTables.buttons.min.js" integrity="sha512-QT3oEXamRhx0x+SRDcgisygyWze0UicgNLFM9Dj5QfJuu2TVyw7xRQfmB0g7Z5/TgCdYKNW15QumLBGWoPefYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables-buttons/2.2.3/js/buttons.flash.min.js" integrity="sha512-Aw36UN5EXarQmpR93ZaBmbDhVs6/+4XlOd7ciDOnhPDXKEGdrxBRbX2JsrVJ8DtwA3h6TqHnVdH/31dR4Bd78w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables-buttons/2.2.3/js/buttons.print.js" integrity="sha512-3De2ddws/mT13IYh3thpgnXF0b7iIdL4dMRdMB7xTn4eVLCYFJTEiFuZ0HDwSFO37KhhT1fJvuudQaQKYLXFCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables-buttons/2.2.3/js/dataTables.buttons.js" integrity="sha512-1fie3NgPkHrB/HGz+9NbPURndMZ21tJTFMEJAxQUF8wpNd6WUMOpYIaYcYZryXP0yrFGY6fXz192aBMzeD09YQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables-buttons/2.2.3/js/buttons.html5.min.js" integrity="sha512-BdN+kHA7QfWIcQE3WMwSj5QAvVUrSGxJLv7/yuEEypMOZBSJ1VKGr9BSpOew+6va9yfGUACw/8Yt7LKNn3RKRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables-buttons/2.2.3/js/buttons.flash.min.js" integrity="sha512-Aw36UN5EXarQmpR93ZaBmbDhVs6/+4XlOd7ciDOnhPDXKEGdrxBRbX2JsrVJ8DtwA3h6TqHnVdH/31dR4Bd78w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": true,
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true
                //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>