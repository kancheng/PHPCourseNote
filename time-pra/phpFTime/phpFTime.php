<?php
echo "<div style = 'text-align:center'><h1>Time</h1><hr />";

echo strftime("%A, %d %b %Y %H:%M:%S") . "<br />";
echo gmstrftime("%A, %d %b %Y %H:%M:%S") . "<br />";

setlocale(LC_ALL, 'cht_taiwan');

echo mb_convert_encoding(strftime("%A, %d %b %Y %H:%M:%S"), "UTF-8", "BIG5"). "<br />";
echo mb_convert_encoding(gmstrftime("%A, %d %b %Y %H:%M:%S"),"UTF-8", "BIG5") . "<br />";

echo "</div>";
?>

