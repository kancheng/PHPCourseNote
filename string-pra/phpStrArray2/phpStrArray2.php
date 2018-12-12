<?php
echo "<div style = 'text-align:center'><h1>Array</h1><hr />";

$showStr = "壹貳叁肆伍陸柒捌玖拾";

$save = str_split($showStr,3);

foreach ($save as $value){
	echo $value."<br />";
}
echo "</div>";
?>

