<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <link rel="stylesheet" type="text/css" href="../home/Style/index.css">
    <style>
        .containerr{
            width:90vw;
            margin:0 auto;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .containerr .content{
            width: 50%;
            display:flex;
            gap:30px;
            flex-direction:column;
        }
        .content h1{
        }
        .inp{
            padding:15px;
        }
        .calculate-btn{
            padding:20px;
            color:;
            background-color: #F78604;
            font-size:17px;
            font-weight: bold;
            letter-spacing:2;
        }
        .inp:focus{
            border-color: #F78604;
            border:1px solid #F78604;
        }
        .calculate-container{
            margin-top:20px;
        }
        .inp::placeholder{
            color:white;
        }
        .inp{
            background:black;
            outline:none;
            border:1px solid transparent;
            color:white;
        }
        .parent{
            height:100vh;
            width:100vw;
            display:flex;
            justify-content: center;
            align-items:center;
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
                <li><a href="../Programs/programs.php" class="nav-link">Programs</a></li>
                <li><a href="./BMICalculator.php" class="nav-link">BMICalculator</a></li>
            </ul>
            <button href="" class="btn">Login</button>
        </div>
    </nav>
</header>

<div style='position:relative;'>
<div class="parent" style='position:absolute;'>
        <div class="containerr">
            <div class="content">
                <h1 style="color:white;">Calculate <span style="font-weight:bold;color:#F78604;">Your BMI</span></h1>
                <p style="color:#fff;">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto, eveniet aliquam accusamus quaerat sunt minus!
                </p>
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
