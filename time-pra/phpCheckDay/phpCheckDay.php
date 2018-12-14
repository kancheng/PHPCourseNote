<?php
echo "<div style = 'text-align:center'><h1>Time</h1><hr />";
## Leap Year

$thisYear = date("Y");

	if(checkdate(2,29, $thisYear)) {
			echo "Is a leap year. $thisYear";
		} else {
			echo "Not a leap year. $thisYear";
	}

echo "</div>";
?>

