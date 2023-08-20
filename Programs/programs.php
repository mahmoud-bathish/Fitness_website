
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programs</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../Shared_Style/Header.css">
    <link rel="stylesheet" href="../Home/Style/Home.css">
    <style>
        body{
            background: black;
            font-family:"Inter","Sans-serif";
        }
    </style>
</head>
<body>
    <header>
          <nav class="container">
              <a href="" class="logo">Fit<span style="color:#F78604">ness</span></a>
              <div class="links">
                  <ul>
                      <li><a href="../Home/Home.php" class="nav-link">Home</a></li>
                      <li><a href="./Programs.php" class="nav-link">Programs</a></li>
                      <li><a href="../BMICalculator/BMICalculator.php" class="nav-link">BMICalculator</a></li>
                  </ul>
                  <?php
                    session_start();

                    if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == 1) {
                      echo "<a href='../Authentication/Logout.php' class='btn'>Logout</a>";  
                    } else {
                        echo "<a href='../Authentication/Login.html' class='btn'>Login</a>";
                    }
                  ?>
              </div>
          </nav>
    </header>
    <section >
        <div style="display:flex;align-items:center;justify-content:center;flex-direction:column;">
        <div style="display:flex;justify-content:center;flex-direction:column;align-items:center;gap:50px;margin-top: 50px;width:90vw;">
            <div class="title" style="color:white;text-align:center;">
                <h2 style="font-size:30px;">Our Programs</h2>
                <h1>BUILD YOUR BEST BODY</h1>
            </div>
            <div class='programs' style='color:white;width:90%;display:flex;justify-content:space-around;flex-wrap:wrap;gap:15px;'>
            <?php
                require_once '../Connection/connection.php';                
                $query = "SELECT * from Program";
                $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){                        
                        echo "<div class='program' style='margin-top:20px;border-radius:7px;width:24%;min-width:250px;height:350px;display:flex;flex-direction:column;gap:7%;padding:20px;background:yellow;'>";
                        echo "<div class='icon'>";
                        echo "    <img style='border-radius:50%;width:70px;height:70px;' src='" .$row["IconUrl"]. "' >";
                        echo "</div>";
                        echo "<h3 class='title'>" .$row["ProgramName"]. "</h3>";
                        echo "<div class='description' style='-webkit-line-clamp: 3;display: -webkit-box;-webkit-box-orient: vertical; overflow:hidden; height:60px;'>" .$row["Description"]. "</div>";
                        echo "<div class='subscribe-btn' style='height:20%;display:flex;align-items:center;justify-content:center;gap: 5%;'><a href='./Program?ProgramId=".$row["ProgramId"]."'  style='width:100px;text-align:center;text-decoration:none;color:white;background:#F78604;padding:7px;border-radius:5px;'>Start Now</a></div>";
                        echo "</div>";
                    }
                }
                ?>
            </div>
        </div>
        </div>
    </section>
</body>
</html>