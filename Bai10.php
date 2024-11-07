<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền Karaoke</title>
</head>
<body>
    <h2>Tính tiền Karaoke</h2>
    <form action="" method="POST">
        <label for="start">Thời gian bắt đầu (Giờ):</label>
        <input type="number" id="start" name="start" min="0" max="23" required><br><br>
        
        <label for="end">Thời gian kết thúc (Giờ):</label>
        <input type="number" id="end" name="end" min="0" max="23" required><br><br>

        <input type="submit" name="calculate" value="Tính tiền">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $start = $_POST['start'];
        $end = $_POST['end'];
        $rate = 30000; // Giá mỗi giờ
        $total = 0;

        // Kiểm tra thời gian kết thúc lớn hơn thời gian bắt đầu
        if ($end > $start) {
            $hours = $end - $start;

            // Kiểm tra khung giờ (khuyến mãi sau 18h)
            if ($start >= 18) {
                $total = $hours * ($rate * 0.8); // Giảm 20% sau 18h
            } else {
                $total = $hours * $rate;
            }

            echo "Tổng số tiền phải trả là: " . number_format($total) . " VND";
        } else {
            echo "Thời gian kết thúc phải lớn hơn thời gian bắt đầu!";
        }
    }
    ?>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền Karaoke</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            margin-bottom: 15px;
        }
        td {
            padding: 10px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            text-align: center;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tính tiền Karaoke</h2>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Thời gian bắt đầu (Giờ):</td>
                    <td><input type="number" id="start" name="start" min="0" max="23" required></td>
                </tr>
                <tr>
                    <td>Thời gian kết thúc (Giờ):</td>
                    <td><input type="number" id="end" name="end" min="0" max="23" required></td>
                </tr>
            </table>
            <input type="submit" name="calculate" value="Tính tiền">
        </form>

        <div class="result">
            <?php
            if (isset($_POST['calculate'])) {
                $start = $_POST['start'];
                $end = $_POST['end'];
                $rate = 30000; // Giá mỗi giờ
                $total = 0;

                // Kiểm tra thời gian kết thúc lớn hơn thời gian bắt đầu
                if ($end > $start) {
                    $hours = $end - $start;

                    // Kiểm tra khung giờ (khuyến mãi sau 18h)
                    if ($start >= 18) {
                        $total = $hours * ($rate * 0.8); // Giảm 20% sau 18h
                    } else {
                        $total = $hours * $rate;
                    }

                    echo "Tổng số tiền phải trả là: " . number_format($total) . " VND";
                } else {
                    echo "Thời gian kết thúc phải lớn hơn thời gian bắt đầu!";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
