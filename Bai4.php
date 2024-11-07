<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Cạnh Huyền Tam Giác Vuông</title>
</head>
<body>
    <h1>Tính Cạnh Huyền của Tam Giác Vuông</h1>
    <form method="post">
        <label for="canhA">Cạnh A:</label>
        <input type="number" name="canhA" id="canhA" required>
        <br>
        <label for="canhB">Cạnh B:</label>
        <input type="number" name="canhB" id="canhB" required>
        <br>
        <input type="submit" value="Tính Cạnh Huyền">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $canhA = $_POST['canhA'];
        $canhB = $_POST['canhB'];

        // Hàm tính cạnh huyền
        function tinhCanhHuyen($canhA, $canhB) {
            return sqrt(pow($canhA, 2) + pow($canhB, 2));
        }

        // Tính cạnh huyền
        $canhHuyen = tinhCanhHuyen($canhA, $canhB);

        // Hiển thị kết quả
        echo "<h2>Cạnh huyền của tam giác vuông với các cạnh $canhA và $canhB là: " . number_format($canhHuyen, 2) . "</h2>";
    }
    ?>
</body>
</html>
