<?php
echo "<div style = 'text-align:center'><h1> Lottery</h1><hr />";

	/* 產生隨機數種子 */
	mt_srand((float)microtime()*1000000);

	/* range() 連續整數陣列 */
	$lottery = range( 1, 42, 1);

	/* shuffle() 連續整數陣列 */
	shuffle($lottery);

	/* 使用 array_slice 抓出 0 - 5 的 6 個值 */
	$ro = array_slice($lottery, 0, 6);

	echo "樂透陣列值 : <br />";
	print_r($ro);
	echo "<br /><br />";

	echo "開獎 : <br />";
	/* 印出陣列值 */
	for( $j=0; $j<=5; $j++) {    
		if( $j == 5){
			echo $ro[$j] . " . ";
		} else {
			echo $ro[$j] . ",  ";
		}
	}
echo "</div>";
?>

