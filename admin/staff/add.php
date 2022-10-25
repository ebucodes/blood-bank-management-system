<?php
include("../includes/config.php");

if (isset($_POST["add"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password1 = $_POST["password"];
    $password = md5($password1);
    $role = $_POST["role"];

    // To check if email address is already in use
    $emailCheck = mysqli_query($conn, "SELECT email FROM staff WHERE email='$email'") or die(mysqli_error($conn));
    // To check username
    if (mysqli_num_rows($emailCheck) > 0) {
        echo "<script>alert('Email address already in use');</script>";
    } else {
        // Register new user
        $registerQuery = mysqli_query($conn, "INSERT INTO staff (firstname, lastname, email, password, role) VALUES ('$firstname', '$lastname','$email','$password','$role')") or die(mysqli_error($conn));
?>
<script>
alert('New staff registered successfully');
window.location.href = ('index.php');
</script>
<?php
    }
}
?>