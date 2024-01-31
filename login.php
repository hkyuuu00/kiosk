<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>login</title>
    </head>

    <body>
        <center>
            <form action="login_process.php" method="post">
                <h1>관리자 로그인</h1>
                <table>
                    <tr>
                        <td>ID: </td>
                        <td><input type="text" name="adminID" placeholder="아이디입력" required></td>
                    </tr>
                    <tr>
                        <td>PW: </td>
                        <td><input type="password" name="adminPW" placeholder="비밀번호입력" required></td>
                    </tr>
                </table><br>
                <input type="submit" value="로그인" style="width: 100px; height: 30px;">
            </form>
        </center>
    </body>
</html>