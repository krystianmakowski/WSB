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

$text="123ssd";
$x=(bool)$text;
echo $x,"<br>";//123
echo gettype($text),"<br>";//string
echo gettype($x),"<br>";//boolean

$text="10";
$x=(unset)$text;
echo $x,"<br>";//123
echo gettype($text),"<br>";//string
echo gettype($x),"<hr>";//null

//rozmiar typu intger
echo PHP_INT_SIZE,"<br>";//8
echo PHP_INT_MIN,"<br>";//-9223372036854775808
echo PHP_INT_MAX,"<hr>";//9223372036854775807

//kontrola typu zmiennych
$x=10;
echo is_int($x);//1
echo is_string($x);//1
echo is_bool($x);
echo is_float($x);
echo is_null($x),"<hr>";

//operator ignorowania błedów
$w;
echo $w;
//echo @$w;
echo @gettype($w),"<hr>";//null

//zmienne superglobalne
//$_GET, $_POST, $_COOKIE, $_SESSION, $_FILES, $_SERVER
echo $_SERVER['SERVER_PORT'],"<br>";//80
echo $_SERVER['SERVER_NAME'],"<br>";
echo $_SERVER['SCRIPT_NAME'],"<br>";
echo $_SERVER['DOCUMENT_ROOT'],"<br>";

$filelocal =$_SERVER['DOCUMENT_ROOT'];
$filelocal .=$_SERVER['SERVER_NAME'];
ECHO $filelocal,"<hr>";
//stałe - nazwy stałych z dużych liter
define("NAME","Janusz");
echo NAME;
define("surnamE","Nowak",true);
echo surname,"<hr>";
//stałe predefinowane
echo PHP_VERSION,"<br>";
echo PHP_OS,"<br>";
echo __LINE__,"<br>";
echo __FILE__,"<br>";
echo __DIR__,"<br>";

 ?>
