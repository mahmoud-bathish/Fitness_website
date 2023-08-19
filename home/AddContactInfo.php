<?php
require_once "../Connection/connection.php";

if(isset($_POST["Name"]) && isset($_POST["Email"]) && isset($_POST["message"]) 
    && $_POST["Name"] != "" && $_POST["Email"] != "" && $_POST["message"] != ""){
    
    $Name = mysqli_real_escape_string($con, $_POST["Name"]);
    $Email = mysqli_real_escape_string($con, $_POST["Email"]);
    $message = mysqli_real_escape_string($con, $_POST["message"]);
    
    $query = "INSERT INTO contacts (Name, Email, Message) VALUES ('$Name', '$Email', '$message')";
    mysqli_query($con, $query);
    header("location:Home.php");
}

?>