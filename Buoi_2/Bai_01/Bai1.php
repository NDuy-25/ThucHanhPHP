<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính diện tích hình chữ nhật</title>
    <link rel="stylesheet" href="Bai1.css">
</head>
<body>

    <?php
        $chieu_dai = isset($_POST['chieu_dai']) ? $_POST['chieu_dai'] : "";
        $chieu_rong = isset($_POST['chieu_rong']) ? $_POST['chieu_rong'] : "";
        $dien_tich = "";

        if (isset($_POST['tinh'])) {
            if (is_numeric($chieu_dai) && is_numeric($chieu_rong)) {
                $dien_tich = $chieu_dai * $chieu_rong;
            }
        }
    ?>

    <div class="form-container">
        <form name="form_tinh_dt_hcn" action="" method="POST">
            <div class="form-title">DIỆN TÍCH HÌNH CHỮ NHẬT</div>
            
            <table>
                <tr>
                    <td class="label-col">Chiều dài:</td>
                    <td class="input-col">
                        <input type="text" name="chieu_dai" value="<?php echo $chieu_dai; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="label-col">Chiều rộng:</td>
                    <td class="input-col">
                        <input type="text" name="chieu_rong" value="<?php echo $chieu_rong; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="label-col">Diện tích:</td>
                    <td class="input-col">
                        <input type="text" name="dien_tich" class="readonly-input" value="<?php echo $dien_tich; ?>" readonly>
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