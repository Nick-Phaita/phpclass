<?php
$nambari= 29;
$nambari2= 67;
$nambari3= 230;

var_dump($nambari==$nambari2||$nambari==$nambari3);
echo "<br />";

var_dump($nambari2<=$nambari3);
echo "<br />";

var_dump($nambari!=$nambari2);
echo "<br />";

if ($nambari3<$nambari) {
    echo "Yes";
} else {
    echo "No";
}