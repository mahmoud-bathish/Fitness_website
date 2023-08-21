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
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: "Inter","sans-serif";
        }
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
                        <th>Sets</th>
                        <th>Repeat</th>
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
                                echo "<td>" . $row["Sets"] . "</td>";
                                echo "<td>" . $row["Reps"] . "</td>";
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