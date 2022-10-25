<?php
include("../../includes/config.php");

if (isset($_POST["add"])) {
    $name = $_POST["name"];

    // Insert new data
    $insertQuery = mysqli_query($conn, "INSERT INTO blood_groups (name) VALUES ('$name')") or die(mysqli_error($conn));
    if ($insertQuery) {
        echo "<script>alert('Successful');
        window.location.href = ('index.php');
        </script>";
    } else {
        echo "<script>
        alert('Error');
        window.location.href = ('index.php');
    </script>";
    }
}
