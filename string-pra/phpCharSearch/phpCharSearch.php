<?php
echo "<div style = 'text-align:center'><h1>Array</h1><hr />";

	$showStr = "My name is Horst.";
	echo $showStr . "<hr />";

	$showArray = count_chars($showStr, 1);

	foreach ($showArray as $i => $value) {
		echo " 字元 " . chr($i) . " 出現了 $value 次。 <br />";
	}

echo "</div>";
?>

