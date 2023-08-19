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
            <h1 style='text-align:center;'>Add Article</h1>
            <form action='AddArticleInDB.php' method='post'>
                <div class='top' style='display:flex;width:100%;flex-direction:column;'>
                    <div class='title' style='width:100%;'>
                        <input type='text' style='width:100%;' id='titleInput' placeholder='Title' name='Title'>
                    </div>
                    <div class='img-url' style='width:100%;'>
                        <input type='text' style='width:100%;'  id='pictureUrlInput' placeholder='Picture Url' name='ImageUrl'>
                    </div>
                </div>
                <div class='description'>
                    <textarea name='Description' id='descriptionInput' placeholder='Article Description' cols='30' rows='10'></textarea>
                </div>
                <div class='text'>
                    <textarea name='Content'  id='textInput' placeholder='Content' ></textarea>
                </div>
                <div class='buttons' style='display:flex;align-items:center;justify-content:start;gap:3%;'>
                    <a href='Articles.php' style='cursor:pointer;text-align:center;font-size:19px;text-decoration:none;color:white;background:red;width:70px;padding:7px;border-radius:7px;'>Cancel</a>
                    <input type='submit' style=' cursor:pointer;text-align:center;font-size:19px;text-decoration:none;color:white;background:#F78604;width:80px;border:none;padding:7px;border-radius:7px;' value="Submit" />
                </div>
            </form> 
        </div>
    </div>
</body>

</html>