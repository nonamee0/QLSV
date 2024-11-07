<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Năm Âm Lịch</title>
</head>
<body>
    <h2>Tính Năm Âm Lịch</h2>
    <form method="post" action="">
        <label for="year">Nhập năm dương lịch:</label>
        <input type="number" id="year" name="year" required>
        <input type="submit" value="Tính Năm Âm Lịch">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = intval($_POST['year']); // Lấy giá trị năm dương lịch từ form

        // Sử dụng switch để xác định năm âm lịch
        switch ($year % 12) {
            case 0:
                $lunarYear = "Thân";
                break;
            case 1:
                $lunarYear = "Dậu";
                break;
            case 2:
                $lunarYear = "Tuất";
                break;
            case 3:
                $lunarYear = "Hợi";
                break;
            case 4:
                $lunarYear = "Tý";
                break;
            case 5:
                $lunarYear = "Sửu";
                break;
            case 6:
                $lunarYear = "Dần";
                break;
            case 7:
                $lunarYear = "Mão";
                break;
            case 8:
                $lunarYear = "Thìn";
                break;
            case 9:
                $lunarYear = "Tỵ";
                break;
            case 10:
                $lunarYear = "Ngọ";
                break;
            case 11:
                $lunarYear = "Mùi";
                break;
            default:
                $lunarYear = "Năm không xác định";
                break;
        }

        echo "Năm âm lịch tương ứng với năm dương lịch $year là: $lunarYear.";
    }
    ?>
</body>
</html>
