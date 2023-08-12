<?php
require_once 'connection.php';

if(isset($_POST['password']) && isset($_POST['email']) && $_POST['password'] != "" && $_POST['email'] != ""){
    $pass = $_POST['password'];
    $email = $_POST['email'];

    $query = "SELECT * FROM users where email='$email' and password='$pass'";

    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result) == 0){
        header("location:register.html");

    }else{
        session_start();
        $_SESSION['isLoggedIn'] = 1;
        $_SESSION['name'] = $row["userName"];
        header("location:home.php");
    }
}
?>