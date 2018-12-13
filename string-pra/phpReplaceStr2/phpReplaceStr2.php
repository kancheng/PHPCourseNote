<?php
echo "<div style = 'text-align:center'><h1>String</h1><hr />";

	$str = "Hi! Kan, 1.";

	echo  $str . "<br />";

	echo strtr($str , "1", "2") . "<br />";

	$replacestr = array( "Kan" => "Haoye", "1" => "2");
	echo strtr( $str, $replacestr) . "<br />";
	echo str_replace( "2", "3", $str);
	echo substr_replace( $str, "Haoye", 0, 4);

echo "</div>";
?>

