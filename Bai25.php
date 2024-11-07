<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Kiếm Chuỗi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f3f4f6;
        }
        .container {
            width: 300px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }
        h3 {
            text-align: center;
        }
        input[type="text"], #result {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        input[type="text"]:disabled {
            background-color: #e9ecef;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Tìm Kiếm Chuỗi</h3>
        <form method="post" action="">
            <label for="inputText">Chuỗi gốc:</label>
            <input type="text" name="inputText" required>

            <label for="searchWord">Từ cần tìm:</label>
            <input type="text" name="searchWord" required>

            <button type="submit" name="search">Tìm Kiếm</button>

            <label for="result">Kết quả:</label>
            <input type="text" id="result" value="<?php echo isset($resultText) ? $resultText : ''; ?>" disabled>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
        $inputText = $_POST['inputText'];
        $searchWord = $_POST['searchWord'];

        // Tìm kiếm từ trong chuỗi
        if (strpos($inputText, $searchWord) !== false) {
            $resultText = "Từ '$searchWord' đã được tìm thấy trong chuỗi.";
        } else {
            $resultText = "Từ '$searchWord' không có trong chuỗi.";
        }

        // Hiển thị kết quả
        echo "<script>document.getElementById('result').value = '".htmlspecialchars($resultText)."';</script>";
    }
    ?>
</body>
</html>
