<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program</title>
    <link rel="stylesheet" href="../home/Style/index.css">

    <style>
        body{
            margin:0;
            height: 0;
            background:black;
        }
        .program-img-container{
            background-image: url("https://cdn.pixabay.com/photo/2017/08/07/14/02/man-2604149_640.jpg");
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .subscribee{
            background:red;
            display:flex;
            align-items:center;
            justify-content:center;
            color:#fff;
        }
        .subscribee h2{
            margin:0;
        }
        .days-section{
            width:100%;
            display:flex;
            align-items:center;
            justify-content:center;
            margin-top:20px;
        }
        .days-container{
            width:70%;
            display:flex;
            align-items:center;
            justify-content:start;
            flex-wrap:wrap;
            gap:15px;
        }
        .days-container div{
            width:120px;
            height:60px;
            background:blue;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:22px;
            font-weight:bold;
            color:#fff;
        }
        .days-container div a{
            text-decoration:none;
            color:#fff;
        }
    </style>
</head>
<body>
    <header>
          <nav class="container">
              <a href="" class="logo">Fit<span style="color:#F78604">ness</span></a>
              <div class="links">
                  <ul>
                      <li><a href="../home/home.php" class="nav-link">Home</a></li>
                      <li><a href="./programs.php" class="nav-link">Programs</a></li>
                      <li><a href="./BMICalculator.php" class="nav-link">BMICalculator</a></li>
                  </ul>
                  <button href="" class="btn">Login</button>
              </div>
          </nav>
    </header>
    <div class="program-container" style="height:50vh;width:100%;">
        <div class="program-img-container" style="width:100%;height:50%;position:absolute;"></div>
        <div class="program-overlay" style="width:100%;height:50%;position:absolute;background:rgba(0,0,0,0.5);"></div>
    </div>
    <div class="subscribee" >
        <h2>Subscribe Now</h2>
    </div>
    <div class="days-section">
        <div class="days-container">
            <?php
                require_once '../Connection/connection.php';
                $query = "SELECT
                pd.Id AS ProgramDetailsId,
                p.ProgramName,
                p.Description AS ProgramDescription,
                p.Price,
                w.Name AS WorkoutName,
                w.GifUrl,
                w.Duration,
                w.Day
            FROM
                ProgramDetails pd
            JOIN
                Program p ON pd.ProgramId = p.ProgramId
            JOIN
                Workout w ON pd.WorkoutId = w.WorkoutId
            WHERE
            pd.Id = '3';
            ";

                $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<div><a href='DayWorkout.php?Id=" . $row["ProgramDetailsId"] . "&Day=" . $row["Day"] . "'>" . $row["Day"] . "</a></div>";
                    }
                }
            ?>

        </div>
    </div>
</body>
</html>