<?php
include('../includes/config.php');
$id = $_GET['id'];
$deleteQuery = mysqli_query($conn, "DELETE FROM banks WHERE id='$id'");

if ($deleteQuery) {
    echo "<script>alert('Successful');
	        window.location.href = ('index.php');
        </script>";;
} else {
    echo "<script>alert('Error');
        window.location.href = ('index.php');
        </script>";
}
