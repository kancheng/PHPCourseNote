<?php
echo "<div style = 'text-align:center'><h1>File</h1><hr />";

echo "目前檔案所在路徑 : " . realpath(".") . "<br />";

echo "完整的檔案路徑 : " . __FILE__ . "<br />";

echo "目錄路徑為 : " . __DIR__ . "<br />";

echo "檔案名稱 : " . basename(__FILE__);

echo "</div>";
?>

