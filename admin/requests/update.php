<?php
include('../../includes/config.php');

$id = $_GET['id'];
$status = $_POST["status"];
// Query
$updateQuery = mysqli_query($conn, "UPDATE request SET status='$status' WHERE id='$id'");
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
