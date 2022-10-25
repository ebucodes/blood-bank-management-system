<?php
include('../includes/config.php');

$id = $_GET['id'];

$volume = $_POST['volume'];
$raw_date = $_POST['donation_date'];
$donation_date = date('Y-m-d', strtotime($raw_date));
$updateQuery = mysqli_query($conn, "UPDATE donors SET volume='$volume', donation_date='$donation_date' WHERE id='$id'");
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
