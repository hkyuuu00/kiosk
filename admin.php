<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>관리자사이트</title>
        <style>
            @font-face {
                font-family: 'TAEBAEKmilkyway';
                src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2310@1.0/TAEBAEKmilkyway.woff2') format('woff2');
                font-weight: normal;
                font-style: normal;
            }
            body {
                font-family: 'TAEBAEKmilkyway';
            }
            ul {
                background-color: #FFDAB9;
                width: 300px;
                list-style-type: none;
                padding: 0;
            }
            li a {
                display: block;
                color: #000000;
                padding: 8px;
                text-decoration: none;
                font-weight: bold;
                text-align: center;
                border: 1px solid black;
            }
            li a:hover {
                background-color: #CD853F;
                color: white;
            }
            li a.current {
                background-color: #FF6347;
                color: white;
            }
            li a:hover:not(.current) {
                background-color: #CD853F;
                color: white;
            }
            
        </style>
        
    </head>

    <body>
        <center>
            <h1>관리자 사이트</h1><br><br>
            <ul>
                <li><a href="./add.html">메뉴추가</a></li>
                <li><a href="./del.html">메뉴삭제</a></li>
                <li><a href="./order.php">주문내역</a></li>
                <li><a href="./index.html">키오스크</a></li>
            </ul>
        </center>
    </body>
</html>