<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Program</title>
    <style>
        body{
            padding:0;
            margin:0;
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
            <h1>Add Program</h1>
            <form action="./Add/AddProgram.php" method="post">
                <div>
                    <label for="programTitle">Program Title</label>
                    <input type="text" id="programTitle" name="ProgramTitle" placeholder="Program Title">
                </div>
                <div>
                    <label for="iconUrl">Icon Url</label>
                    <input type="text" id="iconUrl" name="IconUrl" placeholder="Icon Url">
                </div>
                <div>
                    <label for="price">Price</label>
                    <input type="number" id="price" name="Price" placeholder="Price">
                </div>
                <div>
                    <label for="desc">Description</label>
                    <textarea name="Description" placeholder="Description" id="desc" cols="30" rows="10"></textarea>
                </div>
                <div class="btns">
                    <a href="Programs.php" class="finish-btn">Cancel</a>
                    <button type="submit" style="width:50%;">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>