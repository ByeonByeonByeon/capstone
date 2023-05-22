<!doctype html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WEB</title>
    </head>
    <body>
        <h1>이미지 저장 테스트</h1>
        <ol>
            <li>HTML</li>
        </ol>    
        <form action="process_create.php" method="POST">
            <p><input type="date" name="created" placeholder="created"></p>
            <p><textarea name = "location" placeholder="location"></textarea></p>
            <p><form name="fileUpload" enctype="multipart/form-data">
            <input type="file" name="imgFile" /></p>
            <p><input type="submit"></p>
        </form>

    </body>

</html>