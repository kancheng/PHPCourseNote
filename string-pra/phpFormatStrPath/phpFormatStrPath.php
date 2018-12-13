<?php
echo "<div style = 'text-align:center'><h1>String</h1><hr />";

	$queryString = "name=haoye&age=26&height=173&weight=78";
	parse_str($queryString);

	printf("Name : %s , Age : %d , Height : %d , Weight : %d", $name, $age, $height, $weight);
echo "</div>";
?>

