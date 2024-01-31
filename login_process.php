<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>login</title>
    </head>

    <body>
    <?php
    $adminID = $_POST['adminID'];
    $adminPW = $_POST['adminPW'];

    $dbcon = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($dbcon, 'ktest');
    $query = "select * from admin where adminID = '$adminID'";
    $result = mysqli_query($dbcon, $query);
    $row = mysqli_fetch_row($result);

    if(isset($row[1], $adminPW) && $row[1] === $adminPW){
        echo "<center>관리자 계정이 로그인 되었습니다. 잠시후 관리자 페이지로 넘어갑니다.</center>";
        echo "<meta http-equiv='refresh' content='2; url=./admin.php'>";

        session_start();
        $_SESSION['admin'] = $adminID; 
        $_SESSION['time'] = time();
    
    }else{
        echo "<center>입력하신 ID 혹은 비밀번호가 없거나 다릅니다.</center>";
        echo "<meta http-equiv='refresh' content='2; url=./login.php'>";
    }
    ?>
    </body>
</html>


