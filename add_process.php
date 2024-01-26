<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>메뉴 추가</title>
    </head>

    <body>
        <?php
            $menu = $_POST['menu'];
            $price = $_POST['price'];
            $menuType = $_POST['menuType'];

            $dir = './assets/'; // 저장할 폴더
            $file_name = basename($_FILES['m_img']['name']); // 파일 이름 1
            $imagepath = $dir . $file_name; // 파일 이름 설정
            move_uploaded_file($_FILES['m_img']['tmp_name'], $imagepath); // 이미지 파일 업로드 설정
            $dbcon = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($dbcon, 'ktest');
            $query = "INSERT INTO cafe VALUES (null, '$menu', '$price', '$menuType', '$imagepath')";
            $check = mysqli_query($dbcon, $query);
            mysqli_close($dbcon);
            // 데이터베이스 연결 종료
            echo "<center>추가되었습니다.</center>";
            echo "<meta http-equiv='refresh' content='1; url=./add.html'>";
        ?>
    </body>
</html>
