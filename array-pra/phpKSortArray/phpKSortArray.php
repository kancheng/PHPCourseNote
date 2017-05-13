<?php

echo "<h1>測試陣列排序 </h1><hr />";

echo "<h2> ksort() : </h2>";

$fruits = array( 
	"d" => "lemon", 
	"a" => "orange", 
	"b" => "banana", 
	"c" => "apple");

ksort($fruits);

foreach ($fruits as $key => $val) {
	echo "$key = $val <br />";
}

?>
