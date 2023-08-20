<?php
require_once '../../../Connection/connection.php';

if(isset($_POST["days"]) && isset($_POST["ProgramTitle"]) && isset($_POST["Description"]) && isset($_POST["IconUrl"]) 
&& $_POST["days"] != "" && $_POST["ProgramTitle"] != "" && $_POST["Description"] != "" && $_POST["IconUrl"] != ""){
    $programName = $_POST["ProgramTitle"];
    $Description = $_POST["Description"];
    $IconUrl = $_POST["IconUrl"];
    $daysNumber = $_POST["days"]

    $query = "INSERT INTO Program (ProgramName,Description,Price,IconUrl,DaysNumber) VALUES ('$programName','$Description','$IconUrl','$daysNumber')";
    mysqli_query($con, $query);
    $query2 = "SELECT * FROM Program WHERE ProgramName = '$programName'";
    $result = mysqli_query($con, $query2);
    $row = mysqli_fetch_assoc($result);
    header("location:AddWorkouts.php?programId=".$row["ProgramId"]."");
}


?>