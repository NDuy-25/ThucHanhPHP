<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tổng dãy số</title>
    <link rel="stylesheet" href="bai2.css">
</head>
<body>

<?php
    $day_so = isset($_POST['day_so']) ? $_POST['day_so'] : "";
    $tong = 0;

    if ($day_so != "") {
        $mang = explode(",", $day_so);

        for ($i = 0; $i < count($mang); $i++) {
            $tong += (float)$mang[$i];
        }
    }
?>

<div class="form-box">
    <div class="title">NHẬP VÀ TÍNH TRÊN DÃY SỐ</div>

    <table>
        <tr>
            <td style="width: 110px;">Nhập dãy số:</td>
            <td>
                <input type="text" value="<?php echo htmlspecialchars($day_so); ?>" readonly>
            </td>
        </tr>
        <tr>
            <td>Tổng dãy số:</td>
            <td>
                <input type="text" class="result-input" value="<?php echo $tong; ?>" readonly>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center; padding-top: 10px;">
                <a href="javascript:window.history.back();" class="back-link">Quay lại trang trước</a>
            </td>
        </tr>
    </table>
</div>

</body>
</html>