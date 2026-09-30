<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 1 - Nhập n</title>
    <link rel="stylesheet" href="Bai1.css">
</head>
<body>

<div class="form-container">
    <div class="title">PHÁT SINH VÀ XỬ LÝ MẢNG</div>

    <form action="xuly.php" method="POST">
        <table>
            <tr>
                <td class="label-col">Nhập n (số phần tử):</td>
                <td>
                    <input type="text" name="n" placeholder="Nhập số nguyên dương..." required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="thuc_hien" value="Thực hiện" class="btn-submit">
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>