<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm Tra Số Nguyên Tố</title>
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
    </style>
</head>
<body>
    <h2>Kiểm Tra Số Nguyên Tố</h2>
    <form method="post" action="">
        <label for="number">Nhập số:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Kiểm Tra">
    </form>

    <?php
    // Hàm kiểm tra số nguyên tố
    function isPrime($num) {
        if ($num <= 1) {
            return false; // Số nhỏ hơn hoặc bằng 1 không phải là số nguyên tố
        }
        for ($i = 2; $i <= sqrt($num); $i++) { // Kiểm tra từ 2 đến căn bậc hai của số
            if ($num % $i == 0) {
                return false; // Nếu chia hết cho i, không phải số nguyên tố
            }
        }
        return true; // Nếu không chia hết cho bất kỳ số nào, là số nguyên tố
    }

    // Kiểm tra nếu có yêu cầu POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST['number']); // Lấy giá trị từ form
        if (isPrime($number)) {
            echo "<p>$number là số nguyên tố.</p>";
        } else {
            echo "<p>$number không phải là số nguyên tố.</p>";
        }
    }
    ?>
</body>
</html>
