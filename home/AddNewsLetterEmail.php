<?php
require_once '../Connection/connection.php';
if(isset($_POST["Email"]) && $_POST["Email"] != "") {
    $email = $_POST["Email"];  // Corrected: Changed $Post to $_POST
    $query = "INSERT INTO NewsLetter (Email) VALUES ('$email')";
    mysqli_query($con, $query);
}
header("location:home.php");
?>