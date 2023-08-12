<?php
require_once 'connection.php';
if(isset($_POST['name'])&& isset($_POST['email']) && isset($_POST['password'])
    && $_POST['name'] != "" && $_POST['email'] != "" && $_POST['password'] != ""
){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (name, email, password) VALUES ($name, $email, $password)";

    $result = mysqli_query($con,$query);
    
    $row = mysqli_fetch_assoc($result);
    
    session_start();
    $_SESSION['isLoggedIn'] = 1;
    $_SESSION['name'] = $row["userName"];
    header("location:home.php");
}


?>