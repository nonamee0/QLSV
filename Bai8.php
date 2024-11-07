<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính điểm thi Đại học</title>
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
        <h2>Tính điểm thi Đại học</h2>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Điểm Toán:</td>
                    <td><input type="number" name="toan" min="0" max="10" step="0.01" required></td>
                </tr>
                <tr>
                    <td>Điểm Lý:</td>
                    <td><input type="number" name="ly" min="0" max="10" step="0.01" required></td>
                </tr>
                <tr>
                    <td>Điểm Hóa:</td>
                    <td><input type="number" name="hoa" min="0" max="10" step="0.01" required></td>
                </tr>
            </table>
            <input type="submit" name="calculate" value="Tính điểm">
        </form>

        <div class="result">
            <?php
            if (isset($_POST['calculate'])) {
                $toan = $_POST['toan'];
                $ly = $_POST['ly'];
                $hoa = $_POST['hoa'];
                $diemChuan = 15; // Điểm chuẩn mặc định
                $tongDiem = $toan + $ly + $hoa;

                // Kiểm tra điều kiện
                if ($tongDiem >= $diemChuan) {
                    echo "Tổng điểm của bạn là: " . $tongDiem . "<br>Bạn đã đậu!";
                } else {
                    echo "Tổng điểm của bạn là: " . $tongDiem . "<br>Bạn đã rớt!";
                }
            }
            ?>
        </div>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính điểm thi Đại học</title>
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
            width: 350px;
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
        .result, .info {
            text-align: center;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tính điểm thi Đại học</h2>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Điểm Toán:</td>
                    <td><input type="number" name="toan" min="0" max="10" step="0.01" required></td>
                </tr>
                <tr>
                    <td>Điểm Lý:</td>
                    <td><input type="number" name="ly" min="0" max="10" step="0.01" required></td>
                </tr>
                <tr>
                    <td>Điểm Hóa:</td>
                    <td><input type="number" name="hoa" min="0" max="10" step="0.01" required></td>
                </tr>
            </table>

            <!-- Hiển thị điểm chuẩn -->
            <div class="info">
                <p>Điểm chuẩn: 20</p>
            </div>

            <input type="submit" name="calculate" value="Tính điểm">
        </form>

        <div class="result">
            <?php
            if (isset($_POST['calculate'])) {
                $toan = $_POST['toan'];
                $ly = $_POST['ly'];
                $hoa = $_POST['hoa'];
                $diemChuan = 20; // Điểm chuẩn cố định là 20
                $tongDiem = $toan + $ly + $hoa;

                // Kiểm tra điều kiện đậu/rớt
                if ($tongDiem >= $diemChuan) {
                    echo "Tổng điểm của bạn là: " . $tongDiem . "<br>Bạn đã đậu!";
                } else {
                    echo "Tổng điểm của bạn là: " . $tongDiem . "<br>Bạn đã rớt!";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
