<?php
echo "<div style = 'text-align:center'><h1>St Proc 3</h1><hr />";

$showStr = "Genius is one percent inspiration and ninety-nine percent perspiration.";

echo "天才是一分靈感加上九十九分的努力。<hr />";
$tok = strtok( $showStr, " ");

while($tok){
	echo "$tok<br />";
	$tok = strtok(" ");
}

echo "</div>";
?>

