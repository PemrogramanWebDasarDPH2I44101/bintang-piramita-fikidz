<?php
$x=5;
do {
	$y = $x;
	do {
		echo "*";
		$y--;
	} while ($y > 0);
	$x--;
	echo "<br>";
} while ($x > 0);
?>
