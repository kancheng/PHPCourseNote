<?php
echo "<div style = 'text-align:center'><h1>String</h1><hr />";

	$birthday = "1999-10-30";

	$barray = sscanf($birthday, "%d-%d-%d");

	vprintf( "某生日為 %d 年 %d 月 %d 日", $barray);

echo "</div>";
?>

