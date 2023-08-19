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
</head>
<body>
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