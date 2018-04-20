<?php
/**
 * @package Cat
 * @author o.borodyuk
 */
include ('catClass.php');
//Output to console
/**
 * @param $label
 * @param $data
 */
function console($label, $data) {
    echo "<script>console.log('$label $data')</script>";
}

//Array creation
for ($i = 0; $i < 5; $i++){
    $cats[] = new Cat("Tom", $i+1, array("black"));
}
echo '<pre>';
print_r($cats);

//Sum and Multiplication calculation
$sum = 0;
$mul = 1;
for ($i = 0; $i < 5; $i++){
    $sum+=$cats[$i]->age;
    $mul*=$cats[$i]->age;
}
console("Sum:", $sum);
console("Multiplication:", $mul);

//Search cats with age > 3
$amount = 0;
$sum = 0;
for ($i = 0; $i < 5; $i++){
    if ($cats[$i]->age > 3)
        $amount++;
}

if ($amount > 1){
    console("Cat exists. Amount = ", $amount);
} elseif ($amount == 1){
    console("Cat exists. Amount = ", $amount);
} else console("Cat doesn\'t exist", $amount);

//Error
try{
    $cats[rand(0,4)]->error();
} catch (Exception $e) {
    $message = $e->getMessage();
    console("Exception:", $message);
}


//Loop
for ($i = 1; $i <= 100; $i++)
    for($j = 1; $j <= 100; $j++){
        $a = $i*$j;
    if ($a%29 == 0){
        goto m1;
        }
    }
m1:

//canFly
if ($cats[0]->canFlyValue() == true)
    console("Message", "Cat can fly");
else console("Message", "Cat can\'t fly");
?>