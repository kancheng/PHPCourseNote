<?php
echo "<div style = 'text-align:center'><h1>File</h1><hr />";

printf(" 磁碟空間 : %s bytes <br /> 剩餘空間 : %s bytes .", 
	number_format( disk_total_space(".")), 
	number_format( disk_free_space("."))
);

echo "</div>";
?>

