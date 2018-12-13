<?php
echo "<div style = 'text-align:center'><h1>String</h1><hr />";

	$encodeStr = "55chiu1030";

	echo "String : " . $encodeStr . "<br />";

	echo "str_rot13 : " . str_rot13($encodeStr) . "<br />";

	echo "crypt : " . crypt($encodeStr, 'p-h,chiu') . "<br />";

	echo "md5 : " . md5($encodeStr) . "<br />";

	echo "shal : " . sha1($encodeStr);

echo "</div>";
?>

