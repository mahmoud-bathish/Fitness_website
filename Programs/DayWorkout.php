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
    <title>Program Days</title>
    <style>

        *,body{
            margin:0;
            padding:0; 
        }
        .line-container{
            width:100%;
            display:flex;
            justify-content:center;
        }
        .line{
            width:80%;
            height:2px;
            background:#eee;
        }
        .sets,.reps{
            font-size:15px;
            text-align:center;
        }

        .workout{
            display:flex;
            align-items:center;
            justify-content:space-around;
        }
        .container{
            width:100%;
            /* height:100vh; */
            display:flex;
            align-items:start;
            justify-content:center;
            /* position:absolute; */
            
        }
        .workout-container{
            width:80%;
            margin-top:20px;
        }
        .workout div{
            padding:30px 0;
            width:100%;
        }
        .workout-container h1 {
            text-align:center;
        }
        .start-btn{
            text-align:center;

        }
        .start-btn a{
            background:#F78604;
            border:none;
            padding:7px 12px;
            border-radius:7px;
            color:#fff;
            font-size:15px;
            cursor:pointer;
            text-decoration:none;
        }
        .gif{
            text-align:center;
        }
        .workout-title{
            font-size:23px;
            font-weight:bold;
        }
        .workout-title .sets,
        .workout-title .reps{
            font-size:23px;
        }
        .img-container{
            width:50%;
            height:50%;
        }
        .finish-btn {
            width:100%;
            margin:50px 0;
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
          <!-- Fonts -->
          <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body style="font-family:'inter','sans-serif'">
    <div class="container">
        <div class="workout-container">
            <h1 style="margin-bottom:30px;">Workout</h1>
                <?php
                    require_once '../Connection/connection.php';
                    $id = $_GET["Id"];
                    $day = $_GET["Day"];

                    $query = "SELECT * FROM workout 
                    WHERE
                        ProgramId = '$id'
                    AND  
                    workout.Day = '$day'";
                

                    $result = mysqli_query($con,$query);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                          echo "  <div class='workout'>";
                          echo "      <div class='gif'>";
                          echo "          <img style='width:70px;height:70px;' src='".$row["GifUrl"]."'>";
                          echo "      </div>";
                          echo "      <div class='sets'><span style='font-size:20px;font-weight:700;'>".$row["Name"]."</span></div>";
                          echo "      <div class='start-btn'>";
                          echo "          <a href='showWorkout.php?workoutId=".$row["WorkoutId"]."&day=".$row["Day"]."&programId=".$row["ProgramId"]."' id='startBtn'>Start</a>";
                          echo "      </div>";
                          echo "  </div>";
                          echo "  <div class='line-container'><div class='line'></div></div>";
                        }
                    }
                    echo"    </div>";
                    echo "</div>";
                    echo "<div class='finish-btn'>";
                    echo "    <a href='Program.php?ProgramId=".$id."'>Finish</a>";
                    echo "</div>";
         ?>

    <!-- <div id="popupContainer" class="popup-container" style="display:none;justify-content:center;align-items:center;width:100%;z-index:10;background-color: rgba(0, 0, 0, 0.5);height:100vh;position:absolute;">
        <div class="popup-content" style='background-color: #F78604;color:white;border-radius:10px;width:40%;height:80%;'>
            <div style='height:10%;width:100%;text-align:end;padding-right:1%;'>
                <span class="close-btn" onclick="hidePopup()"style='cursor:pointer;font-size:30px;text-align:center;width:100%;padding-right:1%;'>&times;</span>
            </div>
            <div id="resultContainer" style="display:flex;flex-direction:column;gap:20%;align-items:center;justify-content:start;height:80%;width:100%;font-size:24px;line-height:1.6;">
                <div class="img-container">
                    <img style="height:100%;width:100%;" id="workoutGif" src="https://cdn.pixabay.com/photo/2023/07/28/10/17/machinery-8154964_640.jpg" alt="">
                </div>
                <div class="counter"  style="display:flex;align-items:center;justify-content:center;width:100%;gap:15%;">
                    <div id="sets" style="background:black;width:70px;height:70px;text-align:center;line-height:70px;">

                    </div>
                    <div id="reps" style="background:black;width:70px;height:70px;text-align:center;line-height:70px;">

                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- <script>
    let startBtn = document.getElementById("startBtn");
    function showPopup(workoutId) {
    var workoutID = workoutId;
    const sets = document.getElementById('sets');
    const gif = document.getElementById('workoutGif');
    const reps = document.getElementById('reps');
    console.log(workoutID);
    <?php
    $workoutId = "<script>document.write(workoutID)</script>"; // Assign JS variable to PHP variable
    $query = "SELECT * FROM workout WHERE WorkoutId = '28'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $sets = $row['Sets'];
    $reps = $row['Reps'];
    $gifUrl = $row['GifUrl'];
    ?>

    sets.innerHTML = <?php echo json_encode($sets); ?>;
    reps.innerHTML = <?php echo json_encode($reps); ?>;
    gif.src = <?php echo json_encode($gifUrl); ?>;
    document.getElementById('popupContainer').style.display = 'flex';
    }
    // Function to hide the popup
    function hidePopup() {
        document.getElementById("popupContainer").style.display = "none";
    }
    startBtn.addEventListener('click', ()=>{
        showPopup();
    })
</script> -->
</body>
</html>