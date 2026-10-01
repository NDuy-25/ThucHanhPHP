<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả thi đại học</title>
    <link rel="stylesheet" href="Bai_4.css">
</head>
<body>

    <?php
        $toan = isset($_POST['toan']) ? $_POST['toan'] : "";
        $ly = isset($_POST['ly']) ? $_POST['ly'] : "";
        $hoa = isset($_POST['hoa']) ? $_POST['hoa'] : "";
        $diem_chuan = isset($_POST['diem_chuan']) ? $_POST['diem_chuan'] : "";
        
        $tong_diem = "";
        $ket_qua = "";

        if (isset($_POST['xem_ket_qua'])) {
            // 1. Kiểm tra tất cả dữ liệu nhập vào phải là số
            if (is_numeric($toan) && is_numeric($ly) && is_numeric($hoa) && is_numeric($diem_chuan)) {
                
                // 2. Kiểm tra không được nhập số âm (điểm phải >= 0)
                if ($toan >= 0 && $ly >= 0 && $hoa >= 0 && $diem_chuan >= 0) {
                    $tong_diem = $toan + $ly + $hoa;

                    // Điều kiện đậu: Không bị điểm liệt (> 0) và Tổng điểm >= Điểm chuẩn
                    if ($toan > 0 && $ly > 0 && $hoa > 0 && $tong_diem >= $diem_chuan) {
                        $ket_qua = "Đậu";
                    } else {
                        $ket_qua = "Rớt";
                    }
                } else {
                    $ket_qua = "Điểm không được là số âm!";
                }
            } else {
                $ket_qua = "Vui lòng nhập số!";
            }
        }
    ?>

    <div class="form-container">
        <form name="form_ket_qua_thi" action="" method="POST">
            <div class="form-title">KẾT QUẢ THI ĐẠI HỌC</div>
            
            <table>
                <tr>
                    <td class="label-col">Toán:</td>
                    <td class="input-col">
                        <input type="text" name="toan" value="<?php echo htmlspecialchars($toan); ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="label-col">Lý:</td>
                    <td class="input-col">
                        <input type="text" name="ly" value="<?php echo htmlspecialchars($ly); ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="label-col">Hóa:</td>
                    <td class="input-col">
                        <input type="text" name="hoa" value="<?php echo htmlspecialchars($hoa); ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="label-col">Điểm chuẩn:</td>
                    <td class="input-col">
                        <input type="text" name="diem_chuan" value="<?php echo htmlspecialchars($diem_chuan); ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="label-col">Tổng điểm:</td>
                    <td class="input-col">
                        <input type="text" name="tong_diem" class="readonly-input" value="<?php echo htmlspecialchars($tong_diem); ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td class="label-col">Kết quả thi:</td>
                    <td class="input-col">
                        <input type="text" name="ket_qua" class="readonly-input" value="<?php echo htmlspecialchars($ket_qua); ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" name="xem_ket_qua" value="Xem kết quả" class="btn-submit">
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>