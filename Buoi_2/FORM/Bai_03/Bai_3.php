<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán tiền điện</title>
    <link rel="stylesheet" href="Bai_3.css">
</head>
<body>

    <?php
        $ten_chu_ho = isset($_POST['ten_chu_ho']) ? $_POST['ten_chu_ho'] : "";
        $chi_so_cu = isset($_POST['chi_so_cu']) ? $_POST['chi_so_cu'] : "";
        $chi_so_moi = isset($_POST['chi_so_moi']) ? $_POST['chi_so_moi'] : "";
        
        $don_gia = isset($_POST['don_gia']) ? $_POST['don_gia'] : 20000;
        
        $so_tien_thanh_toan = "";

        if (isset($_POST['tinh'])) {
            if (is_numeric($chi_so_cu) && is_numeric($chi_so_moi) && is_numeric($don_gia)) {
                $so_tien_thanh_toan = ($chi_so_moi - $chi_so_cu) * $don_gia;
            }
        }
    ?>

    <div class="form-container">
        <form name="form_tinh_tien_dien" action="" method="POST">
            <div class="form-title">THANH TOÁN TIỀN ĐIỆN</div>
            
            <table>
                <tr>
                    <td class="label-col">Tên chủ hộ:</td>
                    <td class="input-col">
                        <input type="text" name="ten_chu_ho" value="<?php echo htmlspecialchars($ten_chu_ho); ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="label-col">Chỉ số cũ:</td>
                    <td class="input-col">
                        <input type="text" name="chi_so_cu" value="<?php echo htmlspecialchars($chi_so_cu); ?>" required>
                        <span class="unit">(Kw)</span>
                    </td>
                </tr>
                <tr>
                    <td class="label-col">Chỉ số mới:</td>
                    <td class="input-col">
                        <input type="text" name="chi_so_moi" value="<?php echo htmlspecialchars($chi_so_moi); ?>" required>
                        <span class="unit">(Kw)</span>
                    </td>
                </tr>
                <tr>
                    <td class="label-col">Đơn giá:</td>
                    <td class="input-col">
                        <input type="text" name="don_gia" value="<?php echo htmlspecialchars($don_gia); ?>" required>
                        <span class="unit">(VNĐ)</span>
                    </td>
                </tr>
                <tr>
                    <td class="label-col">Số tiền thanh toán:</td>
                    <td class="input-col">
                        <input type="text" name="so_tien_thanh_toan" class="readonly-input" value="<?php echo htmlspecialchars($so_tien_thanh_toan); ?>" readonly>
                        <span class="unit">(VNĐ)</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" name="tinh" value="Tính" class="btn-submit">
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>