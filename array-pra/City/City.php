﻿<?php

echo "<div style = 'text-align:center'><h1> City </h1><hr />";

/* 臺北市 */
$city['臺北市']['中正區'] = 100; $city['臺北市']['大同區'] = 103;
$city['臺北市']['中山區'] = 104; $city['臺北市']['松山區'] = 105;
$city['臺北市']['大安區'] = 106; $city['臺北市']['萬華區'] = 108;
$city['臺北市']['信義區'] = 110; $city['臺北市']['士林區'] = 111;
$city['臺北市']['北投區'] = 112; $city['臺北市']['內湖區'] = 114;
$city['臺北市']['南港區'] = 115; $city['臺北市']['文山區'] = 116;

/* 臺中市 */
$city['臺中市']['中區'] = 400; $city['臺中市']['東區'] = 401;
$city['臺中市']['南區'] = 402; $city['臺中市']['西區'] = 403;
$city['臺中市']['北區'] = 404; $city['臺中市']['北屯區'] = 406;
$city['臺中市']['西屯區'] = 407; $city['臺中市']['南屯區'] = 408;

echo $city['臺北市']['信義區'] . "<br />";

echo "</div>";
?>
