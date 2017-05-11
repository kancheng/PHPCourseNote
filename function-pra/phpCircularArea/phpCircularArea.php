<?php
	echo "圓周 = 半徑 * 2 * 圓周率 <br /> 圓面積 = 半徑 * 半徑 * 圓周率 <br />";
	$d = 10;
	$r = $d / 2;
	$ca = pow( $r, 2) * M_PI;
	$card = round( $ca, 2);

	echo "直徑為 " . $d . " m . <br /> 面積為 " . $card ." m .";

?>
