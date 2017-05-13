<?php

echo "<div style = 'text-align:center'><h1> Bubble Sort </h1><hr />";

function cmp( $a, $b) {
	if ( $a == $b){
		/* 相等回傳 0 */
		return 0;
	}

	/* 若小於回傳 -1，否則回傳 1 */
	return ($a < $b) ? -1 : 1;
}

$aNum = array( 3, 2, 5, 6, 1, 4, 7);

foreach ($aNum as $key => $value) {
	echo "$key : $value <br />";
}
echo "</div>";
?>
