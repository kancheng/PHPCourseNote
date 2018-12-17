<?php
echo "<div style = 'text-align:center'><h1>File</h1><hr />";

$path = __FILE__;

echo pathinfo( $path, PATHINFO_DIRNAME). "<br />";

echo pathinfo( $path, PATHINFO_BASENAME). "<br />";

echo pathinfo( $path, PATHINFO_EXTENSION). "<br />";

echo pathinfo( $path, PATHINFO_FILENAME). "<br />";

$pathData = pathinfo($path);

print_r($pathData);

echo "</div>";
?>

