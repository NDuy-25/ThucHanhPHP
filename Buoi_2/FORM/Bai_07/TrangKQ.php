<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả phép tính</title>
    <link rel="stylesheet" href="Bai_7.css">
</head>
<body>

<?php
    $so1 = isset($_POST['so1']) ? trim($_POST['so1']) : "";
    $so2 = isset($_POST['so2']) ? trim($_POST['so2']) : "";
    $phep_tinh = isset($_POST['phep_tinh']) ? $_POST['phep_tinh'] : "Cộng";

    function kiemTraHopLe($s1, $s2, $pt) {
        if ($s1 === "" || $s2 === "" || !is_numeric($s1) || !is_numeric($s2)) {
            echo "<script>
                    alert('Lỗi: Dữ liệu nhập vào phải là số hợp lệ!');
                    window.history.back();
                  </script>";
            exit(); 
        }

        if ($pt == "Chia" && (float)$s2 == 0) {
            echo "<script>
                    alert('Lỗi: Không thể thực hiện phép chia cho 0!');
                    window.history.back();
                  </script>";
            exit(); 
        }
    }

    kiemTraHopLe($so1, $so2, $phep_tinh);

    $so1 = (float)$so1;
    $so2 = (float)$so2;

    function cong($a, $b) { return $a + $b; }
    function tru($a, $b) { return $a - $b; }
    function nhan($a, $b) { return $a * $b; }
    function chia($a, $b) { return $a / $b; }

    switch ($phep_tinh) {
        case "Cộng": $ket_qua = cong($so1, $so2); break;
        case "Trừ":  $ket_qua = tru($so1, $so2); break;
        case "Nhân": $ket_qua = nhan($so1, $so2); break;
        case "Chia": $ket_qua = chia($so1, $so2); break;
    }

    if (is_float($ket_qua)) {
        $ket_qua = round($ket_qua, 2);
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
                <a href="javascript:window.history.back(-1);" class="back-link">Quay lại trang trước</a>
            </td>
        </tr>
    </table>
</div>

</body>
</html>