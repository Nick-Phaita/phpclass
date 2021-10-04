<?php
$fruits= array("mangoes","apples","oranges","pineapples","grapes","watermelons");
echo $fruits[5];
$fruits[3]="avocado";
echo ("<br />".$fruits[3]);
echo "<br />I love eating $fruits[0] and $fruits[2]";

$num= array(2,3,5,7,11,13,17,19); //index arrays
echo "<br />";
echo "The first 8 prime numbers are: $num[0], $num[1], $num[2], $num[3], $num[4], $num[5], $num[6], $num[7].";
$bool= array(true,false);
echo "<br />";
echo $bool[0]."<br />".$bool[1];
echo "<br />";
echo false;
echo "<br />";
echo true;
echo "<br />";
echo count($fruits);

$age= array("Nick"=>"17","Phaita"=>"21"); //associative arrays
echo "<br />";
echo "Nick is ".$age['Nick']." while Phaita is ".$age['Phaita'].".";

















