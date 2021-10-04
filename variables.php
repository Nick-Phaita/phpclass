<?php
$jina= "Nick";

echo "My name is ". $jina ;
echo "<br />";
$x= 25;
$y= 59;
$z= 23.67;

echo $x + $y + $z;
echo "<br />";
//Adding two numbers
#Adding two numbers

//This is subtraction
echo $y - $z;
echo "<br />";

//This is multiplication
echo $z * $x;
echo "<br />";

//This is division
echo $y / $x;

echo "<br>";
echo str_repeat("Hello eMobilis <br>",20);

echo "<br>";
echo strrev("Kenya is a beautiful country");

echo "<br>";
echo str_word_count("Kenya is a beautiful country");

echo "<br>";
echo strlen("Kenya is a beautiful country");

echo "<br />";

$a = 5;
$b = 10;

function myTest() {
//    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
    global $a,$b;
    $b = $a + $b;
}
myTest();
echo $b; // outputs 15

echo "<br />";
function myTest2() {
    static $c = 0;
    echo $c;
    $c++;
}
myTest2();


