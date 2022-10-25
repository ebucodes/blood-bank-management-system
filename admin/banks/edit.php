<?php
include('../includes/config.php');

$id = $_GET['id'];

$name = $_POST["name"];
$address = $_POST["address"];
$state = $_POST["state"];
$lga = $_POST["lga"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$updateQuery = mysqli_query($conn, "UPDATE banks SET name='$name', address='$address', state='$state', lga='$lga', email='$email', phone='$phone' WHERE id='$id'");
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
