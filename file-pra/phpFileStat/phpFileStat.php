<?php
echo "<div style = 'text-align:center'><h1>File</h1><hr />";

$path = __FILE__;

clearstatcache();

$pathData = stat($path);

print_r($pathData);

echo "</div>";
?>

