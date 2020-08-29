<?php 

//OPRATOR ARITMATIKA
$a=7;
$b=2;

$c = $a + $b;
echo $c."<br>";

$c = $a - $b;
echo $c."<br>";

$c = $a * $b;
echo $c."<br>";

$c = $a / $b;
echo floor($c)."<br>";

$c = $a % $b;
echo $c."<br>";
//OPRATOR LOGIKA
$c = $a<$b;
echo $c.'<br>';
$c = $a>$b;
echo $c.'<br>';
$c = $a==$b;
echo $c.'<br>';
$c = $a!=$b;
echo $c.'<br>';
//INCREMENT
$a++;
echo $a.'<br>';
//OPERATOR STRING
$kata='Sura';
$kota='baya';
$hasil=$kata.$kota;
$hasil=$hasil.' KOTA PAHLAWAN';
echo $hasil;