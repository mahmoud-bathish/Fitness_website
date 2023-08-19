<?php
session_start();
if ($_SESSION['isAdmin'] != 1) {
header("location:../../Authentication/Login.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Workouts</title>
    <style>
        table tr th{
            padding:15px;
            border-bottom:1px solid #eee
        }
        table tr td {
            padding:15px;
            border-bottom:1px solid #eee;
            text-align:center;
        }
        table{
            border-spacing:0px;
        }
        .btns{
            display:flex;
            justify-content:center;
            align-items:center;
            gap:50px;
            margin-top:50px;
        }
        .btns a {
            color:#fff;
            text-decoration:none;
            font-size:19px;
            font-weight:700;
            border-radius:7px;
            padding:7px;
            width:70px;
            text-align:center;
        }
    </style>
</head>
<body>
<div class="table" style="display:flex; justify-content:center;">
                    <table width="100%">
                    <tr>
                        <th>ID</th>
                        <th>Workout Name</th>
                        <th>Gif</th>
                        <th>Duration</th>
                        <th>Day</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                        require_once '../../Connection/connection.php';
                        $programId = $_GET["programId"];
                        if (isset($_GET['programId'])) {
                            $deleteId = $_GET['programId'];
                            $deleteQuery = "DELETE FROM workout WHERE WorkoutId = '$deleteId'";
                            mysqli_query($con, $deleteQuery);
                        }

                        $query = "SELECT * FROM  workout WHERE ProgramId = '$programId'";

                        $result = mysqli_query($con,$query);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td>" . $row["WorkoutId"] . "</td>";
                                echo "<td>" . $row["Name"] . "</td>";
                                echo "<td><img style='border-radius:50%;width:70px;height:70px;' src='" . $row["GifUrl"] . "'/></td>";
                                echo "<td>" . $row["Duration"] . "</td>";
                                echo "<td>" . $row["Day"] . "</td>";
                                echo '<td><a style="text-decoration:none;color:white;background:red;border-radius:5px;padding:6px;" href="?programId=' . $row["WorkoutId"] . '">Delete</a></td>';
                                echo "</tr>";
                            }
                        }
                    ?>
                    </table>
                </div>
                <div>
                    <div class="btns">
                        <a style='background:red;' href="Programs.php">Cancel</a>
                       <?php echo"<a style='background:#F78604;' href='Edit/AddWorkout.php?programId=".$programId."'>Add</a>"; ?>
                    </div>
                </div>
</body>
</html>