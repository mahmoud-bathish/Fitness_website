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
    <title>Admin Page</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family:"Inter","Sans-serif";
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

        .articles-box {
            width: calc(600% / 7);
            height: 100vh;
        }

        .side-bar .admin-img{
            height: 15%;
            width: 100%;
            border-bottom:1px solid black;
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
.articles {
    position: relative;

  }
  .articles .container {
    display:flex;
    flex-wrap:wrap;
    gap: 40px;
}
.articles .box {
    min-width:250px;
    max-width:270px;
    box-shadow: 0 2px 15px rgb(0 0 0 / 10%);
    background-color: white;
    border-radius: 6px;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .articles .box:hover {
    transform: translateY(-10px);
    box-shadow: 0 2px 15px rgb(0 0 0 / 20%);
  }
  .articles .box .content {
    padding: 20px;
  }
  .articles .box .content h3 {
    margin: 0;
  }
  .articles .box .content p {
    margin: 10px 0 0;
    line-height: 1.5;
    color: #777;
  }
  .articles .box .info {
    padding: 20px;
    border-top: 1px solid #e6e6e7;
    display: flex;
    justify-content: start;
    gap:2%;
    align-items: center;
  }
  .articles .box .info a {
    color: var(--main-color);
    font-weight: bold;
  }
.head {
    background:yellow;
    width:100%;
    height:15%;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#eee;
}

    </style>
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
                        <div>
                            <a href="../Programs/Programs.php">Programs</a>
                        </div>
                        <div class="active">
                            <a href="./Articles.php">Articles</a>
                        </div>
                        <div>
                            <a href="../Users/Users.php">Users</a>
                        </div>
                        <div>
                            <a href="../Testimonials/Testimonials.php">Testimonials</a>
                        </div>
                        <div >
                            <a href="../NewsLetter/NewsLetter.php">News Letter Emails</a>
                        </div>
                        <div >
                            <a href="../Contact/contact.php">Contact Emails</a>
                        </div>
                        <div class="logout-choice">
                            <a href="../../Authentication/Logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="articles-box">
            <div class='head'>
                <h1 style="width:70%;margin-left:20px;">Articles</h1>
                <div style="width:30%;text-align:end;padding-right:50px;">
                    <a style='text-decoration:none;color:white;background:#F78604;padding:10px;border-radius:7px;' href="../../Home/Home.php">Go To Home</a>
                </div>
            </div>
                <div class="articles" id="articles">
                  <div style="width:calc(100% - 100px);display:flex;flex-wrap:wrap;gap:40px;justify-content:center;margin:20px 50px;">
                    <?php
                        require_once '../../Connection/connection.php';
                        
                        if (isset($_GET["articleId"])) {
                            $deleteId = $_GET["articleId"];
                            $deleteQuery = "DELETE FROM articles WHERE articleID = '$deleteId';";
                            mysqli_query($con, $deleteQuery);
                        }


                        $query = "SELECT * FROM articles";
                        
                        $result = mysqli_query($con,$query);
                        if(mysqli_num_rows($result) > 0){
                          while($row = mysqli_fetch_assoc($result)){
                                echo "<div class='box'>";
                                echo" <img style='width:100%' src=" . $row["ImageUrl"] . " alt='article_img' />";
                                echo"<div class='content'>";
                                echo "<h3>" . $row["Title"] . "</h3>";
                                echo " <p style='-webkit-line-clamp: 3;display: -webkit-box;-webkit-box-orient: vertical; overflow:hidden;'>" . $row["Description"] . "</p>";
                                echo "</div>";
                                echo "<div class='info'>";
                                echo "<a style='text-decoration:none;background:red;border-radius:7px;width:50px;padding:5px;text-align:center;color:#fff;' href='?articleId=" . $row["articleID"] . "'>Delete</a>";
                                echo "<a style='text-decoration:none;background:#F78604;border-radius:7px;width:50px;padding:5px;text-align:center;color:#fff;' href='EditArticle.php?articleID=" . $row["articleID"] . "'>Edit</a>";
                                echo "</div>";
                                echo "</div>";
                            }
                        }
                      ?>
                  </div>
                  <div style='width:100%;height:100px;display:flex;justify-content:center;align-items:center;'>
                    <a style='padding:5px;background:#F78604;color:white;font-size:19px;text-align:center;text-decoration:none;border-radius:7px;width:100px;height:50px;line-height:50px;' href="AddArticle.php">Add</a>
                  </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>