<?php
include("config.php");
session_start();
//Query to store session
if (!isset($_SESSION["id"])) {
    header("location:../index.php");
} else {
    $session_id = $_SESSION['id'];
    $session_query = ("SELECT * FROM staff WHERE id = '$session_id'") or die(mysqli_errno($conn));
    $session_result = mysqli_query($conn, $session_query);
    $staff_info = mysqli_fetch_array($session_result);
    $staff_id = $staff_info['id'];
    $firstname = $staff_info['firstname'];
    $lastname = $staff_info['lastname'];
    $role = $staff_info['role'];
}