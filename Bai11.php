<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dạng Tam giác</title>
    <style>
                body {
            font-family: Arial, sans-serif;
            background-color: #f0e6cf;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffcc99;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #b85c00;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            margin-bottom: 15px;
        }
        td {
            padding: 5px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: right;
        }
        input[type="submit"] {
            background-color: #999999;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #808080;
        }
        .result {
            text-align: center;
            font-weight: bold;
            color: red;
            margin-top: 20px;
            background-color: #ffe6e6;
            padding: 10px;
            border-radius: 5px;
        }
        .unit {
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>NHẬN DẠNG TAM GIÁC</h2>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Cạnh 1:</td>
                    <td><input type="number" name="canh1" required> <span class="unit">(cm)</span></td>
                </tr>
                <tr>
                    <td>Cạnh 2:</td>
                    <td><input type="number" name="canh2" required> <span class="unit">(cm)</span></td>
                </tr>
                <tr>
                    <td>Cạnh 3:</td>
                    <td><input type="number" name="canh3" required> <span class="unit">(cm)</span></td>
                </tr>
            </table>
            <div class="result">
                <?php
                if (isset($_POST['canh1']) && isset($_POST['canh2']) && isset($_POST['canh3'])) {
                    $canh1 = $_POST['canh1'];
                    $canh2 = $_POST['canh2'];
                    $canh3 = $_POST['canh3'];

                    if ($canh1 == $canh2 && $canh2 == $canh3) {
                        echo "Tam giác đều";
                    } elseif ($canh1 == $canh2 || $canh2 == $canh3 || $canh1 == $canh3) {
                        echo "Tam giác cân";
                    } elseif ($canh1 + $canh2 > $canh3 && $canh1 + $canh3 > $canh2 && $canh2 + $canh3 > $canh1) {
                        echo "Tam giác thường";
                    } else {
                        echo "Không phải là tam giác";
                    }
                }
                ?>
            </div>
            <input type="submit" value="Nhận dạng">
        </form>
    </div>
</body>
</html>
