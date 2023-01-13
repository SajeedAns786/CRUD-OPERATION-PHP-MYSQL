<?php
include('connect.php');
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE From `crud` where id = $id";
    $result = mysqli_query($con, $sql);
    if ($result == TRUE) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>