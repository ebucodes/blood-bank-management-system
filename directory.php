<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BloodBank MS | Blood bank directory in Nigeria</title>
    <?php include('assets/cdnLink.php') ?>
    <!--Main CSS-->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/form-validation.css">

</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About blood
                                donation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="donation_process.html">Donation process</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="who_can_donate.html">Who can donate?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="directory.php">Where can I donate?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="request_form.php">Request for Blood</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a href="app/user/" class="btn btn-primary">Login</a>&nbsp;&nbsp;
                        <a href="app/user/register.php" class="btn btn-success">Register</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- /End of header -->
    <!--why donate section-->
    <section class="py-5 bg-white">
        <div class="container">
            <!--Title-->
            <div class="row">
                <div class="col text-center">
                    <h4 class="display-6 text-uppercase text-danger font-weight-bold mb-4">
                        <strong>Where can I donate blood or receive blood in Nigeria?</strong>
                    </h4>
                    <div class="title-underline bg-danger"></div>
                </div>
            </div>
            <!--end of title-->
            <div class="row">
                <!--single col-->
                <div class="col-md-12 col-lg-12 text-center my-4">
                    <div class="card">
                        <div class="card-header bg-danger">
                            <h4 class="card-title">Search by state</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <form class="needs-validation" method="POST" novalidate>
                                        <div class="row g-3">
                                            <!-- State -->
                                            <div class="col-md-3">
                                                <label for="country" class="form-label">State</label>
                                                <select onchange="toggleLGA(this);" name="state" id="state" class="form-control">
                                                    <option disabled>- Select -</option>
                                                    <option value="Abia">Abia</option>
                                                    <option value="Abuja">Abuja</option>
                                                    <option value="Adamawa">Adamawa</option>
                                                    <option value="AkwaIbom">AkwaIbom</option>
                                                    <option value="Anambra">Anambra</option>
                                                    <option value="Bauchi">Bauchi</option>
                                                    <option value="Bayelsa">Bayelsa</option>
                                                    <option value="Benue">Benue</option>
                                                    <option value="Borno">Borno</option>
                                                    <option value="Cross River">Cross River</option>
                                                    <option value="Delta">Delta</option>
                                                    <option value="Ebonyi">Ebonyi</option>
                                                    <option value="Edo">Edo</option>
                                                    <option value="Ekiti">Ekiti</option>
                                                    <option value="Enugu">Enugu</option>
                                                    <option value="Gombe">Gombe</option>
                                                    <option value="Imo">Imo</option>
                                                    <option value="Jigawa">Jigawa</option>
                                                    <option value="Kaduna">Kaduna</option>
                                                    <option value="Kano">Kano</option>
                                                    <option value="Katsina">Katsina</option>
                                                    <option value="Kebbi">Kebbi</option>
                                                    <option value="Kogi">Kogi</option>
                                                    <option value="Kwara">Kwara</option>
                                                    <option value="Lagos">Lagos</option>
                                                    <option value="Nasarawa">Nasarawa</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Ogun">Ogun</option>
                                                    <option value="Ondo">Ondo</option>
                                                    <option value="Osun">Osun</option>
                                                    <option value="Oyo">Oyo</option>
                                                    <option value="Plateau">Plateau</option>
                                                    <option value="Rivers">Rivers</option>
                                                    <option value="Sokoto">Sokoto</option>
                                                    <option value="Taraba">Taraba</option>
                                                    <option value="Yobe">Yobe</option>
                                                    <option value="Zamfara">Zamfara</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a category.
                                                </div>
                                            </div>
                                            <!-- State -->
                                            <div class="col-md-3">
                                                <label class="form-label">LGA</label>
                                                <select name="lga" id="lga" class="form-control select-lga">
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a category.
                                                </div>
                                            </div>
                                            <!-- Search -->
                                            <div class="col-md-3">
                                                <label for="state" class="form-label">&nbsp;</label>
                                                <button class="form-control btn btn-primary" name="search" type="submit">
                                                    <i class="fas fa-search"></i>&nbsp;Search
                                                </button>
                                            </div>
                                            <!-- Reset -->
                                            <div class="col-md-3">
                                                <label for="state" class="form-label">&nbsp;</label>
                                                <button class="form-control btn btn-success" name="reset" type="submit">
                                                    <i class="fas fa-refresh"></i>&nbsp;Reset
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end of single col-->
            </div>
        </div>
    </section>
    <!--end of why donate section-->

    <!--why donate section-->
    <section class="bg-white">
        <div class="container">
            <!--Title-->
            <div class="row">
                <div class="col text-center">
                    <h4 class="display-6 text-uppercase text-danger font-weight-bold">
                        <strong>List of Blood banks in Nigeria</strong>
                    </h4>
                    <div class="title-underline bg-danger"></div>
                </div>
            </div>
            <!--end of title-->
            <div class="row">
                <!--single col-->
                <div class="col-md-12 col-lg-12 text-center my-4">
                    <div class="card">
                        <div class="card-header bg-danger">
                            <h4 class="card-title">Blood banks in Nigeria</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <table id="example1" class="table table-bordered table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>State</th>
                                                <th>LGA</th>
                                                <th>Email address</th>
                                                <th>Phone number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include("includes/config.php");

                                            if (isset($_POST['search'])) {
                                                $state = $_POST['state'];
                                                $lga = $_POST['lga'];

                                                $searchQuery = mysqli_query($conn, "SELECT * FROM banks WHERE state='$state' AND lga='$lga' ORDER BY `lga`;") or die(mysqli_error($conn));
                                                $count = 1;
                                                while ($row = mysqli_fetch_array($searchQuery)) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $count++; ?></td>
                                                        <td><?php echo $row['name']; ?></td>
                                                        <td><?php echo $row['address']; ?></td>
                                                        <td><?php echo $row['state']; ?></td>
                                                        <td><?php echo $row['lga']; ?></td>
                                                        <td><?php echo $row['email']; ?></td>
                                                        <td><?php echo $row['phone']; ?></td>
                                                    </tr>
                                                <?php
                                                }
                                            } elseif (isset($_POST['reset'])) {
                                                $resetQuery = mysqli_query($conn, "SELECT * FROM banks ORDER BY `state`;") or die(mysqli_error($conn));
                                                $count = 1;
                                                while ($row1 = mysqli_fetch_array($resetQuery)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $count++; ?></td>
                                                        <td><?php echo $row1['name']; ?></td>
                                                        <td><?php echo $row1['address']; ?></td>
                                                        <td><?php echo $row1['state']; ?></td>
                                                        <td><?php echo $row1['lga']; ?></td>
                                                        <td><?php echo $row1['email']; ?></td>
                                                        <td><?php echo $row1['phone']; ?></td>
                                                    </tr>
                                                <?php
                                                }
                                            } else {
                                                $resetQuery = mysqli_query($conn, "SELECT * FROM banks ORDER BY `state`;") or die(mysqli_error($conn));
                                                $count = 1;
                                                while ($row1 = mysqli_fetch_array($resetQuery)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $count++; ?></td>
                                                        <td><?php echo $row1['name']; ?></td>
                                                        <td><?php echo $row1['address']; ?></td>
                                                        <td><?php echo $row1['state']; ?></td>
                                                        <td><?php echo $row1['lga']; ?></td>
                                                        <td><?php echo $row1['email']; ?></td>
                                                        <td><?php echo $row1['phone']; ?></td>
                                                    </tr>
                                            <?php
                                                }
                                            };
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end of single col-->
            </div>
        </div>
    </section>
    <!--end of why donate section-->

    <script src="assets/js/lga.min.js"></script>
    <script src="assets/js/form-validation.js"></script>
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
                "buttons": ["csv", "excel"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>