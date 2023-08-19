<?php
require_once '../../../Connection/connection.php';

if(isset($_POST["ProgramTitle"]) && isset($_POST["Description"]) && $_POST["Price"] && isset($_POST["IconUrl"]) 
&& $_POST["ProgramTitle"] != "" && $_POST["Description"] != "" && $_POST["Price"] != "" && $_POST["IconUrl"] != ""){
    $programName = $_POST["ProgramTitle"];
    $Description = $_POST["Description"];
    $Price = $_POST["Price"];
    $IconUrl = $_POST["IconUrl"];

    $query = "INSERT INTO Program (ProgramName,Description,Price,IconUrl) VALUES ('$programName','$Description','$Price','$IconUrl')";
    mysqli_query($con, $query);
    $query2 = "SELECT * FROM Program WHERE ProgramName = '$programName'";
    $result = mysqli_query($con, $query2);
    $row = mysqli_fetch_assoc($result);
    header("location:AddWorkouts.php?programId=".$row["ProgramId"]."");
}


?>