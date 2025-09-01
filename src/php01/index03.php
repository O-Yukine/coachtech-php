<!-- <?php
$a = 15;
$b = 3;
$c = 10;

echo $a + $b;
echo "<br/>";
echo $a - $b;
echo "<br/>";


echo $a * $b;
echo "<br/>";
echo $c/2;
echo "<br/>";
echo $a - $c;
?> -->

<?php
$a = 15;
$b = 3;
$c = 10;
$d = 5;

echo $a = $b;
echo "<br/>";
echo $c+=$d;?>

<?php 
$a = 20;
$b = 5;

echo ($a > $b);

$a = false;
$b = true;

echo $a or $b ;
?>

<?php
$a = 20;
$b = 5;

echo $a >10 and $a < 30;
echo "<br/>";
?>

<?php
$a = 10;
$b = 10;
$c = 5;
$d = 5;

echo ++$a;
echo "<br/>";
echo $b++;
echo "<br/>";
echo --$c;
echo "<br/>";
echo $d--;
?>

<?php

function Number($a){

    echo "因数の値は".$a.”です”；
    return;
}