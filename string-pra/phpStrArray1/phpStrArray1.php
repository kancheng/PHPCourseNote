<?php
echo "<div style = 'text-align:center'><h1>Array</h1><hr />";

$showStr = "站住 口令 誰";

$save = explode(" ",$showStr);
foreach ($save as $value){
	echo $value."<br />";
}
echo "</div>";
?>

