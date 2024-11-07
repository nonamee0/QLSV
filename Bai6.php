<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào Theo Giờ</title>
</head>
<body>
    <h1>Chào Theo Giờ</h1>
    <form method="post">
        <label for="thoiGian">Nhập giờ (định dạng HH:MM):</label>
        <input type="text" name="thoiGian" id="thoiGian" placeholder="Ví dụ: 14:30" required>
        <br>
        <input type="submit" value="Chào">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $thoiGian = $_POST['thoiGian'];

        // Tách giờ và phút
        list($gio, $phut) = explode(':', $thoiGian);

        // Kiểm tra giờ và chào tương ứng
        if ($gio < 0 || $gio > 23 || $phut < 0 || $phut > 59) {
            echo "<h2>Giờ nhập không hợp lệ. Vui lòng nhập lại.</h2>";
        } else {
            if ($gio < 12) {
                echo "<h2>Chào buổi sáng!</h2>";
            } elseif ($gio < 18) {
                echo "<h2>Chào buổi chiều!</h2>";
            } else {
                echo "<h2>Chào buổi tối!</h2>";
            }
        }
    } else {
        echo "<h2>Vui lòng nhập giờ để nhận lời chào!</h2>";
    }
    ?>
</body>
</html>
