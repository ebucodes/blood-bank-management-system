<?php
include('../includes/config.php');

$id = $_GET['id'];

$role = $_POST['role'];
$updateQuery = mysqli_query($conn, "UPDATE staff SET ROLE='$role' WHERE id='$id'");
if ($updateQuery) {
?>
    <script>
        alert('Role updated');
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
