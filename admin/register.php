<?php
include("../includes/config.php");

if (isset($_POST["register"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password1 = $_POST['password'];
    $password = md5($password1);
    $role = "Admin";
    // To check if email address is already in use
    $emailCheck = mysqli_query($conn, "SELECT email FROM staff WHERE email='$email'") or die(mysqli_error($conn));
    if (mysqli_num_rows($emailCheck) > 0) {
        echo "<script>alert('Email address already in use');</script>";
    } else {
        // Register new user
        $registerQuery = mysqli_query($conn, "INSERT INTO staff (firstname, lastname, email, password, role) VALUES ('$firstname', '$lastname','$email','$password', '$role')") or die(mysqli_error($conn));
        echo "<script>alert('New Staff added');
        window.location.href = 'index.php';
        </script>";
    }
}
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>BloodBank MS · Register New Admin</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Sweetalert -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"
            integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        </style>
        <!-- Custom styles for this template -->
        <link href="../assets/css/form-validation.css" rel="stylesheet">
    </head>

    <body class="bg-light">
        <br>
        <main class="container">
            <div class="card text-center">
                <div class="card-header bg-info">
                    <h4 class="card-title">REGISTER NEW STAFF</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <!-- <h4 class="mb-3"></h4> -->
                            <form method="POST" class="needs-validation" novalidate>
                                <div class="row g-3">
                                    <!-- Firstname -->
                                    <div class="col-sm-6">
                                        <label for="firstname" class="form-label">First name</label>&nbsp;<span
                                            style="color: red;">*</span>
                                        <input type="text" class="form-control" name="firstname" id="firstname"
                                            placeholder="Your first name" value="" required>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <!-- Lastname -->
                                    <div class="col-sm-6">
                                        <label for="lastname" class="form-label">Last name</label>&nbsp;<span
                                            style="color: red;">*</span>
                                        <input type="text" class="form-control" name="lastname" id="lastname"
                                            placeholder="Your last name" value="" required>
                                        <div class="invalid-feedback">
                                            Valid last name is required.
                                        </div>
                                    </div>
                                    <!-- Email Address -->
                                    <div class="col-sm-6">
                                        <label for="email" class="form-label">Email Address</label>&nbsp;<span
                                            style="color: red;">*</span>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Your email address" required>
                                        <div class="invalid-feedback">
                                            Please enter a valid email address.
                                        </div>
                                    </div>
                                    <!-- Password -->
                                    <div class="col-sm-6">
                                        <label for="address" class="form-label">Password</label>&nbsp;<span
                                            style="color: red;">*</span>
                                        <input type="password" name="password" class="form-control" id="password"
                                            minlength="5" placeholder="Your password" required>
                                        <div class="invalid-feedback">Password is required.<br>Minimum length is 5.<br>
                                        </div>
                                    </div>
                                </div>

                                <br class="my-2">

                                <button name="register" class="btn btn-primary" type="submit">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <!-- SweetAlert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Form validation -->
        <script src="../assets/js/form-validation.js"></script>
    </body>

</html>