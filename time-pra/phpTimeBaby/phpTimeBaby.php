<?php
echo "<div style = 'text-align:center'><h1>Time</h1><hr />";

$datastr = "1999-10-30 00:13:14";

$timestamp = strtotime($datastr);

echo "出生時間 : " . $datastr . "<br />";

echo "懷孕日期(推算) : " . date("Y-m-d", strtotime("- 10 months", $timestamp)) . "<br />";

echo "滿月日期(推算) : ". date("Y-m-d", strtotime("+ 1 months", $timestamp)) . "<br />";

echo "周歲日期(推算) : ". date("Y-m-d", strtotime("+ 1 year", $timestamp)) . "<br />";

echo "</div>";
?>

