<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>주문내역</title>
        <style>
        td {
            border: 1px solid black;
        }

        </style>
    </head>

    <body>
        <center>
            <h1>주문내역</h1><br><br>
        <?php
        session_start();
        if(isset($_SESSION['admin'])){      //유저아이디에 세션가 있는지 조사
            $adminID = $_SESSION['admin'];
        
            $dbcon = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($dbcon, 'ktest');
            $query = "select * from MenuOrder order by num desc";
            $result = mysqli_query($dbcon, $query);
            
            echo "<table style='border: 1px solid black'>";
            while($row = mysqli_fetch_row($result)){
                echo "<tr>";
                echo "<td width = '120' align = 'center'>".$row[0]."</td>";
                echo "<td width = '120' align = 'center'>".$row[1]."</td>";
                echo "<td width = '120' align = 'center'>".$row[2]."개</td>";
                echo "<td width = '120' align = 'center'>".$row[3]."</td>";
                echo "</tr>";
            }
            echo "</table>";

            mysqli_close($dbcon); 
        

            
        
        }else{
            echo"<center><h1>Access Denied</h1></center>";
        }

        ?>
        </center>
    </body>
</html>
