<?php

	function testfun1(){
		echo "目前的自訂函式 1 <br />";
	}

	function testfun2(){
		echo "目前的自訂函式 2 <br />";
	}
	$callTest = "testfun1";
	$callTest();
	$callTest = "testfun2";
	$callTest();
?>
