<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc nhất</title>
</head>
<body>
    <h2>Giải phương trình bậc nhất ax + b = 0</h2>
    <form action="" method="POST">
        <label for="a">Nhập a:</label>
        <input type="number" id="a" name="a" required><br><br>
        <label for="b">Nhập b:</label>
        <input type="number" id="b" name="b" required><br><br>
        <input type="submit" name="solve" value="Giải">
    </form>

    <?php
    if (isset($_POST['solve'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];

        // Kiểm tra giá trị a
        if ($a == 0) {
            if ($b == 0) {
                echo "Phương trình có vô số nghiệm.";
            } else {
                echo "Phương trình vô nghiệm.";
            }
        } else {
            $x = -$b / $a;
            echo "Nghiệm của phương trình là x = " . $x;
        }
    }
    ?>
</body>
</html>
