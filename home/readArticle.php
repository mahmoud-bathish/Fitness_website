<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style='display:flex;justify-content:center;'>
        <div style='width:60%;'>
        <?php
        require_once '../Connection/connection.php';
        $query = "SELECT * FROM articles where articleID = '" . $_GET["articleID"] . "'";

        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
              echo "<h1 style='text-align:center'>".$row["Title"]."</h1>";
              echo "<div class='img-container' >";
              echo "    <img src='".$row["ImageUrl"]."' style='width:100%;' alt=''>";
              echo '</div>';
              echo "<p style='font-size:21px;'>".$row["Description"]."</p>";
              echo "<div style='font-size:22px;'>".$row["Content"]."</div>";
            }
        }
        ?>
        <div class="back-btn" style='height:70px;width:100%;display:flex;align-items:center;justify-content:center;'>
            <a href="home.php" style='text-decoration:none;color:white;background:red;border-radius:6px;padding:10px 30px;'>Back To Home Page</a>
        </div>
        </div>
    </div>
</body>
</html>