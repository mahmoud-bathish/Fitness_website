<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programs</title>
    
    <link rel="stylesheet" href="../home/Style/index.css">
    <style>
        body{
            background: black;
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
                      <li><a href="../BMICalculator/BMICalculator.php" class="nav-link">BMICalculator</a></li>
                  </ul>
                  <button href="" class="btn">Login</button>
              </div>
          </nav>
    </header>
    <section>
        <div style="display:flex;align-items:center;justify-content:center;flex-direction:column;">
        <div style="display:flex;justify-content:center;flex-direction:column;align-items:center;gap:50px;margin-top: 120px;">
            <div class="title" style="color:white;text-align:center;">
                <h2>Our Programs</h2>
                <h1>BUILD YOUR BEST BODY</h1>
            </div>
            <div class='programs' style='color:white;width:80%;display:flex;justify-content:space-around;'>
            <?php
                require_once '../Connection/connection.php';                
                $query = "SELECT * from Program";
                $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<div class='program' style='border-radius:7px;width:24%;min-width:250px;height:300px;display:flex;flex-direction:column;gap:7%;padding:12px;background:black;'>";
                        echo "<div class='icon'>";
                        echo "    <img style='border-radius:50%;width:70px;height:70px;' src='" .$row["IconUrl"]. "' >";
                        echo "</div>";
                        echo "<h4 class='title'>" .$row["ProgramName"]. "</h4>";
                        echo "<div class='description'>" .$row["Description"]. "</div>";
                        #I should Add $row["Price"]
                        echo "    <div class='subscribe-btn'><a href='./Program.php' style='text-decoration:none;color:white;background:blue;padding:7px;border-radius:5px;'>Show</a></div>";
                        echo "</div>";
                    }
                }
                echo "<script>";
                echo "let programs = document.getElementsByClassName('program');";
                echo "programs[1].style.background = '#F78604';";
                echo "</script>";
                
                ?>

                <!-- <div class="program" style="width:24%;height:300px;display:flex;flex-direction:column;gap:7%;padding:12px;background:green;">
                    <div class="icon">
                        <img style="border-radius:50%;width:70px;height:70px;" src="https://cdn.pixabay.com/photo/2022/02/08/02/52/gym-7000637_640.png" alt="">
                    </div>
                    <h4 class="title">Flex Muscle</h4>
                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eligendi nam cum modi. Facere, praesentium!</div>
                    <div class="subscribe-btn"><a href="./Program.php" style="text-decoration:none;color:white;background:blue;padding:7px;border-radius:5px;">Show</a></div>
                </div>
                <div class="program" style="width:24%;height:300px;display:flex;flex-direction:column;gap:7%;padding:12px;background:black;">
                    <div class="icon">
                        <img style="border-radius:50%;width:70px;height:70px;" src="https://cdn.pixabay.com/photo/2022/02/08/02/52/gym-7000637_640.png" alt="">
                    </div>
                    <h4 class="title">Flex Muscle</h4>
                    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eligendi nam cum modi. Facere, praesentium!</div>
                    <div class="subscribe-btn"><a href="./Program.php" style="text-decoration:none;color:white;background:blue;padding:7px;border-radius:5px;">Show</a></div>
                </div>                -->
            </div>
        </div>
        </div>
    </section>

</body>
</html>