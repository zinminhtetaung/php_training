<?php
$number = "6";
for ($row = 1; $row <= $number; $row++) {
	for ($col = 1; $col <= (2 * $number) - 1; $col++) {
		if ($col >= $number - ($row - 1) && $col <= $number + ($row - 1)) {
			echo "*&nbsp;";
		} else {
			echo "&nbsp;&nbsp;&nbsp;";
		}
	}
	echo '</br>';
}
for ($row = $number - 1; $row >= 1; $row--) {
	for ($col = 1; $col <= (2 * $number) - 1; $col++) {
		if ($col >= $number - ($row - 1) && $col <= $number + ($row - 1)) {
			echo "*&nbsp;";
		} else {
			echo "&nbsp;&nbsp;&nbsp;";
		}
	}
	echo '</br>';
}
?>