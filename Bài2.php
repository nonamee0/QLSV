<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Diện Tích và Chu Vi Hình Tròn</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .form-group label {
            display: inline-block;
            width: 100px; /* Điều chỉnh kích thước nhãn */
            margin-right: 10px;
        }
        .form-group input[type="text"] {
            padding: 5px;
            width: 200px;
        }
        .result-group {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
        }
        .result-group .form-group {
            margin-bottom: 10px; /* Khoảng cách giữa các trường kết quả */
        }
        .result-group label {
            display: inline-block;
            width: 100px; /* Kích thước nhãn */
            margin-bottom: 5px;
        }
        .result {
            padding: 5px;
            width: 200px;
            border: 1px solid #ccc;
            display: inline-block;
            text-align: right;
            background-color: #f9f9f9; /* Thay đổi màu nền để dễ nhận diện */
        }
        input[type="submit"] {
            padding: 5px 10px;
            margin-top: 20px; /* Khoảng cách với các trường kết quả */
        }
    </style>
</head>
<body>
    <h1>Tính Diện Tích và Chu Vi Hình Tròn</h1>
    <form method="post" action="">
        <div class="form-group">
            <label for="radius">Bán kính:</label>
            <input type="text" id="radius" name="radius" required>
        </div>
        <div class="result-group">
            <div class="form-group">
                <label for="area">Diện tích:</label>
                <div class="result" id="area">
                    <?php
                    // Hiển thị kết quả diện tích nếu có
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $radius = $_POST['radius'];
                        if (is_numeric($radius) && $radius > 0) {
                            // Tính diện tích hình tròn
                            $area = pi() * pow($radius, 2);
                            echo number_format($area, 2);
                        } else {
                            echo "Vui lòng nhập số hợp lệ và lớn hơn 0.";
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label for="circumference">Chu vi:</label>
                <div class="result" id="circumference">
                    <?php
                    // Hiển thị kết quả chu vi nếu có
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $radius = $_POST['radius'];
                        if (is_numeric($radius) && $radius > 0) {
                            // Tính chu vi hình tròn
                            $circumference = 2 * pi() * $radius;
                            echo number_format($circumference, 2);
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <input type="submit" value="Tính diện tích và chu vi">
    </form>
</body>
</html>
