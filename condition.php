<?php
$date = date('H');

function greet($time)
{
    echo "Good $time";
}

if ($date < "12") {
    greet("morning");
} elseif ($date < "16") {
    greet("afternoon");
} elseif ($date < "20") {
    greet("evening");
} else {
    greet("night");
}
echo"\n";

function showColor($color)
{
    echo "Your favorite color is $color";
}

$arr = ['red', 'green', 'black', 'blue', 'pink'];
$randomIndex = rand(0, 4);

switch ($arr[$randomIndex]) {
    case "red":
        showColor("red");
        break;
    case "green":
        showColor("green");
        break;
    case "black":
        showColor("black");
        break;
    case "blue":
        showColor("blue");
        break;
    case "pink":
        showColor("pink");
        break;
    default:
    echo "you are confused";
}


//for each loop

foreach($arr as $item){
    echo $item."\n";
}

foreach($arr as $key =>$value){
    echo "the key is: $key \n";
    echo "the color is: $value";
    echo "\n----------------\n";
}

?>