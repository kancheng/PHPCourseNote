<?php
echo "<div style = 'text-align:center'><h1>File</h1><hr />";

echo "相對路徑 : " . $_SERVER["PHP_SELF"] . "<br />";

echo "網路上的絕對路徑 : " . $_SERVER["SCRIPT_FILENAME"] . "<br />";

echo "顯示檔案實際路徑 : " . __FILE__;

echo "</div>";
?>

