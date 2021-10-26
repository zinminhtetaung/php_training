<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__ . './SimpleXLSX.php';

echo '<h1>Read several sheets</h1>';
if ($xlsx = SimpleXLSX::parse('countries_and_population.xlsx')) {


    echo '<table cellpadding="10">
    <tr><td valign="top">';

    $dim = $xlsx->dimension();
    $num_cols = $dim[0];
    $num_rows = $dim[1];

    echo '<table border=1>';
    foreach ($xlsx->rows(1) as $r) {
        echo '<tr>';
        for ($i = 0; $i < $num_cols; $i++) {
            echo '<td>' . (!empty($r[$i]) ? $r[$i] : '&nbsp;') . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    $dim = $xlsx->dimension(2);
    $num_cols = $dim[0];
    $num_rows = $dim[1];

    echo '</td></tr></table>';
} else {
    echo SimpleXLSX::parseError();
}
