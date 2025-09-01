<!-- <?php
for($i = 2; $i <= 10; $i+=2){
    echo $i;
    echo "<br/>";
}?>

<?php

for($i = 1; $i <= 5; $i++){
    echo $i *2 ."<br/>";
}?>

<?php
$i = 0;

while($i <3){
    echo "i = " .$i . "<br/>";
    $i += 1 ;
}
?>

<?php

$count = 0;

while($count < 20){
$count += 1 ;
    
    
    echo $count . "<br/>";
}?> -->

<!-- 
<?php

$count = 0;

while($count <= 100){

    if($count%3 == 0){
        $count++;
        continue;
    }
    if($count === 20){
        break;
    }
    
    echo $count . "<br/>";
    $count++;
    
}?> -->

<!-- <?php

$number = 1;

while ($number <= 50){

if($number%3 === 0 and $number%5 === 0){
    echo "FizzBuzz". "<br/>";
    $number++;

}elseif($number%5 === 0){
    echo "Buzz". "<br/>";
    $number++;
}elseif($number%3 === 0){
    echo "Fizz" . "<br/>";
    $number++;
}else{
    echo $number . "<br/>";
    $number++;
}}?> -->

<?php
for ($i = 0; $i < 5; $i++) {
  for ($j = 0; $j < 5; $j++) {
    echo "●";
  }
  echo "<br />";
}

