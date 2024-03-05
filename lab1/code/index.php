<?php
$very_bad_unclear_name = "14 chicken wings";
$order =& $very_bad_unclear_name;
$order.= " in my plate";
echo "\nYour order is: $very_bad_unclear_name.";

$varInt = 77777;
echo "\n$varInt";
echo "\n";
$varFloat = 77.777;
echo "$varFloat";

echo "\n",5+7;

$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo "\n", $lastMonth - $thisMonth;

$numLanguages = 4;
$months = 11;
$days = $months * 16;
$daysPerLanguage = $days / $numLanguages;
echo "\n$daysPerLanguage";

echo "\n",8**2;

$myNum = 7;
$answer = $myNum;
$answer+=2;
$answer*=2;
$answer-=2;
$answer/=2;
$answer-=$myNum;
echo "\n$answer";