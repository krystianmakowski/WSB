<?php
$potega=2**10;
echo $potega,"<br>";
//systemy liczbowe
$int=10;
$hex=0xA; //0xliczba
$oct=012; //1*8^1+2*8^0=10
$bin=0b1011;

echo $int;
echo $hex;
echo $oct;
echo $bin,"<hr>";
//echo phpinfo();
//operatory bitowe
$x=0b1010;
echo $x,"<br>";//10
$x=$x>>1; //101
echo $x,"<br>";//5
$x=$x<<2; //10100
echo $x,"<hr>"; //20

//rowne / identyczne
$x=2;
$y=2.0;
if ($x==$y){
echo "Równe<br>";
}else{
echo "Różne<br>";
}

if ($x===$y){
echo "Identyczne<br>";
}else{
echo "Nieidentyczne<br>";
}

echo gettype($x),"<br>";//integer
echo gettype($y),"<br>";//double

$x=20;
$y=10;
$result=$x<=>$y;
echo $result,"<hr>";

//operatory rzutowania danych
$text="123ssd";
$x=(int)$text;
echo $x,"<br>";//123
echo gettype($text),"<br>";//string
echo gettype($x),"<br>";//integer

 ?>
