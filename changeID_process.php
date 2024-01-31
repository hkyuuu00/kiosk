<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>changeID/PW</title>
    </head>

    <body>
        <center>
        <?php
        session_start();
        if(isset($_SESSION['admin'])){      //유저아이디에 세션가 있는지 조사
            $adminID = $_SESSION['admin'];
        
            $changeID = $_POST['changeID'];
            $changePW = $_POST['changePW'];
        
            $dbcon = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($dbcon, 'ktest');
            $query = "update admin set adminID = '$changeID', adminPW = '$changePW' where adminID = '$adminID';";
            $result = mysqli_query($dbcon, $query);
            
            echo "<center>아이디 비밀번호가 변경되었습니다.</center>";
            echo "<meta http-equiv='refresh' content='2; url=./logout.php'>";    
        }else{
            echo"<center><h1>Access Denied</h1></center>";
        }

        ?>
        </center>
    </body>
</html>