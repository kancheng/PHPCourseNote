<?php

$weekArray = array( '星期日'=>'Sunday', '星期一'=>'Monday',
	'星期二'=>'Tuesday', '星期三'=>'Wednesday', '星期四'=>'Thursday',
	'星期五'=>'Friday', '星期六'=>'Saturday'); 

	foreach( $weekArray as $cweek => $eweek){
		echo "中文名稱 ".$cweek.", 其英文為 ".$eweek."<br />";
	}

?>
