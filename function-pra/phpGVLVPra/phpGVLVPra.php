<?php


	$msg = "This is Global Variable <br />";

	function showMsg(){
		$msg = "This is Local Variable <br />";
		echo $msg;
	}

	echo $msg;
	showMsg();
	echo $msg;
?>
