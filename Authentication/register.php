<?php
require_once '../Connection/connection.php';
if(isset($_POST['name'])&& isset($_POST['email']) && isset($_POST['password'])
    && $_POST['name'] != "" && $_POST['email'] != "" && $_POST['password'] != ""
){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (UserName, Email, Password , IsAdmin) VALUES ('$name', '$email', '$password' , '0')";

    mysqli_query($con,$query);
    
    session_start();
    $_SESSION['isLoggedIn'] = 1;
    header("location:../Home/Home.php");
}


?>