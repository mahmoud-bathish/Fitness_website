<?php
require_once '../../Connection/connection.php';

$programId = $_GET["programId"];

$query1 = "DELETE FROM ProgramDetails WHERE ProgramId = '$programId';";
$query2 = "DELETE FROM Program WHERE ProgramId = '$programId';";

mysqli_query($con, $query1);
mysqli_query($con, $query2);
header("location:programs.php");
?>