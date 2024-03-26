<?php

$str1 = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a..b/';
$matches = [];
$count = preg_match_all($regexp, $str1, $matches);
echo "\nстрок найдено $count\n";
var_dump($matches);

$str2 =  'a1b2c3';
echo "\n$str2";
$regexp1 = '/[0-9]/';
$matches = [];
preg_match_all($regexp1, $str2, $matches);
$tmpArray = $matches[0];
for($i = 0; $i<count($matches[0]); $i++){
    $regexp2  = "/[$tmpArray[$i]]/";
    $str2 = preg_replace($regexp2, pow($tmpArray[$i], 3), $str2);
}
echo "\n$str2";
