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
            $query1 = "select * from cafe where menu = '$menu'";
            $check = mysqli_query($dbcon, $query1);
            $count = mysqli_num_rows($check);
            
            if($count > 0){
                $query2 = "delete from cafe where menuType = '$menuType'";
                $result = mysqli_query($dbcon, $query2);
                echo "<center>삭제되었습니다.</center>";
                echo "<meta http-equiv='refresh' content='1; url=./del.html'>";
            }else{
                echo "<center>오류가 발생하였습니다.</center>";
            }

            mysqli_close($dbcon);
            // 데이터베이스 연결 종료
            
        ?>
    </body>
</html>
