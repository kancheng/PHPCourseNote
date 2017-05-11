<?php

	function showResult($Num){
		if( $Num >= 0 ) {

			if($Num == 0) {
				return 1;
			} else {
				return $Num * showResult( $Num - 1);
			}

		}
	}

	echo "5 的階層為 (by Recursion) : " . showResult(5);
?>
