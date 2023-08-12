<?php
require_once 'connect-to-mysql.php';
session_start();

// Simulated user data (replace this with a real database)
$users = array(
    array("username" => "user1", "password" => "password1"),
    array("username" => "user2", "password" => "password2"),
    // Add more users as needed
);

function authenticateUser($username, $password, $users) {
    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            return true;
        }
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate user credentials
    if (authenticateUser($username, $password, $users)) {
        // Authentication successful, store user data in session
        $_SESSION["username"] = $username;

        // Redirect to the dashboard or any other page after successful login
        header("Location: dashboard.php");
        exit();
    } else {
        $errorMessage = "Invalid username or password.";
    }
}
?>