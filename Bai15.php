<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Số Ngày Trong Tháng</title>
</head>
<body>
    <h2>Tính Số Ngày Trong Tháng</h2>
    <form method="post" action="">
        <label for="month">Chọn tháng (1-12):</label>
        <input type="number" id="month" name="month" min="1" max="12" required>
        <label for="year">Chọn năm:</label>
        <input type="number" id="year" name="year" required>
        <input type="submit" value="Tính Số Ngày">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $month = intval($_POST['month']); // Lấy giá trị tháng từ form
        $year = intval($_POST['year']);   // Lấy giá trị năm từ form
        $days = 0; // Biến lưu số ngày trong tháng

        // Sử dụng switch để xác định số ngày trong tháng
        switch ($month) {
            case 1: // Tháng 1
            case 3: // Tháng 3
            case 5: // Tháng 5
            case 7: // Tháng 7
            case 8: // Tháng 8
            case 10: // Tháng 10
            case 12: // Tháng 12
                $days = 31;
                break;
            case 4: // Tháng 4
            case 6: // Tháng 6
            case 9: // Tháng 9
            case 11: // Tháng 11
                $days = 30;
                break;
            case 2: // Tháng 2
                // Kiểm tra năm nhuận
                if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                    $days = 29; // Năm nhuận
                } else {
                    $days = 28; // Năm không nhuận
                }
                break;
            default:
                echo "Tháng không hợp lệ.";
                break;
        }

        if ($days > 0) {
            echo "Số ngày trong tháng $month năm $year là: $days ngày.";
        }
    }
    ?>
</body>
</html>
