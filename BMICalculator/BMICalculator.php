<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="../Shared_Style/Header.css">
    <link rel="stylesheet" href="./Style/BMICalculator.css">
    <link rel="stylesheet" href="../Home/Style/Home.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body style="background:black;">

<header>
    <nav class="container">
        <a href="" class="logo">Fit<span style="color:#F78604">ness</span></a>
        <div class="links">
            <ul>
                <li><a href="../Home/Home.php" class="nav-link">Home</a></li>
                <li><a href="../Programs/Programs.php" class="nav-link">Programs</a></li>
                <li><a href="./BMICalculator.php" class="nav-link">BMICalculator</a></li>
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

<div style='position:relative; '>
<div class="parent"  style='position:absolute;width:100vw;'>
        <div class="container">
            <div class="content">
                <h1 style="color:white;">Calculate <span style="font-weight:bold;color:#F78604;">Your BMI</span></h1>
                <p style="color:#fff;">Welcome to our BMI calculator! Enter your height and weight to calculate your BMI.</p>

                <form method="post" action="BMICalculator.php">
                    <div style="width:70%;">
                        <div>
                            <input class="inp" type="number" name="weight" placeholder="Weight" style="width:49%;" >
                            <input class="inp" type="number" name="height" placeholder="Height" style="width:49%;">
                        </div>
                        <div class="calculate-container" >
                            <input class="calculate-btn" type="submit" value="Calculate" style="width:100%;cursor:pointer;">
                        </div>
                    </div>
                </form>
            </div>
            <div class="image">
                <div class="img-container">
                    <img src="../assets/imgs/coach-removebg-preview.png" alt="coach">
                </div>
            </div>
        </div> 
    </div>

    <div id="popupContainer" class="popup-container" style="display:none;justify-content:center;align-items:center;width:100%;z-index:10;background-color: rgba(0, 0, 0, 0.5);height:100vh;position:absolute;">
        <div class="popup-content" style='background-color: #F78604;color:white;border-radius:10px;width:50%;height:50%;'>
            <div style='height:10%;width:100%;text-align:end;padding-right:1%;'>
                <span class="close-btn" onclick="hidePopup()"style='cursor:pointer;font-size:30px;text-align:center;width:100%;'>&times;</span>
            </div>
            <div id="resultContainer" style="display:flex;align-items:center;justify-content:center;height:80%;width:100%;font-size:24px;line-height:1.6;"></div>
        </div>
    </div>
</div>

<script>
    // Function to show the popup with the result
    function showPopup(result) {
        const resultContainer = document.getElementById("resultContainer");
        resultContainer.innerHTML = result;
        document.getElementById("popupContainer").style.display = "flex";
    }

    // Function to hide the popup
    function hidePopup() {
        document.getElementById("popupContainer").style.display = "none";
    }
</script>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    if (empty($weight) || empty($height)) {
        echo "Please enter both weight and height.";
        exit;
    }

    $bmi = $weight / (($height / 100) * ($height / 100));
    $bmiCategory = getBMICategory($bmi);

    $result = "Your BMI: " . number_format($bmi, 2) . "<br>";
    $result .= "Category: " . $bmiCategory;

    // Add this line to pass the result to JavaScript
    echo "<script>showPopup('" . addslashes($result) . "');</script>";
}

function getBMICategory($bmi) {
    if ($bmi < 18.5) {
        return "Underweight";
    } else if ($bmi >= 18.5 && $bmi < 25) {
        return "Normal weight";
    } else if ($bmi >= 25 && $bmi < 30) {
        return "Overweight";
    } else {
        return "Obese";
    }
}
?>
