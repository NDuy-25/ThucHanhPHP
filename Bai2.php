<!DOCTYPE html>

<html lang="vi">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>

    <?php

    $title = "Bảng cửu chương";

    ?>

    <div align="center">

        <h2><?php echo $title; ?></h2>

        <table border="1">

            <tr>

                <?php

                for ($i = 1; $i <= 10; $i++) {

                ?>

                    <th>

                        Chương <?php echo $i; ?>

                    </th>

                <?php

                }

                ?>

            </tr>

            <?php

            for ($j = 1; $j <= 10; $j++) {

            ?>

                <tr>

                    <?php

                    for ($i = 1; $i <= 10; $i++) {

                    ?>

                        <td>

                            <?php

                            echo $i . " x " . $j . " = " . ($i * $j);

                            ?>

                        </td>

                    <?php

                    }

                    ?>

                </tr>

            <?php

            }

            ?>

        </table>

    </div>

</body>

</html>