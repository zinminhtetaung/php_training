<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" charset="UTF-8">
    <link rel="stylesheet" href="tutorial_1.css">
</head>
<body>
    <table cellspacing="0px" cellpadding="0px">
        <?php
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                $total = $row + $col;
                if ($total % 2 == 0) {
                    echo "<td class='td-white'></td>";
                } else {
                    echo "<td class='td-black'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>