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
    <title>Add Testimonial</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body style="font-family: 'Inter','sans-serif';">
    <div>
        <div style='width:100%;height:100%;display:flex;align-items:center;justify-content:center;'>
            <form action="AddTestimonial.php" method="post" style='width:50%;'>
                <div style='display:flex;flex-direction:column;width:100%;gap:20px;'>
                    <label for="picture">Picture Url</label>
                    <input type="text" style='padding: 10px;' name='pictureUrl' id="picture">
                    <label for="comment">Comment</label>
                    <textarea name="comment" style='padding: 10px;' id="comment" cols="30" rows="10"></textarea>
                    <div style='width:100%;height:40px;display:flex;align-items:center;justify-content:center;gap:10px;'>
                        <a href="Testimonials.php" style="cursor:pointer;width:80px;text-align:center;font-size:19px;text-decoration:none;background:red;padding:5px;border:none;border-radius:7px;color:white;">Back</a>
                        <input type="submit" style='cursor:pointer;width:80px;padding:5px;border:none;border-radius:7px;background:#F78604;color:white;font-size:19px;'>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>