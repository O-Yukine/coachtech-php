<?php

function outputNumber($a){

    echo "引数の値は".$a . "です";
    return;

}

outputNumber(2);
outputNumber(5);?>
<?php
function outputHello(){
    echo "Hello World" . "<br/>";

}

outputHello();
?>

<?php

function text($num1 , $num2){
    $value = $num1 + $num2;
    return $value;
}

$total = text(2,4);
echo $total;

?>

<?php
function myNumber($num){
    echo $num;
    return;
}

myNumber(5);

?>

<?php

function addNumber($num1 , $num2){

    $total = $num1 + $num2;
    return $total;
}

$value = addNumber(2,3);
echo $value . "<br/>";

?>

<?php
function score($score1 , $score2 , $score3){

    $total = $score1 +$score2 + $score3;
    if($total >= 210){
        echo "合計点は".$total."なので合格です";
    }else{
        echo "合計点は".$total."なので不合格です";
    }

}

score(100,150,8);

?>
<!-- 三角形の面積は、「底辺 × 高さ ÷ 2」
長方形:縦 × 横
(上底 + 下底) × 高さ ÷ 2 -->


<!-- <?php

 function triangle($teihen , $takasa){
    $sankaku = $teihen*$takasa/2;
    return $sankaku;
 }

 function square($tate , $yoko){
    $shikaku = $tate*$yoko;
    return $shikaku;}

 function trapezoid($ue , $shita , $takasa){
    $daikei = ($ue + $shita)*$takasa/2;
    return $daikei;
 }    
 

 $a = triangle(10,5);
 echo "三角形の面積は".$a."<br/>";
 //25

 $b = square(10,5);
 echo "四角形の面積は".$b."<br/>";
 //50

 $c = trapezoid(5,10,20);
 echo "台形の面積は".$c."<br/>";
 //150
 ?> -->


<?php

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);

