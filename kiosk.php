<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>키오스크</title>
        <link rel = "stylesheet" href="./css/kiosk.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>

    <body>
        <div class="menuPage">
            <center><h1 id = 'title'>Urban Oasis</h1></center>
            <nav id="menuBar">
                <ul>
                    <li><a href="?section=0">ALL</a></li>
                    <li><a href="?section=1">COFFIE</a></li>
                    <li><a href="?section=2">TEA</a></li>
                    <li><a href="?section=3">LATTE</a></li>
                    <li><a href="?section=4">ADE</a></li>
                    <li><a href="?section=5">DESSERT</a></li>
                </ul>
            </nav><br>
            <div id="content">
            <table id="Menu">
            <?php
                $dbcon = mysqli_connect('localhost','root','');
                mysqli_select_db($dbcon, 'ktest');


                $section = $_GET['section'];
                if ($section == '1') {
                    $query = "select * from cafe where menuType = 'coffie'";
                    $result = mysqli_query($dbcon, $query);
                    $count = 0;
                
                    while($row = mysqli_fetch_row($result)) {
                        if($count % 4 == 0) {
                            echo '<tr class="product">';
                        }
                        echo '<td>';
                        echo '<img src='.$row[4].'><br>';
                        echo '<span id="m1">'.$row[1].'</span><br>';
                        echo '<span id="p1">'.$row[2].'</span><br>';
                        echo '</td>';
                                            
                        if($count % 4 == 3) {
                            echo '</tr>';
                        }
                        $count++;
                    }
                    if($count % 4 != 0) {
                        echo '</tr>';
                    }
                } elseif ($section == '2') {
                    $query = "select * from cafe where menuType = 'tea'";
                    $result = mysqli_query($dbcon, $query);
                    $count = 0;
                
                    while($row = mysqli_fetch_row($result)) {
                        if($count % 4 == 0) {
                            echo '<tr class="product">';
                        }
                        echo '<td>';
                        echo '<img src='.$row[4].'><br>';
                        echo '<span id="m1">'.$row[1].'</span><br>';
                        echo '<span id="p1">'.$row[2].'</span><br>';
                        echo '</td>';
                                            
                        if($count % 4 == 3) {
                            echo '</tr>';
                        }
                        $count++;
                    }
                    if($count % 4 != 0) {
                        echo '</tr>';
                    }
                } elseif ($section == '3') {
                    $query = "select * from cafe where menuType = 'latte'";
                    $result = mysqli_query($dbcon, $query);
                    $count = 0;
                
                    while($row = mysqli_fetch_row($result)) {
                        if($count % 4 == 0) {
                            echo '<tr class="product">';
                        }
                        echo '<td>';
                        echo '<img src='.$row[4].'><br>';
                        echo '<span id="m1">'.$row[1].'</span><br>';
                        echo '<span id="p1">'.$row[2].'</span><br>';
                        echo '</td>';
                                            
                        if($count % 4 == 3) {
                            echo '</tr>';
                        }
                        $count++;
                    }
                    if($count % 4 != 0) {
                        echo '</tr>';
                    }
                } elseif ($section == '4') {
                    $query = "select * from cafe where menuType = 'smoothie'";
                    $result = mysqli_query($dbcon, $query);
                    $count = 0;
                
                    while($row = mysqli_fetch_row($result)) {
                        if($count % 4 == 0) {
                            echo '<tr class="product">';
                        }
                        echo '<td>';
                        echo '<img src='.$row[4].'><br>';
                        echo '<span id="m1">'.$row[1].'</span><br>';
                        echo '<span id="p1">'.$row[2].'</span><br>';
                        echo '</td>';
                                            
                        if($count % 4 == 3) {
                            echo '</tr>';
                        }
                        $count++;
                    }
                    if($count % 4 != 0) {
                        echo '</tr>';
                    }
                } elseif ($section == '5') {
                    $query = "select * from cafe where menuType = 'dessert'";
                    $result = mysqli_query($dbcon, $query);
                    $count = 0;
                
                    while($row = mysqli_fetch_row($result)) {
                        if($count % 4 == 0) {
                            echo '<tr class="product">';
                        }
                        echo '<td>';
                        echo '<img src='.$row[4].'><br>';
                        echo '<span id="m1">'.$row[1].'</span><br>';
                        echo '<span id="p1">'.$row[2].'</span><br>';
                        echo '</td>';
                                            
                        if($count % 4 == 3) {
                            echo '</tr>';
                        }
                        $count++;
                    }
                    if($count % 4 != 0) {
                        echo '</tr>';
                    }
                } else {
                    $query = "select * from cafe order by menuType, num";
                    $result = mysqli_query($dbcon, $query);
                    $count = 0;
                
                    while($row = mysqli_fetch_row($result)) {
                        if($count % 4 == 0) {
                            echo '<tr class="product">';
                        }
                        echo '<td>';
                        echo '<img src='.$row[4].'><br>';
                        echo '<span id="m1">'.$row[1].'</span><br>';
                        echo '<span id="p1">'.$row[2].'</span><br>';
                        echo '</td>';
                                            
                        if($count % 4 == 3) {
                            echo '</tr>';
                        }
                        $count++;
                    }
                    if($count % 4 != 0) {
                        echo '</tr>';
                    }
                }
            ?>
                </table>
            </div>
            
            <div id="bill">
                <form action="./kiosk_process.php" method="post" id="orderForm">
                    <center><h2>Order</h2></center>
                    <div id = "orderMenu">
                        <span id="order1"></span>
                        <span id="order2"></span><br>
                    </div><br>
                    <span id="result">0원</span>
                    <center>
                        <input type="button" value="전체취소" id="cancel" onclick="cancel_menu()"></a>
                        <input type="submit" value="결제하기" id="payment">
                        <input type="hidden" id="orderData" name="orderData">
                    </center>
                </form>
            </div>
        </div>
        <script>

            let params = new URLSearchParams(window.location.search);
            let section = params.get('section'); 

            if (section === '1') {
                let anchors = document.querySelectorAll('a[href="?section=1"]');
                anchors.forEach(anchor => {
                    anchor.style.color = 'black'; 
                    anchor.style.backgroundColor = 'white'
                });
            }else if (section === '2'){
                let anchors = document.querySelectorAll('a[href="?section=2"]');
                anchors.forEach(anchor => {
                    anchor.style.color = 'black'; 
                    anchor.style.backgroundColor = 'white'
                });
            }else if (section === '3'){
                let anchors = document.querySelectorAll('a[href="?section=3"]');
                anchors.forEach(anchor => {
                    anchor.style.color = 'black'; 
                    anchor.style.backgroundColor = 'white'
                });
            }else if (section === '4'){
                let anchors = document.querySelectorAll('a[href="?section=4"]');
                anchors.forEach(anchor => {
                    anchor.style.color = 'black'; 
                    anchor.style.backgroundColor = 'white'
                });
            }else if (section === '5'){
                let anchors = document.querySelectorAll('a[href="?section=5"]');
                anchors.forEach(anchor => {
                    anchor.style.color = 'black'; 
                    anchor.style.backgroundColor = 'white'
                });
            }else{
                let anchors = document.querySelectorAll('a[href="?section=0"]');
                anchors.forEach(anchor => {
                    anchor.style.color = 'black'; 
                    anchor.style.backgroundColor = 'white'
                });
            }


            

            let order = JSON.parse(localStorage.getItem('order')) || {};  // 주문 항목을 저장할 객체
            let totalCost = 0;

            function orderItem(itemName, price, quantity = 1) {
                if(order[itemName]) {
                    order[itemName].quantity += quantity;
                    order[itemName].totalPrice += price * quantity;
                    if (order[itemName].quantity <= 0) {
                        delete order[itemName];
                    }
                } else if(quantity > 0) {
                    order[itemName] = {
                        quantity: quantity,
                        price: price,
                        totalPrice: price * quantity
                    };
                }
                localStorage.setItem('order', JSON.stringify(order));
                displayOrder();  // 주문 항목을 화면에 표시
            }

            function displayOrder() {
                let orderMenu = document.getElementById('orderMenu');
                orderMenu.innerHTML = '';  // 주문 항목을 초기화
                totalCost = 0;  // 총 가격 초기화

                for(let itemName in order) {
                    let div = document.createElement('div');
                    div.className = 'item-row';  // CSS 클래스를 적용

                    let nameDiv = document.createElement('div');
                    nameDiv.className = 'item-name';  // CSS 클래스를 적용
                    nameDiv.textContent = itemName;
                    div.appendChild(nameDiv);

                    let quantityDiv = document.createElement('div');
                    quantityDiv.className = 'item-quantity';  // CSS 클래스를 적용

                    let increaseButton = document.createElement('button');
                    increaseButton.className = 'quantity-button';  // CSS 클래스를 적용
                    increaseButton.textContent = '+';
                    increaseButton.onclick = () => orderItem(itemName, order[itemName].price);
                    quantityDiv.appendChild(increaseButton);

                    quantityDiv.appendChild(document.createTextNode(` ${order[itemName].quantity} `));

                    let decreaseButton = document.createElement('button');
                    decreaseButton.className = 'quantity-button';  // CSS 클래스를 적용
                    decreaseButton.textContent = '-';
                    decreaseButton.onclick = () => orderItem(itemName, order[itemName].price, -1); // 수정된 부분: 가격을 그대로, 수량을 -1로 설정
                    quantityDiv.appendChild(decreaseButton);

                    div.appendChild(quantityDiv);

                    let priceDiv = document.createElement('div');
                    priceDiv.className = 'item-price';  // CSS 클래스를 적용
                    priceDiv.textContent = `${order[itemName].totalPrice}원`;
                    div.appendChild(priceDiv);

                    orderMenu.appendChild(div);

                    totalCost += order[itemName].totalPrice;
                }
                result.textContent = `${totalCost}원`;
            }

            function cancel_menu() {
                order = {};
                localStorage.removeItem('order');  // 주문 항목을 초기화
                displayOrder();  // 주문 항목을 화면에 표시
            }

            document.querySelectorAll('td').forEach(td => {
                td.addEventListener('click', (event) => {
                    // 클릭된 td 내의 첫 번째와 두 번째 span의 텍스트를 가져옵니다.
                    const spans = event.currentTarget.getElementsByTagName('span');
                    const itemName = spans[0].innerText;
                    const price = parseInt(spans[1].innerText);  // 텍스트를 숫자로 변환

                    // 가져온 텍스트로 상품을 주문합니다.
                    orderItem(itemName, price);
                });
            });

            document.getElementById('payment').addEventListener('click', function(e) {
                e.preventDefault();  // 폼의 자동 제출을 막음

                // 주문 내역이 비어 있지 않은 경우에만 폼 제출
                if (Object.keys(order).length > 0) {
                    document.getElementById('orderData').value = JSON.stringify(order);

                    // 주문 내역 초기화
                    order = {};
                    localStorage.removeItem('order');
                    displayOrder();

                    // 폼을 수동으로 제출
                    document.getElementById('orderForm').submit();
                } else {
                    swal({
                        icon: "error", //success, error, warning, info, question
                        title: "상품을 선택해주세요."
                    });  // 주문 내역이 비어 있는 경우 알림 표시
                }
            });

            let timeoutId = null;

            // 사용자의 활동을 감지하고, 타이머를 재설정하는 함수
            function resetTimer() {
                if (timeoutId) {
                    clearTimeout(timeoutId);  // 이전 타이머를 취소
                }

                // 90초 후에 index.html로 이동하는 타이머를 설정
                timeoutId = setTimeout(function() {
                    location.href = 'index.html';
                }, 90 * 1000);
            }

            // 페이지가 로드되면 타이머를 설정
            window.onload = resetTimer;

            // 사용자의 마우스 이동, 키보드 입력 등의 활동을 감지
            window.onmousemove = resetTimer;
            window.onmousedown = resetTimer;  // 클릭 이벤트
            window.onclick = resetTimer;      // 클릭 이벤트
            window.onscroll = resetTimer;     // 스크롤 이벤트
            window.onkeypress = resetTimer;   // 키보드 이벤트
            // 페이지가 로드될 때 주문 내역을 표시
            window.onload = function() {
                displayOrder();
            };
        </script>
    </body>
</html>