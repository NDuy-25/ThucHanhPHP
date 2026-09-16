<!DOCTYPE html>

<html lang="vi">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>

    <?php

    $title = "Giá trị ngẫu nhiên";

    $N = rand(1, 100);

    ?>

    <h2><?php echo $title; ?></h2>

    <p>N = <?php echo $N; ?></p>

    <table border="1">

        <tr>
            <th>Các số chẵn từ 1 đến <?php echo $N; ?></th>
        </tr>

        <?php

        for ($i = 2; $i <= $N; $i += 2) {

        ?>

            <tr>
                <td><?php echo $i; ?></td>
            </tr>

        <?php

        }

        ?>

    </table>

</body>

</html>