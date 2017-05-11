<?php

echo "樂透彩號碼 : <br />";

	/* 產生隨機數種子 */
	mt_srand((float)microtime()*1000000);

	/* 宣告陣列 */
	$lottery = array();

	/* 將所有的數字寫入陣列 */
	for( $i = 1; $i <= 42; $i++ ){
		$lottery[] = $i;
	}

	/* 使用 array_rand 函式從$ lottery 陣列隨機抓出 6 個數字 */
	$ro = array_rand($lottery, 6);


	/* 再用 for 迴圈將亂數抓出的數字印出 */
	for( $j=0; $j<=5; $j++) {    
		if( $j == 5){
			echo $lottery[$ro[$j]] . " .";
		} else {
			echo $lottery[$ro[$j]] . ", ";
		}
	}

?>
