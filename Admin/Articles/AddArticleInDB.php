<?php
require_once '../../Connection/connection.php';

if(isset($_POST["Title"]) && isset($_POST["ImageUrl"]) && isset($_POST["Description"]) && isset($_POST["Content"]) 
    && $_POST["Title"] != "" && $_POST["ImageUrl"] != "" && $_POST["Description"] != "" && $_POST["Content"] != ""){
    
    $title = mysqli_real_escape_string($con, $_POST["Title"]);
    $imageUrl = mysqli_real_escape_string($con, $_POST["ImageUrl"]);
    $description = mysqli_real_escape_string($con, $_POST["Description"]);
    $content = mysqli_real_escape_string($con, $_POST["Content"]);
    
    $query = "INSERT INTO articles (Title, ImageUrl, Description, Content) VALUES ('$title', '$imageUrl', '$description', '$content')";
    if(mysqli_query($con, $query)){
        header("Location: Articles.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
