<?php
echo "<div style = 'text-align:center'><h1>Array</h1><hr />";

	$filename = array( "a.jpg", "b.doc", "c.xls", "d.txt" );
	$filetype = array( ".txt" => "Text File", ".doc" => "Word File", ".xls" => " Excel File", ".jpg" => "Picture File");

	foreach($filename as $val){

		$ft = strstr($val, ".");
		foreach ($filetype as $name => $desc) {
			if ($name == $ft) {
				echo $val . " 為 " . $desc ." 副檔名是 " . substr($name, 1) . " 。 <br />" ;
				break;
			}
		}

	}

echo "</div>";
?>

