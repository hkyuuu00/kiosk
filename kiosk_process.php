<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>키오스크 결제</title>
        <style>
            @font-face {
                font-family: 'ChungjuKimSaengTTF';
                src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2312-1@1.1/ChungjuKimSaengTTF.woff2') format('woff2');
                font-weight: normal;
                font-style: normal;
            }
            @font-face {
                font-family: 'DAEAM_LEE_TAE_JOON';
                src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2312-1@1.1/DAEAM_LEE_TAE_JOON.woff2') format('woff2');
                font-weight: normal;
                font-style: normal;
            }
            body {
                font-family: 'ChungjuKimSaengTTF';
                background-color: white;
            }


            #title {
                font-family: 'DAEAM_LEE_TAE_JOON';
                font-size: 40px;
            }
            #pay {
                border: 2px solid black;
                border-radius: 5px;
                width: 400px;
                height: 350px;
                overflow: auto;
            }
            #card {
                font-family: 'ChungjuKimSaengTTF';
                border: 2px solid darkgray;
                border-radius: 5px;
                width: 200px;
                height: 45px;
                background-color: darkgray;
                color: black;
                font-size: 20px;
                transition: background-color 0.3s ease;
            }
            #backpage {
                font-family: 'ChungjuKimSaengTTF';
                border: 2px solid darkgray;
                border-radius: 5px;
                width: 80px;
                height: 30px;
                background-color: darkgray;
                color: black;
                transition: background-color 0.3s ease;
                float: center;
                position: relative;
                left: 160px;
                bottom: 20px;
            }
            #card:active, #backpage:active {
                background-color: black;
                color: white;
            }
            table {
                position: relative;
                right: 10px;
                text-align: center;
                width: 400px;
            }
            
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </head>

    <body>
        <div class="paymentPage">
            <center>
                <h1 id = 'title'>Urban Oasis</h1><br>
                <h2>결제</h2><br>
                <a href = "./index.html"><input type = "button" value="처음으로" id="backpage"></a><br>
                <div id="pay"><br>
                    <table>
                        <tr>
                            <td style="color: gray;">상품명</td>
                            <td style="color: gray;">수량</td>
                            <td style="color: gray;">가격</td>
                        </tr>
                    
                    
                    <?php
                    $data = $_POST['orderData'];

                    // JSON 문자열을 배열로 변환
                    $order = json_decode($data, true);
                    $total = 0;

                    foreach ($order as $itemName => $itemData) {
                        // 상품명, 수량, 가격, 그리고 총 가격 출력
                        echo '<tr>';
                        echo '<td>' . $itemName . '</td>'
                        . '<td>' . $itemData['quantity'] . '</td>'
                        . '<td>' . $itemData['quantity'] * $itemData['price'] . '원</td>';
                        echo '</tr>';
                       $total += $itemData['price'] * $itemData['quantity'];
                    }
                    ?>
                    </table>
                </div>
                <?php
                echo "<h2>총: ".$total ."원<h2>";
                ?>
                <input type="button" id="card" onclick="card()" value="결제하기">
            </center>
        </div>
        <script>
            function card() {
                Swal.fire({
                    title: "카드를 넣어주세요",
                    text: "넣은 후 OK버튼을 눌러주세요",
                    icon: "info"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "결제가 완료되었습니다.",
                            showConfirmButton: false,
                            timer: 1500
                        }).then(() => {
                            Swal.fire({
                                title: "영수증을 출력하시겠습니까?",
                                icon: "question",
                                showCancelButton: true,
                                confirmButtonColor: "#3085d6",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "네",
                                cancelButtonText: "아니오"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    Swal.fire({
                                        title: "영수증이 출력됩니다.",
                                        text: "주문해주셔서 감사합니다!",
                                        icon: "success"
                                    }).then(() => {
                                        location.href = 'index.html';  
                                    });
                                }else{
                                    location.href = 'index.html';  
                                }
                            });
                        });
                    }
                });
            }
        </script>
    </body>
</html>
