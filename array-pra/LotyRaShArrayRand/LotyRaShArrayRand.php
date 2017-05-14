<?php
echo "<div style = 'text-align:center'><h1> Lottery</h1><hr />";

	/* 產生隨機數種子 */
	mt_srand((float)microtime()*1000000);

	/* range() 連續整數陣列 */
	$lottery = range( 1, 42, 1);

	/* shuffle() 連續整數陣列 */
	shuffle($lottery);

	/*使用 array_rand 函式從$ lottery 陣列隨機抓出 6 個數字 */
	$ro = array_rand($lottery, 6);

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

