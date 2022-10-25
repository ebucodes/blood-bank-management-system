<?php
include("../../includes/config.php");

if (isset($_POST["submit"])) {
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
    $password = md5(mysqli_real_escape_string($conn, $_POST["password"]));
    // Calculate the age of the member
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dob), date_create($today));
    $age = $diff->format('%y');
    // To check if email address is already in use
    $emailCheck = mysqli_query($conn, "SELECT email FROM members WHERE email='$email'") or die(mysqli_error($conn));
    if ($age < 18) {
        echo "<script>alert('You are not old enough to register');</script>";
    } elseif (mysqli_num_rows($emailCheck) > 0) {
        echo "<script>alert('Email address is already in use')</script>";
    } else {
        $registerQuery = mysqli_query($conn, "INSERT INTO members (firstname,lastname,gender,dob,blood_group,address,state,lga,email,phone,password) VALUES ('$firstname','$lastname','$gender','$dob', '$blood_group', '$address', '$state', '$lga', '$email', '$phone', '$password')") or die(mysqli_error($conn));
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
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BloodBank MS | Members registration</title>
    <?php include("../../assets/cdnLink.php"); ?>
    <!--Main CSS-->
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/form-validation.css">
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
                        <strong>Members registration</strong>
                    </h4>
                </div>
            </div>
            <!--end of title-->
            <div class="row">
                <!--single col-->
                <div class="col-md-12 col-lg-12 text-center my-4">
                    <div class="card card-default">
                        <div class="card-header bg-danger">
                            <h3 class="card-title text-uppercase">Registration form</h3>
                        </div>
                        <!-- /.card-header -->
                        <form method="POST" class="needs-validation" action="register.php" novalidate>
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
                                                <?php include("../../includes/config.php");
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
                                                <option value="Abuja">Abuja</option>
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
                                    <div class="col-12 col-sm-4">
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
                                    <div class="col-12 col-sm-4">
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
                                    <!-- Password -->
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Password</label>&nbsp;<span style="color: red;">*</span>
                                            <input type="password" name="password" class="form-control" placeholder="Your password" required>
                                            <div class="invalid-feedback">
                                                This field is required
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                <!-- /.card-body -->
                            </div>
                            <div class="card-footer">
                                <button name="submit" class="btn btn-primary" type="submit">Register</button>
                                <a href="../../index.html" class="btn btn-danger" tooltip="Go back to homepage" role="button">Back</a>
                            </div>
                        </form>
                        <!-- /.card -->
                    </div>
                </div>
                <!--end of single col-->
            </div>
        </div>
    </section>
    <script type="text/javascript" src="../../assets/js/form-validation.js"></script>
    <script type="text/javascript" src="../../assets/js/lga.min.js"></script>
</body>

</html>