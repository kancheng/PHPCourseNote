<?php
echo "<div style = 'text-align:center'><h1>Email</h1><hr />";

	$strMail = "as@phptest.com";
 
	if (preg_match ("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/",$strMail,$strMatchData)) {
		echo "Pass，E-mail : {$strMatchData[0]} .";
	} else {
		echo "Error .";
	}

echo "</div>";
?>

