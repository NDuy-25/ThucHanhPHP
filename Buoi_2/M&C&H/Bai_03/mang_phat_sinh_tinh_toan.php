<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Phát sinh mảng và tính toán</title>
    <link rel="stylesheet" href="bai3.css">
</head>
<body>

<?php

    // 1. Hàm tạo mảng ngẫu nhiên từ 0 đến 20
    function tao_mang($n) {
        $mang = array();
        for ($i = 0; $i < $n; $i++) {
            $mang[] = rand(0, 20);
        }
        return $mang;
    }

    // 2. Hàm xuất mảng ra chuỗi (ngăn cách bằng dấu cách)
    function xuat_mang($mang) {
        return implode(" ", $mang);
    }

    // 3. Hàm tính tổng các phần tử trong mảng
    function tinh_tong($mang) {
        $tong = 0;
        for ($i = 0; $i < count($mang); $i++) {
            $tong += $mang[$i];
        }
        return $tong;
    }

    // 4. Hàm tìm giá trị lớn nhất (MAX)
    function tim_max($mang) {
        $max = $mang[0];
        for ($i = 1; $i < count($mang); $i++) {
            if ($mang[$i] > $max) {
                $max = $mang[$i];
            }
        }
        return $max;
    }

    // 5. Hàm tìm giá trị nhỏ nhất (MIN)
    function tim_min($mang) {
        $min = $mang[0];
        for ($i = 1; $i < count($mang); $i++) {
            if ($mang[$i] < $min) {
                $min = $mang[$i];
            }
        }
        return $min;
    }

    $n = isset($_POST['n']) ? $_POST['n'] : "";
    $mang_kq = "";
    $max = "";
    $min = "";
    $tong = "";

    if (isset($_POST['phat_sinh']) && is_numeric($n) && $n > 0) {
        // Gọi 5 hàm đã xây dựng
        $Smang   = tao_mang($n);
        $mang_kq = xuat_mang($Smang);
        $max     = tim_max($Smang);
        $min     = tim_min($Smang);
        $tong    = tinh_tong($Smang);
    }
?>

<div class="form-box">
    <div class="title">PHÁT SINH MẢNG VÀ TÍNH TOÁN</div>
    <form action="mang_phat_sinh_tinh_toan.php" method="POST">
        <table>
            <tr>
                <td style="width: 140px;">Nhập số phần tử:</td>
                <td>
                    <input type="text" name="n" value="<?php echo htmlspecialchars($n); ?>" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="phat_sinh" value="Phát sinh và tính toán" class="btn-submit">
                </td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td>
                    <input type="text" class="result-input" value="<?php echo $mang_kq; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>GTLN (MAX) trong mảng:</td>
                <td>
                    <input type="text" class="result-input" value="<?php echo $max; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>TTNN (MIN) trong mảng:</td>
                <td>
                    <input type="text" class="result-input" value="<?php echo $min; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Tổng mảng:</td>
                <td>
                    <input type="text" class="result-input" value="<?php echo $tong; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;" class="note">
                    (Ghi chú: Các phần tử trong mảng sẽ có giá trị từ 0 đến 20)
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>