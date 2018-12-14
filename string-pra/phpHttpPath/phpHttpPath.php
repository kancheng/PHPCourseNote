<?php
echo "<div style = 'text-align:center'><h1>Email</h1><hr />";

	$strURL = "URL : https://www.google.com";

	$regex = "/(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?/";

	echo preg_replace($regex,"<a href=\"\\0\" target=\"_blank\">\\0</a>",$strURL);

echo "</div>";

?>

