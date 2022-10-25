<?php
include("../includes/session.php");
?>
<?php
if (isset($_POST["register"])) {
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $dob = mysqli_real_escape_string($conn, $_POST["dob"]);
    $blood_group = mysqli_real_escape_string($conn, $_POST["blood_group"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $state = mysqli_real_escape_string($conn, $_POST["state"]);
    $lga = mysqli_real_escape_string($conn, $_POST["lga"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $weight = mysqli_real_escape_string($conn, $_POST["weight"]);
    $volume = mysqli_real_escape_string($conn, $_POST["volume"]);
    $identification_type = mysqli_real_escape_string($conn, $_POST["identification_type"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    $raw_date = $_POST['donation_date'];
    $donation_date = date('Y-m-d', strtotime($raw_date));
    // Calculate the age of the member
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dob), date_create($today));
    $age = $diff->format('%y');
    $user_id = 'Guest';
    //generate donor ID
    $set = "0123456789";
    $donor = substr(str_shuffle($set), 0, 6);
    // Donor ID
    $donorID = "DONOR-$donor";
    $donor_id = mysqli_real_escape_string($conn, $donorID);
    if ($age < 18) {
        echo "<script>alert('Donor not old enough');</script>";
    } elseif ($weight < 50) {
        echo "<script>alert('Weight below 50');</script>";
    } else {
        $registerQuery = mysqli_query($conn, "INSERT INTO donors (firstname,lastname,gender,dob,blood_group,address,state,lga,email,phone,weight,volume,identification_type,status,donation_date,donor_id, user_id) VALUES ('$firstname','$lastname','$gender','$dob', '$blood_group', '$address', '$state', '$lga', '$email', '$phone', '$weight', '$volume', '$identification_type', '$status', '$donation_date', '$donor_id', '$user_id')") or die(mysqli_error($conn));
        if ($registerQuery) {
?>
            <script>
                setTimeout(function() {
                        swal({
                            title: "Success",
                            text: "",
                            icon: "success",
                            button: "OK",
                        }).then(function() {
                            window.location.href = "index.php";
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
                            window.location.href = "index.php";
                        });
                    },
                    100);
            </script>
<?php
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel </title>

    <?php include("../includes/cdnLink.php"); ?>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
    <script type="text/javascript" src="lga.min.js"></script>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php include("../sections/navbar.php"); ?>

        <!-- Main Sidebar Container -->
        <?php include("sidebar.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Donor registration form</h3>
                        </div>
                        <!-- /.card-header -->
                        <form method="POST" class="needs-validation" autocomplete="on" novalidate>
                            <div class="card-body">
                                <!-- Row 1 -->
                                <div class="row">
                                    <!-- Firstname -->
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname" class="form-label">First name</label>&nbsp;<span style="color: red;">*</span>
                                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Your first name" value="" required>
                                            <div class="invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.Firstname -->
                                    <!-- Lastname -->
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname" class="form-label">Last name</label>&nbsp;<span style="color: red;">*</span>
                                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Your last name" required>
                                            <div class="invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.Lastname -->
                                </div>
                                <!-- /.row -->
                                <!-- Row 2 -->
                                <div class="row">
                                    <!-- Gender -->
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Gender</label>&nbsp;<span style="color: red;">*</span>
                                            <select class="form-select select2" data-dropdown-css-class="select2-purple" style="width: 100%;" data-placeholder="What's your Gender?" name="gender" aria-label=".form-select-sm example">
                                                <option disabled>Gender?</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.Gender -->
                                    <!-- Date of Birth -->
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Date of Birth</label>&nbsp;<span style="color: red;">*</span>
                                            <input type="date" name="dob" class="form-control" placeholder="Age" required>
                                            <div class=" invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.D.O.B -->
                                    <!-- Blood group -->
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Blood Group</label>&nbsp;<span style="color: red;">*</span>
                                            <select class="form-select select2" name="blood_group" aria-label=".form-select-sm example">
                                                <option disabled>What's Blood Group?</option>
                                                <?php
                                                $query = mysqli_query($conn, "SELECT * FROM blood_groups") or die(mysqli_error($conn));
                                                while ($row = mysqli_fetch_assoc($query)) {
                                                ?>
                                                    <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                <!-- Row 3 -->
                                <div class="row">
                                    <!-- Address -->
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Contact Address</label>&nbsp;<span style="color: red;">*</span>
                                            <input type="text" name="address" class="form-control" placeholder="Your house address" required>
                                            <div class=" invalid-feedback">
                                                This is a required field.
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <!-- State -->
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">State</label>&nbsp;<span style="color: red;">*</span>
                                            <select onchange="toggleLGA(this);" name="state" id="state" class="form-control" required>
                                                <option value="" selected="selected" disabled>Select state</option>
                                                <option value="Abia">Abia</option>
                                                <option value="Adamawa">Adamawa</option>
                                                <option value="AkwaIbom">AkwaIbom</option>
                                                <option value="Anambra">Anambra</option>
                                                <option value="Bauchi">Bauchi</option>
                                                <option value="Bayelsa">Bayelsa</option>
                                                <option value="Benue">Benue</option>
                                                <option value="Borno">Borno</option>
                                                <option value="CrossRiver">CrossRiver</option>
                                                <option value="Delta">Delta</option>
                                                <option value="Ebonyi">Ebonyi</option>
                                                <option value="Edo">Edo</option>
                                                <option value="Ekiti">Ekiti</option>
                                                <option value="Enugu">Enugu</option>
                                                <option value="FCT">FCT</option>
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
                                                This field is required.
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <!-- LGA -->
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Local Government</label>&nbsp;<span style="color: red;">*</span>
                                            <select name="lga" id="lga" class="form-control select-lga" required>
                                            </select>
                                            <div class=" invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                <!-- Row 4 -->
                                <div class="row">
                                    <!-- Email Address -->
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email Address</label>&nbsp;<span style="color: red;">*</span>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Your email address" required>
                                            <div class="invalid-feedback">
                                                Please enter a valid email address.
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <!-- Phone number -->
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone Number</label>&nbsp;<span style="color: red;">*</span>
                                            <input type="tel" name="phone" class="form-control" id="address" minlength="11" maxlength="11" placeholder="Your contact phone number" required>
                                            <div class="invalid-feedback">
                                                Phone number is required
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                <!-- Row 5 -->
                                <div class="row">
                                    <!-- Weight -->
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Donor's Weight (kg)</label>&nbsp;<span style="color: red;">*</span>
                                            <input type="number" name="weight" class="form-control" placeholder="Donor's weight" required>
                                            <div class="invalid-feedback">
                                                This field is required
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <!-- Volume -->
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Volume (ml)</label>&nbsp;<span style="color: red;">*</span>
                                            <input type="number" name="volume" class="form-control" placeholder="Quantity of blood to donate" required>
                                            <div class="invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <!-- /.form-group -->

                                    </div>
                                    <!-- /.col -->
                                    <!-- Identification -->
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Method of Identification</label>&nbsp;<span style="color: red;">*</span>
                                            <select class="form-select select2" name="identification_type" data-dropdown-css-class="select2-purple" style="width: 100%;" data-placeholder="What's your Gender?" aria-label=".form-select-sm example">
                                                <option disabled>Identification type?</option>
                                                <option value="National ID Card">National ID Card</option>
                                                <option value="Driver's License">Driver's License</option>
                                                <option value="Voter's Card">Voter's Card</option>
                                                <option value="International Passport">International Passport</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Valid method of Identification is required.
                                            </div>
                                        </div>
                                        <!-- /.form-group -->

                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                <!-- Row 6 -->
                                <div class="row">
                                    <!-- Status -->
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Status</label>&nbsp;<span style="color: red;">*</span>
                                            <select class="form-select select2" name="status" data-dropdown-css-class="select2-purple" style="width: 100%;" data-placeholder="What's your Gender?" aria-label=".form-select-sm example">
                                                <option disabled>Status of Donation?</option>
                                                <option>Pending</option>
                                                <option>Donated</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <!-- /.form-group -->

                                    </div>
                                    <!-- /.col -->
                                    <!-- Donation date -->
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Date of Donation</label>&nbsp;
                                            <span style="color: red;">*</span>
                                            <input type="date" name="donation_date" class="form-control" placeholder="Date of Donation" required>
                                            <div class=" invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.D.O.B -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class="card-footer">
                                <button name="register" class="btn btn-primary" type="submit">Register</button>
                                <a href="index.php" class="btn btn-danger" tooltip="Go back to homepage" role="button">Back</a>
                            </div>
                        </form>
                        <!-- /.card -->
                    </div>
                    <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class=" control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?php //include("../sections/footer.php"); 
        ?>
    </div>
    <!-- ./wrapper -->
    <!-- Form validation -->
    <script src="form-validation.js"></script>
</body>

</html>