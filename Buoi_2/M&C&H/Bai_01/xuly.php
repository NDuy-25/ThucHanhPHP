<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả xử lý mảng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    $n = isset($_POST['n']) ? trim($_POST['n']) : "";

    // KIỂM TRA n SỐ NGUYÊN DƯƠNG
    if (!is_numeric($n) || $n <= 0 || floor($n) != $n) {
        echo "<script>
                alert('Lỗi: n phải là một số nguyên dương!');
                window.history.back();
              </script>";
        exit();
    }

    $n = (int)$n;

    $arr = array();
    for ($i = 0; $i < $n; $i++) {
        $arr[] = rand(-150, 150);
    }
    $mang_phat_sinh = implode(", ", $arr);

    // Khai báo các biến đếm và tính toán
    $count_chan = 0;
    $count_nho_100 = 0;
    $sum_am = 0;
    $pos_zero = array();

    // Duyệt mảng thực hiện các yêu cầu c, d, e, f
    foreach ($arr as $index => $val) {
        // c. Đếm số chẵn
        if ($val % 2 == 0) {
            $count_chan++;
        }
        // d. Đếm số < 100
        if ($val < 100) {
            $count_nho_100++;
        }
        // e. Tổng số âm
        if ($val < 0) {
            $sum_am += $val;
        }
        // f. Vị trí số 0
        if ($val == 0) {
            $pos_zero[] = $index;
        }
    }

    $vi_tri_0 = !empty($pos_zero) ? "Index: " . implode(", ", $pos_zero) : "Không có phần tử bằng 0";

    // g. Sắp xếp mảng tăng dần
    $arr_sorted = $arr;
    sort($arr_sorted);
    $mang_tang_dan = implode(", ", $arr_sorted);
?>

<div class="form-container">
    <div class="title">KẾT QUẢ XỬ LÝ MẢNG</div>

    <table>
        <tr>
            <td class="label-col">Mảng phát sinh:</td>
            <td><div class="result-box"><?php echo $mang_phat_sinh; ?></div></td>
        </tr>
        <tr>
            <td class="label-col">Số phần tử chẵn:</td>
            <td><input type="text" value="<?php echo $count_chan; ?>" readonly></td>
        </tr>
        <tr>
            <td class="label-col">Số phần tử < 100:</td>
            <td><input type="text" value="<?php echo $count_nho_100; ?>" readonly></td>
        </tr>
        <tr>
            <td class="label-col">Tổng phần tử âm:</td>
            <td><input type="text" value="<?php echo $sum_am; ?>" readonly></td>
        </tr>
        <tr>
            <td class="label-col">Vị trí số 0:</td>
            <td><input type="text" value="<?php echo $vi_tri_0; ?>" readonly></td>
        </tr>
        <tr>
            <td class="label-col">Mảng tăng dần:</td>
            <td><div class="result-box"><?php echo $mang_tang_dan; ?></div></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <a href="javascript:window.history.back();" class="back-link"> Quay lại trang trước</a>
            </td>
        </tr>
    </table>
</div>

</body>
</html>