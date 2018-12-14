<?php
echo "<div style = 'text-align:center'><h1>Time</h1><hr />";

echo "getdate() Function <hr />";

$nowTime = getdate();

foreach ($nowTime as $key => $value) {
	echo "$key => $value <br />";
}

echo "<hr /> localtime( time(), 1) Function<hr />";
$nowTime = localtime( time(), 1);
foreach ($nowTime as $key => $value) {
	echo "$key => $value <br />";
}


echo "<hr /> gettimeofday() Function<hr />";
$nowTime = gettimeofday();
foreach ($nowTime as $key => $value) {
	echo "$key => $value <br />";
}

echo "</div>";
?>

