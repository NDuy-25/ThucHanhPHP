<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thay thế trong mảng</title>
    <link rel="stylesheet" href="bai5.css">
</head>
<body>

<?php
    function xuat_mang($mang) {
        return implode("  ", $mang);
    }

    function thay_the($mang, $cu, $moi) {
        for ($i = 0; $i < count($mang); $i++) {
            if ((float)$mang[$i] == (float)$cu) {
                $mang[$i] = $moi; 
            }
        }
        return $mang; 
    }

    // Nhận dữ liệu từ Form
    $day_so = isset($_POST['day_so']) ? $_POST['day_so'] : "";
    $gt_cu  = isset($_POST['gt_cu'])  ? $_POST['gt_cu']  : "";
    $gt_moi = isset($_POST['gt_moi']) ? $_POST['gt_moi'] : "";

    $mang_cu_str  = "";
    $mang_moi_str = "";

    if (isset($_POST['thay_the']) && $day_so != "") {
        $mang = explode(",", $day_so);

        $mang_cu_str = xuat_mang($mang);

        $mang_moi = thay_the($mang, $gt_cu, $gt_moi);

        $mang_moi_str = xuat_mang($mang_moi);
    }
?>

<div class="form-box">
    <div class="title">THAY THẾ</div>

    <form action="mang_thay_the.php" method="POST">
        <table>
            <tr>
                <td style="width: 140px;">Nhập các phần tử:</td>
                <td>
                    <input type="text" name="day_so" value="<?php echo htmlspecialchars($day_so); ?>" required>
                </td>
            </tr>
            <tr>
                <td>Giá trị cần thay thế:</td>
                <td>
                    <input type="text" name="gt_cu" value="<?php echo htmlspecialchars($gt_cu); ?>" required>
                </td>
            </tr>
            <tr>
                <td>Giá trị thay thế:</td>
                <td>
                    <input type="text" name="gt_moi" value="<?php echo htmlspecialchars($gt_moi); ?>" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="thay_the" value="Thay thế" class="btn-submit">
                </td>
            </tr>
            <tr>
                <td>Mảng cũ:</td>
                <td>
                    <input type="text" class="result-input" value="<?php echo $mang_cu_str; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Mảng sau khi thay thế:</td>
                <td>
                    <input type="text" class="result-input" value="<?php echo $mang_moi_str; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;" class="note">
                    (Ghi chú: Các phần tử trong mảng sẽ cách nhau bằng dấu ",")
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>