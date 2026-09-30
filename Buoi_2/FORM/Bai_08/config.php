<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Config</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.8;
        }
        .btn-back {
            margin-top: 15px;
            padding: 4px 12px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : "";
    $address  = isset($_POST['address']) ? $_POST['address'] : "";
    $phone    = isset($_POST['phone']) ? $_POST['phone'] : "";
    $gender   = isset($_POST['gender']) ? $_POST['gender'] : "";
    $country  = isset($_POST['country']) ? $_POST['country'] : "";
    $note     = isset($_POST['note']) ? $_POST['note'] : "";

    $study_str = "";
    if (isset($_POST['study']) && is_array($_POST['study'])) {
        $study_str = implode(", ", $_POST['study']);
    }
?>

    <p>Bạn đã nhập thành công, dưới đây là những thông tin bạn đã nhập:</p>
    
    <div><strong>Họ tên:</strong> <?php echo htmlspecialchars($fullname); ?></div>
    <div><strong>Address:</strong> <?php echo htmlspecialchars($address); ?></div>
    <div><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></div>
    <div><strong>Gender:</strong> <?php echo htmlspecialchars($gender); ?></div>
    <div><strong>Country:</strong> <?php echo htmlspecialchars($country); ?></div>
    
    <?php if (!empty($study_str)): ?>
        <div><strong>Study:</strong> <?php echo htmlspecialchars($study_str); ?></div>
    <?php endif; ?>

    <div><strong>Note:</strong> <?php echo nl2br(htmlspecialchars($note)); ?></div>

    <br>
    <button onclick="window.history.back();" class="btn-back">Quay về</button>

</body>
</html>