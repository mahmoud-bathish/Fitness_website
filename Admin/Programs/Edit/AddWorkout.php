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
    <title>Add Workout</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body{
            padding:0;
            margin:0;
            font-family:"Inter","Sans-serif";
        }
        *{
            margin:0;
            padding:0;
        }
        form div{
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 10px 0;
        }
        label{
            font-size: 19px;
        }
        form{
            width:50%;
        }
        input, textarea{
            padding: 10px;
            outline: none;
        }
        .submit  input{
            background-color: #F78604;
            color: #fff;
            font-size: 19px;
            border-radius: 7px;
            font-weight: 700;
            outline: none;
            border: none;
            cursor: pointer;
        }
        .add-program-container{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }
        .btns button{
            width:50%;
            height:50px;
            font-size:19px;
            border:none;
            outline:none;
            border-radius:7px;
            color: #fff;
            background:#F78604;
            cursor: pointer;
        }
        .finish-btn{
            width:50%;
            text-align:center;
            text-decoration:none;
            color:#fff;
            background:red;
            border-radius:7px;
            padding:7px;
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:19px;
        }
        .btns{
            display:flex;
            flex-direction:row;
        }
    </style>
</head>
<body>
    <div>
        <div class="add-program-container">
            <h1>Add Workout</h1>
            <?php
                require_once '../../../Connection/connection.php';
                $programId = $_GET["programId"];


                echo"<form action='AddWorkoutInDB.php?programId=".$programId."' method='post'>";
                ?>
                <div>
                    <label for="workoutName">Workout Name</label>
                    <input type="text" id="workoutName" name="workoutName" placeholder="Workout Name">
                </div>
                <div>
                    <label for="gifUrl">Gif Url</label>
                    <input type="text" id="gifUrl" name="gifUrl" placeholder="Gif Url">
                </div>
                <div>
                    <label for="sets">Sets</label>
                    <input type="number" id="sets" name="sets" placeholder="Sets">
                </div>
                <div>
                    <label for="repeat">Repeat</label>
                    <input type="number" id="repeat" name="repeat" placeholder="Repeat">
                </div>
                <div>
                    <label for="day">Day</label>
                    <input type="text" id="day" name="day" placeholder="Day">
                </div>
                <div class="btns">
                 <?php  echo " <a href='../EditProgram.php?programId=".$programId."' class='finish-btn'>Cancel</a> ";?>
                    <button type="submit" style="width:50%;">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>