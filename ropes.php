

<html>
<head>
    <title> ropes</title>
    <meta charset = "utf-8">
    <style>
        h1{
            font-size : 50px;
            color:9ACD32;
            text-align:center;
            border-bottom : 1px solid #9ACD32;
            padding : 15px;
        }
        #tag{
            border:1px solid white;
            display: grid;
            grid-template-columns: 100px 1fr 200px 150px;
            text-align:center;
        }
        h2{
            font-size : 40px;
        }
        h3{
            border:1px solid #9ACD32;
            display: grid;
        }
        a{
            text-decoration: none;
            color: 9ACD32;
        }
        a:hover{
            color : 50C8FF;
        }
    </style>    
</head>
<body>
    <h1><a href = "main.php">해양 침적 쓰레기 데이터</a></h1>
    <h2>ropes</h2>
    <div id = "tag">
        <h3>id</h3>
        <h3>이미지</h3>
        <h3>날짜</h3>
        <h3>위치</h3>
    </div>
</body>
</html>

<?php

$conn = mysqli_connect('localhost', 'root', 'whdgns0411', 'opentutorials');

$sql = "select * from ropes";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){
    echo '<h2>'.$row['id'].'</h2>';
    $src = $row['img'];
    echo "<img src = '$src' width = '100%'/> ";
    
    echo $row['created'];
    echo $row['location'];
}

?>




