<?php
echo "<div style = 'text-align:center'><h1>Time</h1><hr />";

$date_server = date("Y-m-d H:i:s");

echo "Server Time : $date_server<br />";

$date_gmt = gmdate("Y-m-d H:i:s");

echo "GMT Time : $date_gmt<br />";


echo "</div>";
?>

