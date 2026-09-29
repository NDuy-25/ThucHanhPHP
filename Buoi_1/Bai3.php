<!DOCTYPE html>

<html lang="vi">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>

    <?php

    $title = "Kiểm tra số N";

    $N = rand(-100, 100);

    function laSoNguyenTo($n)
    {
        if ($n < 2) {
            return false;
        }

        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }

        return true;
    }

    ?>

    <div align="center">

        <h2><?php echo $title; ?></h2>

        <table border="1">

            <tr>
                <th>N</th>
                <th>Kết quả</th>
            </tr>

            <tr>
                <td>N</td>
                <td><?php echo $N; ?></td>
            </tr>

            <?php

            if ($N > 0) {

            ?>

                <tr>
                    <th colspan="2">N là số dương</th>
                </tr>

                <tr>
                    <td>Các ước số của N</td>

                    <td>

                        <?php

                        for ($i = 1; $i <= $N; $i++) {

                            if ($N % $i == 0) {
                                echo $i . " ";
                            }

                        }

                        ?>

                    </td>
                </tr>

                <tr>
                    <td>N có phải số nguyên tố?</td>

                    <td>

                        <?php

                        if (laSoNguyenTo($N)) {
                            echo "Có";
                        } else {
                            echo "Không";
                        }

                        ?>

                    </td>
                </tr>

                <tr>
                    <td>Tổng các số nguyên tố &lt; N</td>

                    <td>

                        <?php

                        $tong = 0;

                        for ($i = 2; $i < $N; $i++) {

                            if (laSoNguyenTo($i)) {
                                $tong += $i;
                            }

                        }

                        echo $tong;

                        ?>

                    </td>
                </tr>

                <tr>
                    <td>N có phải số chính phương?</td>

                    <td>

                        <?php

                        $can = sqrt($N);

                        if ($can == floor($can)) {
                            echo "Có";
                        } else {
                            echo "Không";
                        }

                        ?>

                    </td>
                </tr>

            <?php

            } else {

            ?>

                <tr>
                    <th colspan="2">
                        N không phải là số dương
                    </th>
                </tr>

            <?php

            }

            ?>

        </table>

    </div>

</body>

</html>