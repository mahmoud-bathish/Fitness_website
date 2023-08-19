<?php
     session_start();

     if ($_SESSION['isLoggedIn'] != 1) {
     header("location:../Authentication/Login.html");
    }
?>]
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Days</title>
    <style>
        body{
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
        .duration{
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
            height:100vh;
            display:flex;
            align-items:start;
            justify-content:center;
            position:absolute;
        }
        .workout-container{
            width:80%;
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
        .start-btn button{
            background:#F78604;
            border:none;
            padding:7px 12px;
            border-radius:7px;
            color:#fff;
            font-size:15px;
            cursor:pointer;
        }
        .gif{
            text-align:center;
        }
        .workout-title{
            font-size:23px;
            font-weight:bold;
        }
        .workout-title .duration{
            font-size:23px;
        }
        .img-container{
            width:50%;
            height:50%;
        }
        .finish-btn {
            position:absolute;
            width:100%;
            bottom:20px;
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
    <div class="container">
        <div class="workout-container">
            <h1>Workout</h1>
            <div class="workout workout-title">
                <div class="gif">
                    Workout
                </div>
                <div class="duration">Duration</div>
                <div class="start-btn">
                    Start
                </div>
            </div>
            <div class="line-container"><div class="line"></div></div>

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
                          echo "      <div class='duration'><span>".$row["Duration"].":00</span></div>";
                          echo "      <div class='start-btn'>";
                          echo "          <button id='startBtn'>Start</button>";
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

    <div id="popupContainer" class="popup-container" style="display:none;justify-content:center;align-items:center;width:100%;z-index:10;background-color: rgba(0, 0, 0, 0.5);height:100vh;position:absolute;">
        <div class="popup-content" style='background-color: #F78604;color:white;border-radius:10px;width:40%;height:80%;'>
            <div style='height:10%;width:100%;text-align:end;padding-right:1%;'>
                <span class="close-btn" onclick="hidePopup()"style='cursor:pointer;font-size:30px;text-align:center;width:100%;padding-right:1%;'>&times;</span>
            </div>
            <div id="resultContainer" style="display:flex;align-items:start;justify-content:center;height:80%;width:100%;font-size:24px;line-height:1.6;">
                <div class="img-container">
                    <img style="height:100%;width:100%;" src="https://cdn.pixabay.com/photo/2023/07/28/10/17/machinery-8154964_640.jpg" alt="">
                </div>
                <div class="counter">
                    <!-- implement Counter -->
                </div>
            </div>
        </div>
    </div>

<script>
    let startBtn = document.getElementById("startBtn");
    function showPopup(result) {
        const resultContainer = document.getElementById("resultContainer");
        // resultContainer.innerHTML = result;
        document.getElementById("popupContainer").style.display = "flex";
    }

    // Function to hide the popup
    function hidePopup() {
        document.getElementById("popupContainer").style.display = "none";
    }
    startBtn.addEventListener('click', ()=>{
        showPopup();
    })
</script>
    <?php
    
    ?>
</body>
</html>