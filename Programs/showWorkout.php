<?php
     session_start();

     if ($_SESSION['isLoggedIn'] != 1) {
     header("location:../Authentication/Login.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout</title>
    <style>
        body{
            margin:0;
            padding:0;
        }
        .workout {
            width:100vw;
            height:100vh;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            gap:50px;
        }
        .workout .gif {
            width:100%;
            text-align:center;
        }
        .resp-sets{
            display:flex;
            justify-content:space-between;
        }
        .resp-sets div{
            width:100px;
            text-align:center;
            font-size:25px;
            font-weight:700;
        }
        .finish-btn {
            width:100%;
            text-align:center;
        }
        .finish-btn a{
            text-decoration:none;
            padding:7px 25px;
            font-size:20px;
            background:red;
            border:none;
            color:#fff;
            border-radius:7px;
        }
    </style>
</head>
<body>

    <?php
        require_once '../Connection/connection.php';
        $programId = $_GET["programId"];
        $day = $_GET["day"];
        $workoutId = $_GET["workoutId"];

        $query = "SELECT * FROM workout 
        WHERE
            ProgramId = '$programId'
        AND  
        workout.Day = '$day'
        AND 
        workout.WorkoutId = '$workoutId';";

        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
              echo "  <div class='workout'>";
              echo "      <div class='gif'>";
              echo "          <img style='width:400px;height:400px;' src='".$row["GifUrl"]."'>";
              echo "      </div>";
              echo "<div class='resp-sets'>";
              echo "      <div class='sets'><span style='font-size:20px;font-weight:700;'>Sets: ".$row["Sets"]."</span></div>";
              echo "      <div class='sets'><span style='font-size:20px;font-weight:700;'>Reps: ".$row["Reps"]."</span></div>";
              echo "</div>";
              echo "      <div class='finish-btn'>";
              echo "          <a href='DayWorkout.php?Day=".$row["Day"]."&Id=".$row["ProgramId"]."'>Finish</a>";
              echo "      </div>";
              echo "  </div>";
              echo "  <div class='line-container'><div class='line'></div></div>";
            }
        }
        ?>
</body>
</html>