<?php
include("includes/config.php");

if (isset($_POST["submit"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $dob = mysqli_real_escape_string($conn, $_POST["dob"]);
    $blood_group = mysqli_real_escape_string($conn, $_POST["blood_group"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $state = mysqli_real_escape_string($conn, $_POST["state"]);
    $lg = mysqli_real_escape_string($conn, $_POST["lg"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $volume = mysqli_real_escape_string($conn, $_POST["volume"]);
    $type = 'Individual';
    $status = "Pending";
    $created_date = date('Y-m-d');
    $registerQuery = mysqli_query($conn, "INSERT INTO request 
    (name,gender,dob,blood_group,address,state,lg,email,phone,volume,type,status,created_date) VALUES 
    ('$name','$gender','$dob', '$blood_group', '$address', '$state', '$lg', '$email', '$phone', '$volume', '$type', '$status', '$created_date')") or die(mysqli_error($conn));
    if ($registerQuery) {
?>
        <script>
            setTimeout(function() {
                    swal({
                        title: "Successfully",
                        text: "Please check your inbox/spam folder in your mail for further details.",
                        icon: "success",
                        button: "OK",
                    }).then(function() {
                        window.location.href = "index.html";
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
                        window.location.href = "index.html";
                    });
                },
                100);
        </script>
<?php
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BloodBank MS | Request Form</title>
    <?php include("assets/cdnLink.php"); ?>
    <!--Main CSS-->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/form-validation.css">
</head>

<body>

    <!--why donate section-->
    <section class="py-5 bg-white">
        <div class="container">
            <!--Title-->
            <!-- <div class="row">
                <div class="col text-center">
                    <h4 class="display-6 text-uppercase text-danger font-weight-bold mb-4">
                        <strong>Request Form</strong>
                    </h4>
                    <div class="title-underline bg-danger"></div>
                </div>
            </div> -->
            <!--end of title-->
            <div class="row">
                <!--single col-->
                <div class="col-md-12 col-lg-12 text-center my-4">
                    <div class="card card-default">
                        <div class="card-header bg-danger">
                            <h3 class="card-title text-uppercase">request form</h3>
                        </div>
                        <!-- /.card-header -->
                        <form method="POST" class="needs-validation" action="request_form.php" novalidate>
                            <div class="card-body">
                                <input type="hidden" name="type" value="Individual">
                                <!-- Row 1 -->
                                <div class="row mb-3">
                                    <!-- Name -->
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname" class="form-label">Recipient's Full name</label>&nbsp;<span style="color: red;">*</span>
                                            <input type="text" class="form-control" name="name" id="firstname" placeholder="Full name of recipient" value="" required>
                                            <div class="invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.Firstname -->
                                    <!-- Gender -->
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group">
                                            <label class="form-label">Recipient's gender</label>&nbsp;<span style="color: red;">*</span>
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
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group">
                                            <label class="form-label">Recipient's date of birth</label>&nbsp;<span style="color: red;">*</span>
                                            <input type="date" name="dob" class="form-control" required>
                                            <div class=" invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.D.O.B -->
                                </div>
                                <hr>
                                <!-- /.row -->
                                <!-- Row 3 -->
                                <div class="row mb-3">
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
                                            <select name="lg" id="lg" class="form-control select-lga" required>
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
                                <div class="row mb-3">
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
                                <hr>
                                <!-- /.row -->
                                <!-- Row 4 -->
                                <div class="row mb-3">
                                    <!-- Blood group -->
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Blood Group required</label>&nbsp;<span style="color: red;">*</span>
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
                                    <!-- Volume -->
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Volume(ml) of blood required</label>&nbsp;<span style="color: red;">*</span>
                                            <input type="number" name="volume" class="form-control" id="address" minlength="0" placeholder="Volume of blood required" required>
                                            <div class="invalid-feedback">
                                                Phone number is required
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
                                <button name="submit" class="btn btn-primary" type="submit">Request Form</button>
                                <a href="index.html" class="btn btn-danger" tooltip="Go back to homepage" role="button">Back</a>
                            </div>
                        </form>
                        <!-- /.card -->
                    </div>
                </div>
                <!--end of single col-->
            </div>
        </div>
    </section>
    <script type="text/javascript" src="assets/js/form-validation.js"></script>
    <script type="text/javascript" src="assets/js/lga.min.js"></script>
</body>

</html>