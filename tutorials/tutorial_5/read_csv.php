<?php

$row = 1;
if (($handle = fopen("Sample.csv", "r")) !== FALSE) {
    echo "<table border='1'>";
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<tr>";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo "<td>" . $data[$c] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    fclose($handle);
}
