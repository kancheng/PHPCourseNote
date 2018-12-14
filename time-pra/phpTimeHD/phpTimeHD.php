<?php
echo "<div style = 'text-align:center'><h1>Time</h1><hr />";

$datastr = "1999-10-30 00:13:14";

sscanf($datastr, "%d-%d-%d %d:%d:%d", $y, $m, $d, $h, $i, $s);

$timestamp1 = mktime($h, $i, $s, $m, $d, $y);

echo $timestamp1 . "<br />";

$timestamp2 = strtotime($datastr);

echo $timestamp2;

echo "</div>";
?>

