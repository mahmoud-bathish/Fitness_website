<?php
require_once '../../Connection/connection.php';
// if (
//     isset($_POST["articleID"]) && 
//     isset($_POST["Title"]) && 
//     isset($_POST["ImageUrl"]) && 
//     isset($_POST["Description"]) && 
//     isset($_POST["Content"]) && 
//     $_POST["articleID"] != "" && 
//     $_POST["Title"] != "" && 
//     $_POST["ImageUrl"] != "" && 
//     $_POST["Description"] != "" && 
//     $_POST["Content"] != ""
// ) {
    $articleID = $_POST["articleID"];
    $title = $_POST["Title"];
    $imageUrl = $_POST["ImageUrl"];
    $description = $_POST["Description"];
    $content = $_POST["Content"];
    
    $query = "UPDATE articles
              SET Title = '$title', ImageUrl = '$imageUrl', Description = '$description', Content = '$content'
              WHERE id = '$articleID'";
    
    mysqli_query($con, $query);
    header("location:articles.php");
// }
    ?>