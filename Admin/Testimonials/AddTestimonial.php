<?php
require_once '../../Connection/connection.php';

if(isset($_POST["pictureUrl"]) && isset($_POST["comment"]) && $_POST["pictureUrl"] != "" && $_POST["comment"] != ""){
    $pictureUrl = $_POST["pictureUrl"];
    $comment = $_POST["comment"];
    $query = "INSERT INTO testimonials (pictureUrl,comment) VALUES ('$pictureUrl','$comment')";
    mysqli_query($con, $query);
    header("location:Testimonials.php");
}else{
    header("location:AddTestimonialForm.php");
}
?>