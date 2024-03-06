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

$arr=[];
$str = "x";
$arr[0] = "x";
for($i = 1;$i<20;$i++){
    $arr[$i] = $arr[$i-1].$str;
}
printArray($arr);

function arrayFill($var,$num)
{
    $arr = [];
    for ($i = 0; $i<$num;$i++){
        $arr[$i] = $var;
    }
    return $arr;
}
printArray(arrayFill(1,10));

$arr = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
for ($i = 0;$i<count($arr);$i++){
    for ($j = 0;$j<count($arr[$i]);$j++){
        $sum += $arr[$i][$j];
    }
}
echo "\n$sum";

$arr = [];
$count = 0;
for ($i = 0;$i<3;$i++){
    for ($j = 0;$j<3;$j++){
        $arr[$i][$j] = $count;
        $count++;
    }
}

$arr = [2, 5, 3, 9];
$arr[0] = $arr[0] * $arr[1];
$arr[2] = $arr[2] * $arr[3];
$result = 0;
foreach($arr as $i){
    $result += $i;
}
echo "\n$result";

$user = ["name" => "Vitaly","surname" => "Grin","patronymic" => "Aleksandrovich"];
echo "\n$user[name] $user[surname] $user[patronymic]";

$date = ["year" => "2024","month" => "03","day" => "05"];
echo "\n$date[year]-$date[month]-$date[day]";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo "\n",count($arr);
echo "\n",$arr[count($arr)-1],"\n", $arr[count($arr)-2];

function checkSum($var1,$var2)
{
    if($var1+$var2 > 10){
        return true;

    }
    else{
        return false;
    }
}

function equalCheck($var1,$var2)
{
    if($var1 == $var2){
        return true;

    }
    else{
        return false;
    }
}
$test = 0;
if (!$test)
    echo 'верно';

function sumNum($num)
{
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;
        $num = intdiv($num,10);
    }

    return $sum;

}
$age = rand(1,200);
echo "\n$age";
if ($age < 10 or $age > 99){
    echo "\n num is less then 10 or more then 99";
}
else{
    $sum = sumNum($age);
    if($sum <= 9){
        echo "\n сумма цифр однозначна";
    }
    else{
        echo "\nсумма цифр двузначна";
    }
}
$arr = [];
for ($i = 0; $i <= rand(1,6);$i++){
    $arr[$i] = rand(1,10);
}
if (count($arr) == 3){
    $sum=0;
    foreach($arr as $i){
        $sum += $i;
    }
    echo "\n$sum";
}

$str = "x";
for($i=1;$i < 21;$i++){
    echo "\n",str_repeat($str,$i);
}


