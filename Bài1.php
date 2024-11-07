<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Diện Tích Hình Chữ Nhật</title>
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
            width: 100px; /* Kích thước nhãn */
            margin-right: 10px;
        }
        .form-group input[type="text"] {
            padding: 5px;
            width: 200px;
        }
        input[type="submit"] {
            padding: 5px 10px;
            margin-top: 10px;
        }
        .result-group {
            margin-top: 10px;
            display: flex;
            align-items: center;
        }
        .result-group label {
            display: inline-block;
            width: 100px; /* Kích thước nhãn */
            margin-right: 10px;
        }
        .result {
            padding: 5px;
            width: 200px;
            border: 1px solid #ccc;
            display: inline-block;
            text-align: right;
            background-color: #f9f9f9; /* Màu nền để dễ nhận diện */
        }
    </style>
</head>
<body>

    <h1>Tính Diện Tích Hình Chữ Nhật</h1>
    <form method="get" action="">
        <div class="form-group">
            <label for="length">Chiều dài:</label>
            <input type="text" id="length" name="length" required>
        </div>
        <div class="form-group">
            <label for="width">Chiều rộng:</label>
            <input type="text" id="width" name="width" required>
        </div>
        <div class="form-group result-group">
            <label for="area">Diện tích:</label>
            <div class="result" id="area">
                <?php
                // Kiểm tra xem người dùng đã nhập dữ liệu chưa
                
                if (isset($_GET['length']) && isset($_GET['width'])) {
                    // Lấy chiều dài và chiều rộng từ dữ liệu GET
                    $length = $_GET['length'];
                    $width = $_GET['width'];
                    $area = $length * $width;
                    echo number_format($area, 2);


                    // // Kiểm tra chiều dài và chiều rộng có hợp lệ không
                    // if (is_numeric($length) && is_numeric($width) && $length > 0 && $width > 0) {
                    //     // Tính diện tích
                    //     $area = $length * $width;
                    //     // Hiển thị diện tích với 2 chữ số thập phân
                    //     echo number_format($area, 2);
                    // } 
                    // else {
                    //     // Thông báo lỗi nếu nhập không hợp lệ
                    //     echo "Vui lòng nhập chiều dài và chiều rộng hợp lệ.";
                    // }
                }
                ?>
            </div>
        </div>
        <input type="submit" value="Tính diện tích">
    </form>
</body>
</html>
