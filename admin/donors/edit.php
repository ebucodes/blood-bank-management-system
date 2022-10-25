<?php
include('../includes/config.php');

$id = $_GET['id'];

$weight = mysqli_real_escape_string($conn, $_POST["weight"]);
$volume = mysqli_real_escape_string($conn, $_POST["volume"]);
$identification_type = mysqli_real_escape_string($conn, $_POST["identification_type"]);
$status = mysqli_real_escape_string($conn, $_POST["status"]);
$raw_date = $_POST['donation_date'];
$donation_date = date('Y-m-d', strtotime($raw_date));
$updateQuery = mysqli_query($conn, "UPDATE donors SET volume = '$volume', weight = '$weight', identification_type = '$identification_type', status='$status', donation_date='$donation_date' WHERE id='$id'");
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
