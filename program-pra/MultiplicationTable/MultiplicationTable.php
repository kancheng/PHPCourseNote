<?php
	$a = 1;
	$b = 1;

	echo 'Multiplication Table <br /><br />';
	for ($a = 1; $a <= 16; $a++){
		for($b = 1; $b <= 16; $b++){
			echo '  '. $a . ' * ' . $b . ' = ' . $a * $b . '<br />';
		}
		echo ' <br /> ';
	}

?>
