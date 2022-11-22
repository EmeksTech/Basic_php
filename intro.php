<?php
function familyName(string $fname, string $lname = "Okafor")
{
    echo "$fname  $lname";
}

function sum(int $num, int $num2){
    return $num + $num2;
}

$genderString = "I am a ";
function female($str){
    $str .="female";
}
function male(&$str){
    $str .="male";
}

female($genderString);
male($genderString);
echo $genderString ."<br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Family</h1>
    <ul>
       <li><?php familyName("Emeka"); ?></li> 
       <li> <?php familyName("Victoria"); ?></li>
       <li> <?php familyName("Samnuel"); ?></li>
       <li><?php familyName("Josua", "Okolie"); ?></li> 

    </ul>

    <p>The sum of 5 and 10 is:<?php echo sum(5,10); ?></p>
    <p>The sum of 8 and 10 is:<?php echo sum(8,10); ?></p>
   

</body>

</html>