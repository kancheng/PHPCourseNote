<?php
echo "<div style = 'text-align:center'><h1> Hi !</h1><hr />";

$showStr = " 你學 <strong>PHP</strong><br /> 我學 <strong>PHP</strong><br /> 大家學 <strong>PHP</strong>!!!";

echo $showStr . "<hr />";

echo strip_tags( $showStr,'<br />');

echo "</div>";
?>

