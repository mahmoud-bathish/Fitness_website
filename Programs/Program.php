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
    <title>Program</title>
    <link rel="stylesheet" href="../Shared_Style/Header.css">
    <link rel="stylesheet" href="../Home/Style/Home.css">

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
            align-items:start;
            justify-content:center;
            margin-top:70px;
            height:50vh;
        }
        .days-container{
            width:70%;
            display:flex;
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
            border-radius:10px;
        }
        .days-container div a{
            text-decoration:none;
            color:#fff;
            width:100%;
            height:100%;
            text-align:center;
            line-height:60px;
        }
        
  header .container {
    display:flex;
    justify-content:space-between;
    padding:15px 0;
  }
  header .container .links{
    display:flex;
    gap:10px;
  }
  header .container ul{
    display:flex;

  }
  header .container ul li{
    text-decoration:none;
    padding: 0 10px;
    line-height: 40px;
    
  }
  header .container ul li a{
    color:#fff;
  }
  header .container ul li a:hover{
    color:#F78604;
  }
  
    </style>
</head>
<body>
    <header>
          <nav class="container">
              <a href="../Home/Home.php" class="logo">Fit<span style="color:#F78604">ness</span></a>
              <div class="links">
                  <ul>
                      <li><a href="../Home/Home.php" class="nav-link">Home</a></li>
                      <li><a href="./Programs.php" class="nav-link">Programs</a></li>
                      <li><a href="../BMICalculator/BMICalculator.php" class="nav-link">BMICalculator</a></li>
                  </ul>
                  <?php
                    if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == 1) {
                      echo "<a href='../Authentication/Logout.php' class='btn'>Logout</a>";  
                    } else {
                        echo "<a href='../Authentication/Login.html' class='btn'>Login</a>";
                    }
                  ?>
              </div>
          </nav>
    </header>
    <div class="program-container" style="height:50vh;width:100%;">
        <div class="program-img-container" style="width:100%;height:50%;position:absolute;">
                    <!-- <div style="background:red;width:100%;height:100%;">
                        hello
                    </div> -->
        </div>
        <div class="program-overlay" style="width:100%;height:50%;position:absolute;background:rgba(0,0,0,0.5);"></div>
    </div>
    <?php
    echo "<div class='days-section'>";
    echo "    <div class='days-container'>";
    require_once '../Connection/connection.php';
    $programId = $_GET["ProgramId"];
    $query = "SELECT * FROM program WHERE ProgramId = '$programId';";
            
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $DaysNumber = $row["DaysNumber"];
        $i = 1;
        while ($i <= $DaysNumber) {
            echo "<div><a href='DayWorkout.php?Id=" . $row["ProgramId"] . "&Day=Day ".$i."'>Day ".$i."</a></div>";
            $i++;
        }
    }
    ?>
        </div>
    </div>
</body>
</html>