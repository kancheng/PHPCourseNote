<html>
	<head>
			<title>PHP Practice</title>
	</head>
	<body>
		<?php 
		/* 1. 字串 */
			$a = "目前用的程式語言為 : ";
			$b = "PHP";
			echo "1. " . $a . $b ."<br />";

			echo '<br />';
		/* 2. 指派 */
			$c = 5;
			$d = $c + 5;
			echo "2.  \$c = 5; \$d = \$c + 5; " . "\$d = $d <br />" ;

			echo '<br />';
		/* 3. 算術 */
			$e = ( 1 + 2 + 3 + 4 + 5) / 5;	
			echo "3. (1 + 2 + 3 + 4 + 5) /  5 = " . $e . "<br />" ;

			echo '<br />';
		/* 4. 複合 */
			$f = 3;
			$g = 5;
			$f += $g;
			echo "4.  \$f = 3; \$g = 5; \$f += \$g; " . " \$f = $f <br />" ;

			echo '<br />';
		/* 5. 遞增遞減 */
			$h = 5; $h++;
			$i = 6; $i--;
			echo '5.  $h = 5; $h++; $i = 6; $i--; <br />' . '$h = ' . $h . '<br />' . '$i = ' . $i . '<br />';

			echo '<br />';
		/* 6. 遞增遞減 於 前後置放*/
			echo '6. <br />';
			echo '$j = 1 <br />';
			$j = 1;
			echo '$j++ = ' . $j++ . '<br />';
			echo '$k = 1 <br />';
			$k = 1;
			echo '++$k = ' . ++$k . '<br />';

			echo '<br />';
		/* 7. 條件 */
			$l = 2;
			$m = ($l > 0) ? "正數" : "負數";

			echo '7. $l = 2; <br /> $m = ($l > 0) ? "正數" : "負數"; <br />' ;
			echo '$m : ' . $m . '<br />';

			echo '<br />';

		/* 8. 邏輯 */
			$n = 5;
			$o = ($n > 0 && $n <10) ? "是個位數" : "不是個位數";

			echo '8. $n = 5; <br /> $o = ($n > 0 && $n <10) ? "是個位數" : "不是個位數"; <br />' ;
			echo '$o : ' . $o . '<br />';

			echo '<br />';

		/* 9. 錯誤控制 */
			echo '9. 錯誤控制 : <br />';
			$fp1 = @fopen ("test.txt");
			$fp2 = fopen ("test.txt");

			echo '<br />';

		/* 10. 指令運算子 */
			echo '10. 指令 : <br />';
			$myIP = `ping 8.8.8.8`;
			echo nl2br($myIP);
			/* nl2br 會使結果用分行顯示 */
	 	?>
	</body>
</html>