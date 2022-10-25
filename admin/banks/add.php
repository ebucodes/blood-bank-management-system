<?php
include("../includes/config.php");

if (isset($_POST["add"])) {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $state = $_POST["state"];
    $lga = $_POST["lga"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $registerQuery = mysqli_query($conn, "INSERT INTO banks (name, address, state, lga, email, phone) VALUES ('$name', '$address','$state', '$lga', '$email', '$phone')") or die(mysqli_error($conn));

    if ($registerQuery) {
        echo "<script>
                alert('Successful');
                window.location.href = ('index.php');
            </script>";
    } else {
        echo "<script>
                alert('Not successful');
                window.location.href = ('index.php');
            </script>";
    }
}
