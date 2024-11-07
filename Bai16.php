<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Toán Trên Dãy Số</title>
</head>
<body>
    <h2>Tính Toán Trên Dãy Số</h2>
    <form method="post" action="">
        <label for="numbers">Nhập dãy số (cách nhau bằng dấu phẩy):</label>
        <input type="text" id="numbers" name="numbers" required>
        <input type="submit" value="Tính Toán">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numbers = explode(',', $_POST['numbers']); // Chia dãy số thành mảng
        $sum = 0; // Tổng
        $max = PHP_INT_MIN; // Số lớn nhất
        $count = count($numbers); // Số lượng số trong dãy

        // Duyệt qua từng số trong mảng và thực hiện tính toán
        for ($i = 0; $i < $count; $i++) {
            $num = floatval(trim($numbers[$i])); // Chuyển đổi số và loại bỏ khoảng trắng
            $sum += $num; // Tính tổng
            if ($num > $max) {
                $max = $num; // Cập nhật số lớn nhất
            }
        }

        // Tính trung bình
        $average = $count > 0 ? $sum / $count : 0;

        echo "Tổng: $sum<br>";
        echo "Trung bình: $average<br>";
        echo "Số lớn nhất: $max<br>";
    }
    ?>
</body>
</html>
