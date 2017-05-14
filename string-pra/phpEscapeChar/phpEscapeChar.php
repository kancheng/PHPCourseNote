<?php
echo "<div style = 'text-align:center'><h1>Escape Char</h1><hr />";

$showStr = "('HaoyePages'[網址])https://www.kancheng.com.tw/?about=true";

echo $showStr . "<hr />";
echo quotemeta($showStr) . "<hr />";
echo addslashes($showStr) . "<hr />";
echo addcslashes($showStr,"'[]") . "<hr />";

$showStr1 = addslashes($showStr);
$showStr2 = addcslashes($showStr,"'[]");

echo stripslashes($showStr1) . "<hr />";
echo stripcslashes($showStr2) . "<hr />";
echo "</div>";
?>

