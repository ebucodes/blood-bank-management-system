<?php
include('../includes/config.php');

$id = $_GET['id'];

$blood_status = mysqli_real_escape_string($conn, $_POST["blood_status"]);

$updateQuery = mysqli_query($conn, "UPDATE donors SET blood_status = '$blood_status' WHERE id='$id'");
if ($updateQuery) {
?>
    <script>
        alert('Successful');
        window.location.href = ('index.php');
    </script>
<?php
    //header('location:index.php');
} else {
?>
    <script>
        alert('Error');
        window.location.href = ('index.php');
    </script>
<?php
}
