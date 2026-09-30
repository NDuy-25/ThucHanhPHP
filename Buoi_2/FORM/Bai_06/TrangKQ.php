<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả phép tính</title>
    <link rel="stylesheet" href="Bai_6.css">
</head>
<body>

<?php
    function cong($a, $b) { return $a + $b; }
    function tru($a, $b) { return $a - $b; }
    function nhan($a, $b) { return $a * $b; }
    function chia($a, $b) { 
        return ($b != 0) ? ($a / $b) : "Không chia được cho 0"; 
    }

    $so1 = $_POST['so1'];
    $so2 = $_POST['so2'];
    $phep_tinh = $_POST['phep_tinh'];
    $ket_qua = "";

    switch ($phep_tinh) {
        case "Cộng":
            $ket_qua = cong($so1, $so2);
            break;
        case "Trừ":
            $ket_qua = tru($so1, $so2);
            break;
        case "Nhân":
            $ket_qua = nhan($so1, $so2);
            break;
        case "Chia":
            $ket_qua = chia($so1, $so2);
            break;
    }
?>

<div class="container">
    <h3 class="title">PHÉP TÍNH TRÊN HAI SỐ</h3>

    <table width="100%" cellpadding="5">
        <tr>
            <td class="phep-tinh-label">Chọn phép tính:</td>
            <td style="color: #c0392b; font-weight: bold;">
                <?php echo $phep_tinh; ?>
            </td>
        </tr>
        <tr>
            <td class="label-col">Số 1:</td>
            <td><input type="text" value="<?php echo $so1; ?>" readonly></td>
        </tr>
        <tr>
            <td class="label-col">Số 2:</td>
            <td><input type="text" value="<?php echo $so2; ?>" readonly></td>
        </tr>
        <tr>
            <td class="label-col">Kết quả:</td>
            <td><input type="text" value="<?php echo $ket_qua; ?>" readonly></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center; padding-top: 10px;">
                <!-- Đường link quay lại trang trước bằng Javascript theo hướng dẫn -->
                <a href="javascript:window.history.back(-1);" class="back-link">Quay lại trang trước</a>
            </td>
        </tr>
    </table>
</div>

</body>
</html>