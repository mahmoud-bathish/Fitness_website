<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body style="font-family:'Inter','sans-serif'">
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
            <a href="Home.php" style='text-decoration:none;color:white;background:red;border-radius:6px;padding:10px 30px;'>Back To Home Page</a>
        </div>
        </div>
    </div>
</body>
</html>