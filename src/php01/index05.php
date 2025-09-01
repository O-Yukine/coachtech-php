<?php
$a = 5;

if ($a == 5) {
echo "\$aは5です";
}
?>
<?php
$a = 7;

if ($a === 5){
    echo "\$aは5です";
}else{
    echo "\$aは5以外です";
}
?>

<?php
$a = 7;

if($a === 5 ){
    echo "\$aは5です";
}elseif($a === 3 ){
echo "\$aは3です";
}else{
    echo "\$aは $a です";
}
?>

<?php
$a = 5;

if($a === 3){
    echo "\$aは3です";
}elseif($a === 5 ){
    echo "\$aは5です";
}else{
    echo "\$aは3と５以外です";
}?>

<?php
$people = "Saburo";

switch($people){
    case "Ichiro":
        echo "一郎です";
        break;
    case "Jiro":
        echo "二郎です";
        break;
    default:
        echo "三郎です";
        break;     
}?>

<?php

$a = 7;

$b = ($a >= 5) ? "TRUE":"FALSE";
echo $b;
?>
