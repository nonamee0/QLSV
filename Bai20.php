<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Số Chia Hết Cho A và B</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            margin-right: 10px;
        }
        input[type="number"] {
            padding: 5px;
            width: 100px;
        }
        input[type="submit"] {
            padding: 5px 10px;
        }
        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Tìm Số Chia Hết Cho A và B</h2>
    <form method="post" action="">
        <label for="a">Nhập số A:</label>
        <input type="number" id="a" name="a" required>
        <label for="b">Nhập số B:</label>
        <input type="number" id="b" name="b" required>
        <input type="submit" value="Tìm Số Chia Hết">
    </form>

    <?php
    // Hàm tìm số chia hết cho A và B
    function findDivisible($a, $b) {
        $result = [];
        for ($i = 1; $i <= 100; $i++) { // Kiểm tra trong khoảng từ 1 đến 100
            if ($i % $a == 0 && $i % $b == 0) { // Kiểm tra chia hết cho A và B
                $result[] = $i; // Thêm vào mảng kết quả
            }
        }
        return $result; // Trả về mảng kết quả
    }

    // Kiểm tra nếu có yêu cầu POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = intval($_POST['a']); // Lấy giá trị A từ form
        $b = intval($_POST['b']); // Lấy giá trị B từ form
        $divisibles = findDivisible($a, $b); // Gọi hàm tìm số chia hết

        // Hiển thị kết quả
        echo "<div class='result'>";
        if (!empty($divisibles)) {
            echo "<p>Các số chia hết cho $a và $b trong khoảng 1 đến 100 là: " . implode(", ", $divisibles) . ".</p>";
        } else {
            echo "<p>Không có số nào chia hết cho $a và $b trong khoảng 1 đến 100.</p>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>
