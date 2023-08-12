<?php
    session_start();
    $_SESSION['isLoggedIn'] = 0;
    session_destroy();
    header("location:login.php");
?>