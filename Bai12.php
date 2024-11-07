<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc số</title>
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
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
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
        <h2>Đọc số</h2>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Nhập số (0-9):</td>
                    <td><input type="number" name="number" min="0" max="9" required></td>
                </tr>
            </table>
            <input type="submit" name="read" value="Đọc số">
        </form>

        <div class="result">
            <?php
            if (isset($_POST['read'])) {
                $number = $_POST['number'];

                switch ($number) {
                    case 0:
                        echo "Số không";
                        break;
                    case 1:
                        echo "Số một";
                        break;
                    case 2:
                        echo "Số hai";
                        break;
                    case 3:
                        echo "Số ba";
                        break;
                    case 4:
                        echo "Số bốn";
                        break;
                    case 5:
                        echo "Số năm";
                        break;
                    case 6:
                        echo "Số sáu";
                        break;
                    case 7:
                        echo "Số bảy";
                        break;
                    case 8:
                        echo "Số tám";
                        break;
                    case 9:
                        echo "Số chín";
                        break;
                    default:
                        echo "Số không hợp lệ!";
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
