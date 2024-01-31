<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>메뉴 삭제</title>
    </head>

    <body>
        <?php
        session_start();
        if(isset($_SESSION['admin'])){      //유저아이디에 세션가 있는지 조사
            $adminID = $_SESSION['admin'];
            ?>

        <center>
            <a href="./admin.php"><input type="button" value="뒤로가기" style="float: left;"></a>
            <form action="del_process.php" method="post">
                <h1>메뉴 삭제하기</h1><br><br>
                <table style="width: 400px; height: 70px; text-align: left;">
                    <tr>
                        <td>상품: </td>
                        <td><input type="text" name="menu" placeholder="상품명 입력"></td>
                    </tr>
                    <tr>
                        <td>종류: </td>
                        <td><select name="menuType">
                            <option value="coffie">커피</option>
                            <option value="tea">티</option>
                            <option value="latte">라떼</option>
                            <option value="smoothie">스무디/에이드</option>
                            <option value="dessert">디저트</option>
                        </select></td>
                    </tr>
                </table><br><br>
                <input type="submit" value="삭제" style="width: 100px; height: 25px;">
            </form>
        </center>


        <?php
        }else{
            echo"<center><h1>Access Denied</h1></center>";
        }

        ?>
    </body>
</html>