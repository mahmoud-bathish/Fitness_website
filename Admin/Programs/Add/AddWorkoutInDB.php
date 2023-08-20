<?php
    require_once '../../../Connection/connection.php';
    $programId = $_GET["programId"];
    if(isset($_POST["workoutName"]) && isset($_POST["gifUrl"]) && isset($_POST["sets"]) && isset($_POST["repeat"]) && isset($_POST["day"]) 
    && $_POST["workoutName"] != "" && $_POST["gifUrl"] != "" && $_POST["sets"] != "" && $_POST["repeat"] != "" && $_POST["day"] != ""){

    $Name = mysqli_real_escape_string($con, $_POST["workoutName"]);
    $GifUrl = mysqli_real_escape_string($con, $_POST["gifUrl"]);
    $sets = mysqli_real_escape_string($con, $_POST["sets"]);
    $repeat = mysqli_real_escape_string($con, $_POST["repeat"]);
    $Day = mysqli_real_escape_string($con, $_POST["day"]);

    $query = "INSERT INTO workout (Name, GifUrl, Day,ProgramId,Sets,Repeat) VALUES ('$Name','$GifUrl','$Day','$programId', '$sets','$repeat');";

    mysqli_query($con,$query);
    header("location:AddWorkouts.php?programId=".$programId."");
    }
?>