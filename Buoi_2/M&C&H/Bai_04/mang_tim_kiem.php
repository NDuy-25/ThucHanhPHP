<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tìm kiếm trong mảng</title>
    <link rel="stylesheet" href="bai4.css">
</head>
<body>

<?php
    function tim_kiem($mang, $gia_tri) {
        for ($i = 0; $i < count($mang); $i++) {
            if ((float)$mang[$i] == (float)$gia_tri) {
                return $i; 
            }
        }
        return -1; 
    }

    // Lấy dữ liệu từ Form
    $day_so     = isset($_POST['day_so']) ? $_POST['day_so'] : "";
    $so_can_tim = isset($_POST['so_can_tim']) ? $_POST['so_can_tim'] : "";

    $mang_str = "";
    $ket_qua  = "";

    if (isset($_POST['tim_kiem']) && $day_so != "" && $so_can_tim != "") {
        $mang = explode(",", $day_so);

        $mang_str = implode(", ", $mang);

        $vi_tri = tim_kiem($mang, $so_can_tim);

        if ($vi_tri != -1) {
            $ket_qua = "Tìm thấy " . $so_can_tim . " tại vị trí thứ " . ($vi_tri + 1) . " của mảng";
        } else {
            $ket_qua = "Không tìm thấy " . $so_can_tim . " trong mảng";
        }
    }
?>

<div class="form-box">
    <div class="title">TÌM KIẾM</div>

    <form action="mang_tim_kiem.php" method="POST">
        <table>
            <tr>
                <td style="width: 140px;">Nhập mảng:</td>
                <td>
                    <input type="text" name="day_so" value="<?php echo htmlspecialchars($day_so); ?>" required>
                </td>
            </tr>
            <tr>
                <td>Nhập số cần tìm:</td>
                <td>
                    <input type="text" name="so_can_tim" value="<?php echo htmlspecialchars($so_can_tim); ?>" required style="width: 100px;">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="tim_kiem" value="Tìm kiếm" class="btn-submit">
                </td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td>
                    <input type="text" class="result-input" value="<?php echo $mang_str; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Kết quả tìm kiếm:</td>
                <td>
                    <input type="text" class="result-input" value="<?php echo $ket_qua; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;" class="note">
                    (Các phần tử trong mảng sẽ cách nhau bằng dấu ",")
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>