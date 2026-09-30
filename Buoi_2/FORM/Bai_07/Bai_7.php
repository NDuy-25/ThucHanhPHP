<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Phép tính trên hai số</title>
    <link rel="stylesheet" href="Bai_7.css">
</head>
<body>

<div class="container">
    <form action="TrangKQ.php" method="POST">
        <h3 class="title">PHÉP TÍNH TRÊN HAI SỐ</h3>

        <table width="100%" cellpadding="5">
            <tr>
                <td class="phep-tinh-label">Chọn phép tính:</td>
                <td style="color: #c0392b;">
                    <input type="radio" name="phep_tinh" value="Cộng" checked> Cộng
                    <input type="radio" name="phep_tinh" value="Trừ"> Trừ
                    <input type="radio" name="phep_tinh" value="Nhân"> Nhân
                    <input type="radio" name="phep_tinh" value="Chia"> Chia
                </td>
            </tr>
            <tr>
                <td class="label-col">Số thứ nhất:</td>
                <td><input type="text" name="so1"></td>
            </tr>
            <tr>
                <td class="label-col">Số thứ nhì:</td>
                <td><input type="text" name="so2"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Tính">
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>