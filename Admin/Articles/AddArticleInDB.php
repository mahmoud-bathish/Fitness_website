<?php
    require_once '../../Connection/connection.php';

    $title = $_GET["Title"];
    $imageUrl = $_GET["ImageUrl"];
    $description = $_GET["Description"];
    $content = $_GET["Content"];
    $query = "INSERT INTO articles (Title,ImageUrl,Description,Content) VALUES ('$title','$imageUrl','$description','$content')";
    $result = mysqli_query($con,$query);
header("location:articles.php");
?>