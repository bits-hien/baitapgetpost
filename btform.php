<!DOCTYPE html>
<html>
    <head>
        <title>BÀI TẬP GET & POST</title>
    </head>
    <body>
        <h1>THỰC HIỆN CÁC PHÉP TÍNH SAU</h1>
        <div stype="line-height:75px">
            <form action="http://localhost:8080/lesson2/btform.php" method="get">
                <p>Số thứ nhất:<input type="number" name="first" value="first" /></p>
                <p>Số thứ hai: <input type="number" name="second" value="second" /></p>
                <p>Phép tính:  <input type="text" name="phep_tinh" /></p>
                <p><input type="submit" name="submit" value="Tính" /></p>
            </form>
        </div>
    </body>
</html>

<?php
    if($_GET['first'] || $_GET['second']){
        $Ket_qua = 0;
        if($_GET['phep_tinh'] == '+'){
            echo "Kết quả =" . ($_GET['first'] + $_GET['second']). "<br>";
        }
        if($_GET['phep_tinh'] == '-'){
            echo "Kết quả =" . ($_GET['first'] - $_GET['second']). "<br>";
        }
        if($_GET['phep_tinh'] == '*'){
            echo "Kết quả =" . ($_GET['first'] * $_GET['second']). "<br>";
        }
        if($_GET['phep_tinh'] == '/'){
            echo "Kết quả =" . ($_GET['first'] / $_GET['second']). "<br>";
        }
    }
?>