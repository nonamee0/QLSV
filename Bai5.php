<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Số Lớn Hơn</title>
</head>
<body>
    <h1>Tìm Số Lớn Hơn</h1>
    <form method="post">
        <label for="so1">Số 1:</label>
        <input type="number" name="so1" id="so1" required>
        <br>
        <label for="so2">Số 2:</label>
        <input type="number" name="so2" id="so2" required>
        <br>
        <input type="submit" value="Tìm Số Lớn Hơn">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $so1 = $_POST['so1'];
        $so2 = $_POST['so2'];

        // Tìm số lớn hơn
        $soLonHon = max($so1, $so2);

        // Hiển thị kết quả
        echo "<h2>Số lớn hơn giữa $so1 và $so2 là: $soLonHon</h2>";
    }
    ?>
</body>
</html>
