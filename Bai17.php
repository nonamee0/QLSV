<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu Chương</title>
    <style>
        table {
            width: 50%;
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
    </style>
</head>
<body>
    <h2>Tính Bảng Cửu Chương</h2>
    <form method="post" action="">
        <label for="number">Nhập số (1-9):</label>
        <input type="number" id="number" name="number" min="1" max="9" required>
        <input type="submit" value="Xem Bảng Cửu Chương">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST['number']); // Lấy giá trị từ form

        echo "<h3>Bảng cửu chương của số $number</h3>";
        echo "<table>";
        echo "<tr><th>Phép nhân</th><th>Kết quả</th></tr>";

        // Sử dụng vòng lặp for để tạo bảng cửu chương
        for ($i = 1; $i <= 10; $i++) {
            $result = $number * $i; // Tính kết quả
            echo "<tr><td>$number x $i</td><td>$result</td></tr>"; // Hiển thị kết quả
        }

        echo "</table>";
    }
    ?>
</body>
</html>
