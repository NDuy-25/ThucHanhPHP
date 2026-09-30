<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Tiền Karaoke</title>
    <link rel="stylesheet" href="Bai_5.css">
</head>
<body>
    <?php
    $timestart = isset($_POST['timestart']) ? $_POST['timestart'] : "";
    $timeend = isset($_POST['timeend']) ? $_POST['timeend'] : "";

    $monney = "";
    $error = "";

    if (isset($_POST['tinh_tien'])) {
        if (is_numeric($timestart) && is_numeric($timeend)) {
            if ($timeend <= $timestart) {
                $error = "!!! Giờ kết thúc phải lớn hơn giờ bắt đầu !!!";
            }
            elseif ($timestart < 10 || $timeend > 24) {
                $error = "!!! Chưa tới giờ mở cửa (10h - 24h) !!!"; 
            }
            else {
                $tong_tien = 0; 

                // KHUNG 1: 10h - 17h
                $start_k1 = max($timestart, 10);
                $end_k1 = min($timeend, 17);
                if ($end_k1 > $start_k1) { 
                    $tong_tien += ($end_k1 - $start_k1) * 20000;
                }

                // KHUNG 2: 17h - 24h
                $start_k2 = max($timestart, 17);
                $end_k2 = min($timeend, 24);
                if ($end_k2 > $start_k2) {
                    $tong_tien += ($end_k2 - $start_k2) * 45000;
                }

                $monney = $tong_tien;
            }
        } else {
            $error = "Vui lòng nhập giờ hợp lệ!";
        }
    }
    ?>

    <!-- Form HTML hiển thị -->
    <div class="form-container">
        <form name="form_karaoke" action="" method="POST">
            <div class="form-title">TÍNH TIỀN KARAOKE</div>
            
            <table>
                <tr>
                    <td class="label-col">Giờ bắt đầu:</td>
                    <td class="input-col">
                        <input type="text" name="timestart" value="<?php echo htmlspecialchars($timestart); ?>" required>
                        <span class="unit">(h)</span>
                    </td>
                </tr>
                <tr>
                    <td class="label-col">Giờ kết thúc:</td>
                    <td class="input-col">
                        <input type="text" name="timeend" value="<?php echo htmlspecialchars($timeend); ?>" required>
                        <span class="unit">(h)</span>
                    </td>
                </tr>
                <tr>
                    <td class="label-col">Tiền thanh toán:</td>
                    <td class="input-col">
                        <input type="text" name="monney" class="readonly-input" value="<?php echo htmlspecialchars($monney); ?>" readonly>
                        <span class="unit">(VNĐ)</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" name="tinh_tien" value="Tính tiền" class="btn-submit">
                    </td>
                </tr>
            </table>

            <?php if (!empty($error)): ?>
                <div class="error-message"><?php echo $error; ?></div>
            <?php endif; ?>
        </form>
    </div>

</body>
</html>