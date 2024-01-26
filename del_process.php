<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>메뉴 추가</title>
    </head>

    <body>
        <?php
            $menu = $_POST['menu'];
            $menuType = $_POST['menuType'];

            $dbcon = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($dbcon, 'ktest');
            $query = "delete from cafe where menu = '$menu'";
            $check = mysqli_query($dbcon, $query);
            
            echo "<center>삭제되었습니다.</center>";
            echo "<meta http-equiv='refresh' content='1; url=./del.html'>";

            mysqli_close($dbcon);
            // 데이터베이스 연결 종료
            
        ?>
    </body>
</html>
