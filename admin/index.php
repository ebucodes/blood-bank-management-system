<?php
session_start();
ob_start();

include("includes/config.php");

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $query = ("SELECT * FROM staff WHERE email =  '$email' AND password = '$password'") or die(mysqli_error($conn));
    $result = mysqli_query($conn, $query);
    $fetchArray = mysqli_fetch_array($result);

    if (mysqli_num_rows($result) > 0) {

        $_SESSION["id"] = $fetchArray["id"];
        $session_id = $_SESSION['id'];
        $session_query = ("SELECT * FROM staff WHERE id = '$session_id'") or die(mysqli_errno($conn));
        $session_result = mysqli_query($conn, $session_query);
        $staff_info = mysqli_fetch_array($session_result);
        $firstname = $staff_info['firstname'];
        $lastname = $staff_info['lastname'];
        // echo "<script>alert('Welcome');
        // window.location.href = 'dashboard/index.php';
        // </script>";
?>
        <script>
            setTimeout(function() {
                    swal({
                        title: "",
                        text: "Welcome, <?php echo $firstname . ' ' . $lastname; ?>.",
                        icon: "success",
                        button: "OK",
                    }).then(function() {
                        window.location.href = "dashboard.php";
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
                        window.location.href = "../admin/index.php";
                    });
                },
                100);
        </script>
<?php
        // echo "<script>alert('Invalid details');
        // window.location.href = '../admin/index.php';
        // </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>BloodBank MS · Staff Sign In</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Sweetalert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    <link href="../assets/css/signin.css" rel="stylesheet">
</head>


<body class="text-center">
    <main class="form-signin">
        <form method="POST" action="index.php">

            <img class="mb-4" src="../assets/images/logo1.png" alt="" width="100" height="">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating mb-3">
                <input type="text" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Your email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Your password</label>
            </div>

            <button name="login" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
        <!-- <p class="card-text">Not a member?&nbsp;<a href="register.php">Sign Up</a></p> -->
    </main>

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>