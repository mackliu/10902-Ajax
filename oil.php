<?php

$str=file_get_contents("https://www.cpc.com.tw/GetOilPriceJson.aspx?type=TodayOilPriceString");

echo $str;
?>