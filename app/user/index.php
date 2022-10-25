<?php
ob_start();
session_start();
include("../../includes/config.php");

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $query = ("SELECT * FROM members WHERE email =  '$email' AND password = '$password'") or die(mysqli_error($conn));
    $result = mysqli_query($conn, $query);
    $fetchArray = mysqli_fetch_array($result);

    if (mysqli_num_rows($result) > 0) {

        $_SESSION["id"] = $fetchArray["id"];
        $session_id = $_SESSION['id'];
        $session_query = ("SELECT * FROM members WHERE id = '$session_id'") or die(mysqli_errno($conn));
        $session_result = mysqli_query($conn, $session_query);
        $user_info = mysqli_fetch_array($session_result);
        $firstname = $user_info['firstname'];
        $lastname = $user_info['lastname'];
        // header("location:home.php");
?>
        <script>
            setTimeout(function() {
                    swal({
                        title: "",
                        text: "Welcome, <?php echo $firstname . ' ' . $lastname; ?>.",
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
                        text: "Incorrect login credentials.",
                        icon: "error",
                        button: "OK",
                    }).then(function() {
                        window.location.href = "index.php";
                    });
                },
                100);
        </script>
<?php
        // $message = "<p class='card-text alert alert-danger'>Invalid Email Address/password combination</p>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BloodBank MS | Login to get started</title>
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
                        <strong>Login to get started</strong>
                    </h4>
                    <div class="title-underline bg-danger"></div>
                </div>
            </div>
            <!--end of title-->
            <div class="row">
                <!--single col-->
                <div class="col-md-12 col-lg-12 text-center my-4">
                    <div class="card card-default">
                        <div class="card-header bg-danger">
                            <h3 class="card-title text-uppercase">Sign in form</h3>
                        </div>
                        <!-- /.card-header -->
                        <form method="POST" class="needs-validation" action="index.php" novalidate>
                            <div class="card-body">
                                <!-- Row 1 -->
                                <div class="row">
                                    <!-- Firstname -->
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname" class="form-label">Email address</label>
                                            <input type="text" class="form-control" name="email" id="firstname" placeholder="Email address" required>
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
                                            <label for="lastname" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                                            <div class="invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.Lastname -->
                                </div>
                            </div>
                            <div class="card-footer">
                                <button name="submit" class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </form>
                        <!-- /.card -->
                    </div>
                    <p class="card-text">Not a member?&nbsp;<a href="register.php">Sign Up</a></p>

                </div>
                <!--end of single col-->
            </div>
        </div>
    </section>
    <script type="text/javascript" src="../../assets/js/form-validation.js"></script>
    <script type="text/javascript" src="../../assets/js/lga.min.js"></script>
</body>

</html>