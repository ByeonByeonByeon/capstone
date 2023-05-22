<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  'whdgns0411',
  'opentutorials');

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)) {
  $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
}

?>


<html>
<head>
<title>해양 침적 쓰레기</title>
<meta charset="utf-8">
<style>
  h1{
    font-size : 50px;
    color:9ACD32;
    text-align:center;
    border-bottom : 1px solid #9ACD32;
    padding : 15px;
  }
  p{
    text-align:center;
    font-size : 20px;
  }

  /*
  #grid{
    border:1px solid gray;
    display: grid;
    padding: 0px;
  }*/
  
  #grid1, #grid2{
    border:1px solid white;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    margin:60px;
    padding : 50px;
    text-align:center;
    font-size : 30px;
  }

  img{
    margin-left:auto;
    margin-right:auto;
  }

  #under{
    border-bottom : 1px solid #9ACD32;
    padding : 15px;
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
    <center>
    <img src="waste.jpg" width="50%" style="margin-top: 20px;">
    </center>

    <p id = "under" style="margin-top: 50px;">
    해양 ROV를 통해 수집한 해양 침적 쓰레기 이미지 정보를 이용자가 
    인터넷을 통하여 검색 및 열람할 수 있는 서비스입니다.
    </p>

    <div id="grid">
      <ol>
        <div id="grid1">
          <img src="ropes.jpg" width="80%">
          <img src="circular fish trap.jpg" width="80%">
          <img src="eel fish trap.jpg" width="80%">
          <img src="spring fish trap.jpg" width="80%">
          <a href="ropes.php">ropes</a>
          <a href="circular fish trap.php">circular fish trap</a>
          <a href="eel fish trap.php">eel fish trap</a>
          <a href="spring fish trap.php">spring fish trap</a>
        </div>
        <div id="grid2">
          <img src="rectangular fish trap.jpg" width="80%">
          <img src="fish net.jpg" width="80%">
          <img src="tire.jpg" width="80%">
          <img src="wood.jpg" width="80%">
          <a href="rectangular fish trap.php" >rectangular fish trap</a>
          <a href="fish net.php">fish net</a>
          <a href="tire.php">tire</a>
          <a href="wood.php">wood</a>
        </div>
      </ol>
    </div>

    <p style="margin-top: 100px;">
    <a href = "https://ice.pknu.ac.kr/pknuice/1" target="_blank">부경대학교 정보통신공학전공</a> <br>캡스톤 디자인<br>
    051-629-0000<br>
    </p>

  

</body>
</html>