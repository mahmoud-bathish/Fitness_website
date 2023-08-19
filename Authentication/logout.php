<?php
    session_start();
    $_SESSION['isLoggedIn'] = 0;
    $_SESSION['isAdmin'] = 0;
    session_destroy();
    header("location:../Home/Home.php");
?>