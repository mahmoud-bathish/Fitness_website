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
    <link rel="stylesheet" href="../Style/index.css">
    <title>Admin Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
        }

        .side-bar{
            width: calc(100% / 7);
            height: 100vh;
            background:#eee;
            border-bottom-right-radius: 50px;

        }

        .content {
            width: calc(600% / 7);
            height: 100vh;
        }

        .side-bar .admin-img{
            height: 15%;
            width: 100%;
        }

        .side-bar .admin-navigation {
            height: 60%;
            width: 100%;
        }

        .side-bar .admin-logout {
            height: 20%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .side-bar .admin-logout .logout-link a{
            font-size:20px;
            text-decoration:none;
            font-weight:bold;
            color: black;
        }

        .admin-img .image-container img{
            width: 100px;
            height: 100px;
            border-radius: 50px;
        }

        .admin-img .image-container {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .admin-navigation{
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .admin-navigation .choices {
            height:100%;
            width: 100%;
            display:flex;
            align-items:center;
            justify-content:start;
            flex-direction:column;
        }

        .admin-navigation .choices div{
            width:100%;
            text-align:center;
            position:relative;
        }
        .admin-navigation .choices div.active{
            background: #FFF;
        }
        .admin-navigation .choices div a {
            padding:15px 0;
            text-decoration:none;
            color:black;
            width:100%;
            height:100%;
            display:block;
        }
        .logo {
            transition: 0.3s;
            font-family: "Arbil Fatface",cursive;
            font-size: 2rem;
            letter-spacing: 1px;
            font-weight: bold;
            transition: 0.3s;
        }
    </style>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <main>
        <div class="container">
            <div class="side-bar">
                <div class="admin-img">
                    <div class="image-container">
                    <div class="logo">Fit<span style="color:#F78604">ness</span></div>
                    </div>
                </div>
                <div class="admin-navigation">
                    <div class="choices">

                    <div class="active">
                            <a href="./Programs.php">Programs</a>
                        </div>
                        <div>
                            <a href="../Articles/Articles.php">Articles</a>
                        </div>
                        <div>
                            <a href="../Users/Users.php">Users</a>
                        </div>
                        <div>
                            <a href="../Testimonials/Testimonials.php">Testimonials</a>
                        </div>
                        <div>
                            <a href="../NewsLetter/NewsLetter.php">News Letter Emails</a>
                        </div>
                        <div >
                            <a href="../Contact/contact.php">Contact Emails</a>
                        </div>
                        <div class="logout-choice"><a href="../../Authentication/Logout.php">Logout</a></div>
                    </div>
                </div>
            </div>
            <div class="content">
            <div class='head'>
                <h1>Programs</h1>
            </div>
            <section style="width:100%;height:100%;">
            <div style="width:100%;height:100%;display:flex;justify-content:center;align-items:center;">
            <div style="height:100%;width:100%;display:flex;justify-content:center;flex-direction:column;align-items:center;gap:50px;">
            <div class='programs' style='color:white;width:100%;height:100%;display:flex;justify-content:space-around;flex-wrap:wrap;'>
            <?php
                require_once '../../Connection/connection.php';

                if (isset($_GET["programId"])) {
                    $deleteId = $_GET["programId"];
                    $deleteQuery1 = "DELETE FROM Program WHERE ProgramId = '$deleteId';";
                    $deleteQuery2 = "DELETE FROM workout WHERE ProgramId = '$deleteId';";
                    mysqli_query($con, $deleteQuery1);
                    mysqli_query($con, $deleteQuery2);
                }
                $query = "SELECT * from Program";
                $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<div class='program' style='margin-top:20px;border-radius:7px;width:24%;min-width:250px;height:350px;display:flex;flex-direction:column;gap:7%;padding:20px;background:black;'>";
                        echo "<div class='icon'>";
                        echo "    <img style='border-radius:50%;width:70px;height:70px;' src='" .$row["IconUrl"]. "' >";
                        echo "</div>";
                        echo "<h3 class='title'>" .$row["ProgramName"]. "</h3>";
                        echo "<div class='description' style='-webkit-line-clamp: 4;display: -webkit-box;-webkit-box-orient: vertical; overflow:hidden;height:30%;'>" .$row["Description"]. "</div>";
                        echo "    <div class='subscribe-btn' style='height:20%;display:flex;align-items:center;justify-content:center;gap: 5%;'><a href='./EditProgram.php?programId=".$row["ProgramId"]."' style='width:50px;text-align:center;text-decoration:none;color:white;background:blue;padding:7px;border-radius:5px;'>Edit</a>";
                        echo "<a href='?programId=".$row["ProgramId"]."' style='width:50px;text-align:center;text-decoration:none;color:white;background:blue;padding:7px;border-radius:5px;'>Delete</a></div>";
                        echo "</div>";
                    }
                }
                
                ?>
                    <div style='display:flex;align-items:center;justify-content:center;width:100%;height:100px;'>
                        <a href="AddProgram.php" style='text-align:center;padding:5px;font-size:19px;text-decoration:none;color:white;background:#F78604;border-radius:7px;border:none;width:100px;height:50px;line-height:50px;'>Add</a>
                    </div>
            </div>
        </div>
        </div>
    </section>
            </div>
        </div>
    </main>
    
</body>
</html>