<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Thứ Trong Tuần</title>
</head>
<body>
    <h2>Tìm Thứ Trong Tuần</h2>
    <form method="post" action="">
        <label for="day">Nhập số thứ tự (1-7):</label>
        <input type="number" id="day" name="day" min="1" max="7" required>
        <input type="submit" value="Tìm">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $day = intval($_POST['day']); // Lấy giá trị từ form

        // Sử dụng switch để xác định ngày trong tuần
        switch ($day) {
            case 1:
                echo "Chủ nhật";
                break;
            case 2:
                echo "Thứ hai";
                break;
            case 3:
                echo "Thứ ba";
                break;
            case 4:
                echo "Thứ tư";
                break;
            case 5:
                echo "Thứ năm";
                break;
            case 6:
                echo "Thứ sáu";
                break;
            case 7:
                echo "Thứ bảy";
                break;
            default:
                echo "Số nhập không hợp lệ. Vui lòng nhập số từ 1 đến 7.";
                break;
        }
    }
    ?>
</body>
</html>
