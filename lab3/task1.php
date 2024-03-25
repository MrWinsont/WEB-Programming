<?php

$str1 = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a..b/';
$matches = [];
$count = preg_match_all($regexp, $str1, $matches);
echo "\nстрок найдено $count\n";
var_dump($matches);
