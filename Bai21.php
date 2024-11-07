<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm USCLN và BSCNN</title>
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
    <h2>Tìm USCLN và BSCNN</h2>
    <form method="post" action="">
        <label for="a">Nhập số A:</label>
        <input type="number" id="a" name="a" required>
        <label for="b">Nhập số B:</label>
        <input type="number" id="b" name="b" required>
        <input type="submit" value="Tìm USCLN và BSCNN">
    </form>

    <?php
    // Hàm tìm USCLN
    function findGCD($a, $b) {
        do {
            if ($a > $b) {
                $a = $a - $b;
            } else {
                $b = $b - $a;
            }
        } while ($a != $b);
        return $a; // Trả về USCLN
    }

    // Hàm tìm BSCNN
    function findLCM($a, $b) {
        return ($a * $b) / findGCD($a, $b); // BSCNN = (A * B) / USCLN
    }

    // Kiểm tra nếu có yêu cầu POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = intval($_POST['a']); // Lấy giá trị A từ form
        $b = intval($_POST['b']); // Lấy giá trị B từ form
        $gcd = findGCD($a, $b); // Gọi hàm tìm USCLN
        $lcm = findLCM($a, $b); // Gọi hàm tìm BSCNN

        // Hiển thị kết quả
        echo "<div class='result'>";
        echo "<p>USCLN của $a và $b là: $gcd.</p>";
        echo "<p>BSCNN của $a và $b là: $lcm.</p>";
        echo "</div>";
    }
    ?>
</body>
</html>
