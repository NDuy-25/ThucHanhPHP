<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diện tích và Chu vi Hình Tròn</title>
    <!-- Nhúng file CSS -->
    <link rel="stylesheet" href="Bai_2.css">
</head>
<body>

    <?php
        define("PI", 3.14);

        $ban_kinh = isset($_POST['ban_kinh']) ? $_POST['ban_kinh'] : "";
        $dien_tich = "";
        $chu_vi = "";

        if (isset($_POST['tinh'])) {
            if (is_numeric($ban_kinh) && $ban_kinh > 0) {
                $dien_tich = PI * pow($ban_kinh, 2);

                $chu_vi = 2 * PI * $ban_kinh;
            }
        }
    ?>

    <div class="form-container">
        <form name="form_tinh_hinh_tron" action="" method="POST">
            <div class="form-title">DIỆN TÍCH và CHU VI HÌNH TRÒN</div>
            
            <table>
                <tr>
                    <td class="label-col">Bán kính:</td>
                    <td class="input-col">
                        <input type="text" name="ban_kinh" value="<?php echo $ban_kinh; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="label-col">Diện tích:</td>
                    <td class="input-col">
                        <input type="text" name="dien_tich" class="readonly-input" value="<?php echo $dien_tich; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td class="label-col">Chu vi:</td>
                    <td class="input-col">
                        <input type="text" name="chu_vi" class="readonly-input" value="<?php echo $chu_vi; ?>" readonly>
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