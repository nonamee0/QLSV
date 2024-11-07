<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc Số Có 3 Chữ Số</title>
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
    <h2>Đọc Số Có 3 Chữ Số</h2>
    <form method="post" action="">
        <label for="number">Nhập số (0-999):</label>
        <input type="number" id="number" name="number" min="0" max="999" required>
        <input type="submit" value="Đọc Số">
    </form>

    <?php
    // Hàm đọc số
    function readNumber($number) {
        // Mảng chứa tên các số
        $units = ["", "một", "hai", "ba", "bốn", "năm", "sáu", "bảy", "tám", "chín"];
        $tens = ["", "mười", "hai mươi", "ba mươi", "bốn mươi", "năm mươi", "sáu mươi", "bảy mươi", "tám mươi", "chín mươi"];
        $hundreds = ["", "một trăm", "hai trăm", "ba trăm", "bốn trăm", "năm trăm", "sáu trăm", "bảy trăm", "tám trăm", "chín trăm"];

        // Kiểm tra số có 3 chữ số
        if ($number < 0 || $number > 999) {
            return "Số không hợp lệ. Vui lòng nhập số từ 0 đến 999.";
        }

        // Tách số thành hàng trăm, hàng chục và hàng đơn vị
        $h = floor($number / 100);
        $t = floor(($number % 100) / 10);
        $u = $number % 10;

        $result = "";

        // Đọc hàng trăm
        $result .= $hundreds[$h];

        // Đọc hàng chục
        if ($t == 1 && $u > 0) {
            $result .= " " . $tens[$t] . " " . $units[$u];
        } else {
            $result .= " " . $tens[$t];
            // Đọc hàng đơn vị
            if ($u > 0) {
                $result .= " " . $units[$u];
            }
        }

        // Xóa khoảng trắng thừa
        return trim($result);
    }

    // Kiểm tra nếu có yêu cầu POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST['number']); // Lấy giá trị số từ form
        $result = readNumber($number); // Gọi hàm đọc số

        // Hiển thị kết quả
        echo "<div class='result'>";
        echo "<p>Số $number được đọc là: $result.</p>";
        echo "</div>";
    }
    ?>
</body>
</html>
