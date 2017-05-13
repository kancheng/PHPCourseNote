<?php

echo "<h1>測試陣列排序 </h1><hr />";

echo "<h2> sort() : </h2>";

$testArrary = array( "img1", "img2", "img11");

sort($testArrary);

print_r($testArrary);

echo "<br />";
echo "<h2> natsort() : </h2>";

natsort($testArrary);

print_r($testArrary);

?>
