<?php
require_once '../Connection/connection.php';

if(isset($_POST['email']) && isset($_POST['password']) && $_POST['password'] != "" && $_POST['email'] != ""){
    $pass = $_POST['password'];
    $email = $_POST['email'];

    $query = "SELECT * FROM users where Email='$email' and Password='$pass'";

    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result) == 0){
        header("location:Register.html");
    }else{
        session_start();
        $_SESSION['isLoggedIn'] = 1;
        $_SESSION['name'] = $row["UserName"];
        if($row["IsAdmin"] == 1){
            $_SESSION['isAdmin'] = 1;
            header("location:../Admin/Programs/Programs.php");
        }else{
            header("location:../Programs/Programs.php");
        }
    }
}
?>