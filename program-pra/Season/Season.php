<?php 

	$sea = 8;

	if ($sea >= 1 && $sea < 4){
		echo '春季';
	} elseif ($sea >= 4 && $sea < 7){
		echo '夏季';
	} elseif ($sea >= 7 && $sea < 10){
		echo '秋季';
	} elseif ($sea >= 10 && $sea < 13){
		echo '冬季';
	}

?>
