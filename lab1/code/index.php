<?php
$very_bad_unclear_name = "14 chicken wings";
$order =& $very_bad_unclear_name;
$order.= " with double burger, fries, cola, cheese sauce, and a kiss on the cheek";
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
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo "\n$answer";

$a = 10;
$b = 3;
$ost = $a % $b;
if($a % $b == 0){
    echo "\nделится ",$a / $b;
}
else{
    echo "\n делится с остатком ",$ost;
}
$st = pow(2,10);
$sq = sqrt(245);
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $i){
    $sum += pow($i,2);
}
$sumSqrt = sqrt($sum);
$tmpNum = 379;
round(sqrt($tmpNum),0); //до целых
round(sqrt($tmpNum),1); //до десятых
round(sqrt($tmpNum),2); //до сотых

$arr1 = ["floor" => floor(sqrt(587)), "ceil" => ceil(sqrt(587))];
$arr2 = [ 4, -2, 5, 19, -130, 0, 10];
$minNumArr2 = min($arr2);
$maxNumArr2 = max($arr2);

echo "\n",rand(1,100);
$arr3 = [];
for($i = 0;$i<10;$i++){
    $arr[$i] = rand(1,1000);
}

$a = 5;
$b = 10;
echo "\n", abs($a - $b);

$arr4 = [1, 2, -1, -2, 3, -3];
for ($i = 0;$i < count($arr4);$i++){
    $arr4[$i] = abs($arr4[$i]);
}

$num = 50;
$ansArr = [];
for ($i = 1; $i<=$num;$i++){
    if($num % $i == 0){
        array_push($ansArr,$i);
    }
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$count = 0;
$sumOfFirst = 0;
foreach($arr as $i){
    $count++;
    $sumOfFirst += $i;
    if($sumOfFirst > 10){
        break;
    }
}
echo "\n",$count;

function printStringReturnNumber()
{
    echo "\nprint something";
    return 1;
}
$myNum = printStringReturnNumber();
echo "\n$myNum";

function increaseEnthusiasm($str)
{
    return $str.="!";
}
echo "\n",increaseEnthusiasm("hello world");

function repeatThreeTimes($str)
{
    $str.=$str.$str;
    return $str;
}
echo "\n",repeatThreeTimes("bye world");

echo "\n".increaseEnthusiasm(repeatThreeTimes("haha"));

function cut($str,$var = 10)
{
    return substr_replace($str,"",$var ,strlen($str)-1);
}

echo "\n",cut("aaa",2);

function printArray($arr=[],$i = 0){
    if($i == count($arr)){
        return 0;
    }
    echo "\n$arr[$i]";
    return printArray($arr,++$i);
}
printArray([1,2,3,4,5,6,7,8,9]);

function sumOfNum($num)
{
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;
        $num = intdiv($num,10);
    }
    if ($sum > 9){
        $sum = sumOfNum($sum);
    }

    return $sum;

}

echo "\n",sumOfNum(1234);