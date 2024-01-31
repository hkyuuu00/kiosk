<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>관리자 계정 변경</title>
    </head>

    <body>
        <?php
        session_start();
        if(isset($_SESSION['admin'])){      //유저아이디에 세션가 있는지 조사
            $adminID = $_SESSION['admin'];
        ?>

        <center>
            <a href="./admin.php"><input type="button" value="뒤로가기" style="float: left;"></a>
            <form action="changeID_process.php" method="post">
                <h1>관리자 ID/PW 변경</h1>
                <table>
                    <tr>
                        <td>ID: </td>
                        <td><input type="text" name="changeID" placeholder="변경할 아이디입력" required></td>
                    </tr>
                    <tr>
                        <td>PW: </td>
                        <td><input type="password" name="changePW" placeholder="변경할 비밀번호입력" required></td>
                    </tr>
                </table><br>
                <input type="submit" value="변경" style="width: 100px; height: 30px;">
            </form>
        </center>

        <?php
        }else{
            echo"<center><h1>Access Denied</h1></center>";
        }

        ?>
    </body>
</html>