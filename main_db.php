<?php

$conn = mysqli_connect("localhost", "root");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($conn,"Hevents") or die(mysqli_error());
?>