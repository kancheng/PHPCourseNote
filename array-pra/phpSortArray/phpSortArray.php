<?php

echo "<h1>測試陣列排序 </h1><hr /><br />";

echo "<h2> 1. sort() : </h2><br />";

$fruits1 = array( 
	"d" => "lemon", 
	"a" => "orange", 
	"b" => "banana", 
	"c" => "apple");

sort($fruits1);

foreach ($fruits1 as $key => $val) {
	echo "$key = $val <br />";
}

echo "<br /><hr /><h2> 2. asort() : </h2><br />";

$fruits2 = array( 
	"d" => "lemon", 
	"a" => "orange", 
	"b" => "banana", 
	"c" => "apple");

asort($fruits2);

foreach ($fruits2 as $key => $val) {
	echo "$key = $val <br />";
}

?>
