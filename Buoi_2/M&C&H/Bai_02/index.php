<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Nhập dãy số</title>
    <link rel="stylesheet" href="bai2.css">
</head>
<body>

<div class="form-box">
    <div class="title">NHẬP VÀ TÍNH TRÊN DÃY SỐ</div>

    <form name="form_day_so" action="tong_day_so.php" method="POST">
        <table>
            <tr>
                <td style="width: 110px;">Nhập dãy số:</td>
                <td>
                    <input type="text" name="day_so" placeholder="1,2,3,4,5" required>
                    <span class="note">(*)</span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="tinh_tong" value="Tổng dãy số" class="btn-submit">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;" class="note">
                    (*) Các số được nhập cách nhau bằng dấu ","
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>