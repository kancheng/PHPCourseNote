<?php

echo "<div style = 'text-align:center'><h1> Multiplication Table </h1><hr />";

$Save = array();

	for ($a = 1; $a <= 16; $a++){
		for($b = 1; $b <= 16; $b++){
			if ($b == 16) {
				$Save[$a][$b] = $a . ' * ' . $b . ' = ' . $a * $b . '<br /><br />';
			} else {
				$Save[$a][$b] = $a . ' * ' . $b . ' = ' . $a * $b . '<br />';
			}
		}
	}

$SNam = count($Save);

foreach ($Save as $SNam1) {

	foreach ($SNam1 as $SNam2) {
		echo $SNam2;
	}
}

echo "</div>";
?>
