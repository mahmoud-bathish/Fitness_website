<?php
session_start();
if ($_SESSION['isAdmin'] != 1) {
header("location:../../Authentication/Login.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            /* flex-direction:column; */
        }
        .formGroup{
            width:50%;
        }
        .formGroup div{
            margin:20px 0;
        }
        .formGroup .title input,
        .formGroup .img-url input{
            width:50%;
            padding:12px;
        }
        textarea{
            width:100%;
            height:200px;
            padding:12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="formGroup">
            <h1 style='text-align:center;'>Edit the Article</h1>
            <?php
                require_once '../../Connection/connection.php';
                $articleID = $_GET["articleID"];
                $query = "SELECT * FROM articles where articleID='$articleID'";

                $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    echo "<form action='EditArticleInDB.php?articleID=".$row["articleID"]."' method='post'>";
                    echo "    <div class='top' style='display:flex;width:100%;flex-direction:column;''>";
                    echo "        <div class='title' style='width:100%;'>";
                    echo "            <input type='text' style='width:100%;' id='titleInput' placeholder='Title' name='Title'>";
                    echo "        </div>";
                    echo "        <div class='img-url' style='width:100%;'>";
                    echo "            <input type='text' style='width:100%;'  id='pictureUrlInput' placeholder='Picture Url' name='ImageUrl'>";
                    echo "        </div>";
                    echo "    </div>";
                    echo "    <div class='description'>";
                    echo "        <textarea name='Description' id='descriptionInput' placeholder='Article Description' cols='30' rows='10'></textarea>";
                    echo "    </div>";
                    echo "    <div class='text'>";
                    echo "        <textarea name='Content'  id='textInput' placeholder='Content' ></textarea>";
                    echo "    </div>";
                    echo "    <div class='buttons' style='display:flex;align-items:center;justify-content:start;gap:3%;'>";
                    echo "        <a href='Articles.php' style='cursor:pointer;text-align:center;font-size:19px;text-decoration:none;color:white;background:red;width:70px;padding:7px;border-radius:7px;'>Cancel</a>";
                    echo "        <input type='submit' style=' cursor:pointer;text-align:center;font-size:19px;text-decoration:none;color:white;background:#F78604;width:80px;border:none;padding:7px;border-radius:7px;' value='Submit' />";
                    echo "    </div>";
                    echo "</form> ";
                }
            ?>
        </div>
    </div>
</body>

</html>