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
    <title>Contact</title>
    <style>
        table tr th{
            padding:15px;
            border-bottom:1px solid #eee;
            font-size:19px;
        }
        table tr td {
            padding:15px;
            border-bottom:1px solid #eee;
            text-align:center;
        }
        table{
            border-spacing:0px;
            width:100%;
            padding:20px;
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
                        <div>
                            <a href="../Programs/Programs.php">Programs</a>
                        </div>
                        <div>
                            <a href="../Articles/Articles.php">Articles</a>
                        </div>
                        <div>
                            <a href="./Users.php">Users</a>
                        </div>
                        <div>
                            <a href="../Testimonials/Testimonials.php">Testimonials</a>
                        </div>
                        <div>
                            <a href="../NewsLetter/NewsLetter.php">News Letter Emails</a>
                        </div>
                        <div class="active">
                            <a href="./contact.php">Contact Emails</a>
                        </div>
                        <div class="logout-choice"><a href="../../Authentication/Logout.php">Logout</a></div>
                    </div>
                </div>
            </div>
            <div class="content">
            <div class='head'>
                <h1>Contact Emails</h1>
            </div>
                <div class="table" style="display:flex; justify-content:center;">
                    <table >
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                    <?php
                        require_once '../../Connection/connection.php';
                        
                        if (isset($_GET['Id'])) {
                            $deleteId = $_GET['Id'];
                            $deleteQuery = "DELETE FROM contacts WHERE Id = '$deleteId'";
                            mysqli_query($con, $deleteQuery);
                        }

                        $query = "SELECT * FROM contacts";

                        $result = mysqli_query($con,$query);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td>" . $row["Id"] . "</td>";
                                echo "<td>" . $row["Name"] . "</td>";
                                echo "<td>" . $row["Email"] . "</td>";
                                echo "<td>" . $row["Message"] . "</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>