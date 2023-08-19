<?php
    require_once '../../../Connection/connection.php';
    $programId = $_GET["programId"];
    if(isset($_POST["workoutName"]) && isset($_POST["gifUrl"]) && isset($_POST["duration"]) && isset($_POST["day"]) 
    && $_POST["workoutName"] != "" && $_POST["gifUrl"] != "" && $_POST["duration"] != "" && $_POST["day"] != ""){

    $Name = mysqli_real_escape_string($con, $_POST["workoutName"]);
    $GifUrl = mysqli_real_escape_string($con, $_POST["gifUrl"]);
    $Duration = mysqli_real_escape_string($con, $_POST["duration"]);
    $Day = mysqli_real_escape_string($con, $_POST["day"]);

    $query = "INSERT INTO workout (Name, GifUrl, Duration, Day,ProgramId) VALUES ('$Name','$GifUrl','$Duration','$Day','$programId');";

    mysqli_query($con,$query);
    header("location:AddWorkouts.php?programId=".$programId."");
    }
?>