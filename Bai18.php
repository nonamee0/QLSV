<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu Chương Mở Rộng</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .header {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <h2>Bảng Cửu Chương Mở Rộng</h2>
    <form method="post" action="">
        <label for="number">Nhập số (1-9):</label>
        <input type="number" id="number" name="number" min="1" max="9" required>
        <input type="submit" value="Xem Bảng Cửu Chương">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST['number']); // Lấy giá trị từ form

        echo "<h3>Bảng cửu chương mở rộng của số $number</h3>";
        
        // Tạo bảng HTML
        echo "<table>";
        
        // Duyệt qua các số từ 1 đến 9
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>"; // Bắt đầu hàng mới

            // Vòng lặp lồng nhau để tạo bảng cửu chương cho từng số
            for ($j = 1; $j <= 10; $j++) {
                $result = $i * $j; // Tính kết quả
                echo "<td>$i x $j = $result</td>"; // Hiển thị kết quả
            }
            echo "</tr>"; // Kết thúc hàng
        }

        echo "</table>";
    }
    ?>
</body>
</html>
