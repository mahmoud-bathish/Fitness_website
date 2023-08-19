<?php
require_once '../../Connection/connection.php';

if(isset($_POST["Title"]) && isset($_POST["ImageUrl"]) && isset($_POST["Description"]) && isset($_POST["Content"]) 
     && $_POST["Title"] != "" && $_POST["ImageUrl"] != "" && $_POST["Description"] != "" && $_POST["Content"] != ""){
    
    $articleID = $_GET["articleID"];
    $title = mysqli_real_escape_string($con, $_POST["Title"]);
    $imageUrl = mysqli_real_escape_string($con, $_POST["ImageUrl"]);
    $description = mysqli_real_escape_string($con, $_POST["Description"]);
    $content = mysqli_real_escape_string($con, $_POST["Content"]);
    
    $query = "UPDATE articles SET Title='$title', ImageUrl='$imageUrl', Description='$description', Content='$content' WHERE articleID='$articleID'";
    
    if(mysqli_query($con, $query)){
        header("location:Articles.php");
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
