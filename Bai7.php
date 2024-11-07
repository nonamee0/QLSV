<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Học Tập</title>
</head>
<body>
    <h1>Kết Quả Học Tập</h1>
    <form method="post" action="">
        <label for="hk1">Điểm Học Kỳ 1:</label>
        <input type="number" name="hk1" id="hk1" required step="0.1">
        <br>
        <label for="hk2">Điểm Học Kỳ 2:</label>
        <input type="number" name="hk2" id="hk2" required step="0.1">
        <br>
        <input type="submit" value="Xem Kết Quả">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hk1 = $_POST['hk1'];
        $hk2 = $_POST['hk2'];

        // Tính điểm trung bình
        $dtb = ($hk1 + $hk2 * 2) / 3;

        // Xét kết quả và xếp loại
        if ($dtb >= 5) {
            $ketQua = "Được lên lớp";
        } else {
            $ketQua = "Ở lại lớp";
        }

        if ($dtb >= 8) {
            $xepLoai = "Giỏi";
        } elseif ($dtb >= 6.5) {
            $xepLoai = "Khá";
        } elseif ($dtb >= 5) {
            $xepLoai = "Trung bình";
        } else {
            $xepLoai = "Yếu";
        }

        // Hiển thị kết quả
        echo "<h2>Điểm Trung Bình: " . number_format($dtb, 2) . "</h2>";
        echo "<h2>Kết Quả: $ketQua</h2>";
        echo "<h2>Xếp Loại Học Lực: $xepLoai</h2>";
    }
    ?>
</body>
</html>
