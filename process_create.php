<?php
/*
$myTempFile = $_FILES['imgFile']['tmp_name'];


    // 파일명을 기존의 파일명을 그대로 쓰고 싶은 경우
    $fileName = $_FILES['imgFile']['name'];
    // 파일 타입 및 확장자 구하기
    $fileTypeExtension = explode("/", $_FILES['imgFile']['type']);

    // 파일 타입
    $fileType = $fileTypeExtension[0];
    // 파일 확장자
    $extention = $fileTypeExtension[1];

    // 확장자 검사
    $isExtGood = false;

    switch ($extention) {
      case 'jpeg':
      case 'bmp':
      case 'gif':
      case 'png':
        $isExtGood = true;
        break;
      default:
        echo "허용하는 확장자는 jpg, bmp, gif, png 입니다. - switch";
        exit;
        break;
    }
*/

$conn = mysqli_connect('localhost', 'root', 'whdgns0411', 'opentutorials');

$sql = "
    insert into ropes 
    (img, created, location) 
    values(
        '{$_POST['imgFile']}',
        '{$_POST['created']}',
        '{$_POST['location']}'
    )
";


mysqli_query($conn, $sql);
echo $sql;
?>

