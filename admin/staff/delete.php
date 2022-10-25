<?php
include('../includes/config.php');
$id = $_GET['id'];
$deleteQuery = mysqli_query($conn, "DELETE FROM staff WHERE id='$id'");

if ($deleteQuery) {
    echo "<script>alert('User deleted');
	window.location.href = ('index.php');</script>";;
} else {
    echo "<script>alert('User not deleted');</script>";
    echo "<script>window.location.href = ('index.php');</script>";
}
