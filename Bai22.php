<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải Phương Trình Bậc 2</title>
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
    <h2>Giải Phương Trình Bậc 2</h2>
    <form method="post" action="">
        <label for="a">Nhập hệ số a:</label>
        <input type="number" id="a" name="a" required>
        <label for="b">Nhập hệ số b:</label>
        <input type="number" id="b" name="b" required>
        <label for="c">Nhập hệ số c:</label>
        <input type="number" id="c" name="c" required>
        <input type="submit" value="Giải Phương Trình">
    </form>

    <?php
    // Hàm giải phương trình bậc 2
    function solveQuadratic($a, $b, $c) {
        if ($a == 0) {
            return "Đây không phải là phương trình bậc 2.";
        }
        
        $delta = $b * $b - 4 * $a * $c; // Tính delta

        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a); // Nghiệm thứ nhất
            $x2 = (-$b - sqrt($delta)) / (2 * $a); // Nghiệm thứ hai
            return "Phương trình có hai nghiệm phân biệt: x1 = $x1 và x2 = $x2.";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a); // Nghiệm kép
            return "Phương trình có nghiệm kép: x = $x.";
        } else {
            return "Phương trình vô nghiệm.";
        }
    }

    // Kiểm tra nếu có yêu cầu POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = floatval($_POST['a']); // Lấy giá trị a từ form
        $b = floatval($_POST['b']); // Lấy giá trị b từ form
        $c = floatval($_POST['c']); // Lấy giá trị c từ form
        $result = solveQuadratic($a, $b, $c); // Gọi hàm giải phương trình

        // Hiển thị kết quả
        echo "<div class='result'>";
        echo "<p>$result</p>";
        echo "</div>";
    }
    ?>
</body>
</html>
