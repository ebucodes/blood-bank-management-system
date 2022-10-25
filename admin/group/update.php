<?php
include('../../includes/config.php');

$id = $_GET['id'];
$name = $_POST["name"];
// Query
$updateQuery = mysqli_query($conn, "UPDATE blood_groups SET name='$name' WHERE id='$id'");
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
