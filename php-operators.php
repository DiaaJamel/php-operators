<?php
// 1. Write a PHP script to see if the specified year is a leap year or not
function year($enterYear){
    if ($enterYear % 400 == 0){
        echo("Leap year");
    }else if ($enterYear % 4 == 0){
        echo("Leap year");
    } else if ($enterYear % 100 == 0){
        echo("Not leap year");
    } else{
        echo("Not leap year");
    }
}
$enterYear = 2021;
year($enterYear);
echo '<br/>';

// ---------------------------
// 2. Write a PHP script to check the season depending on set temperature if the
// temperature is below 20 we are in winter otherwise the season is summer.
$temperature = 19;
if($temperature < 20){
    echo "Season is winter";
}else {
    echo "Season is summer";
}
echo '<br/>';

// ---------------------------
// 3. Write a PHP script to calculate the sum of the two mapped integers. If the two
// values are the same, then three times their sum is returned.
$number1 = 1;
$number2 = 2;

function mappedInt ($number1, $number2){
    if($number1 === $number2){
        return ($number1 + $number2) * 3;
    }else {
        return ($number1 + $number2);
    }
}

echo mappedInt($number1, $number2);
echo '<br/>';

// ---------------------------
// 4. Write a PHP script to get the absolute difference between n and 100. If n is
// greater than 100, return triple the absolute difference.
function absolute($num) {
if ($num > 100){
    return ($num - 100)*3;
}   return 100 - $num;
}
echo absolute(65);
echo '<br/>';
// ---------------------------
// 5. Write PHP script to check two integers, and return true if one is 30 or if their sum
// is 30.
function checkNum($firstNum, $secNum){
    if($firstNum == 30 || $secNum == 30){
        return true;
    }else if(($firstNum + $secNum) == 30){
        return true;
    }else {
        return "something went wrong";
    }
}
echo checkNum(15, 22);
echo '<br/>';

// ---------------------------
// 6. Write a PHP script to check an integer and return an integer if it is within 10 of
// 100 or 200.
function integers($number3){
    if(abs($number3 - 100) <= 10 || abs($number3 - 200) <= 10) {
        return true;
    } return false;
}
echo integers(25);
echo '<br/>';
// ---------------------------
// 7. Write in PHP script to check if the given positive number is a multiple of 3 or a
// multiple of 7
function positiveNum($number5){
    return $number5 % 3 == 0 || $number5 % 7 == 0;
}
echo positiveNum(5);
echo '<br/>';


// ---------------------------
// 8. Write a PHP script to create a new string where "if" is added to the front of a
// particular string. If the series really begins with "if," then return the string
// unchanged.
$string1 = "if";
$string2 = "Hello";

if(strpos($string2, $string1) !== false){
    echo $string1.= $string2;
} else{
    echo $string2;
}
echo '<br/>';


// ---------------------------
// 9. Write a PHP script to remove the character in a specific position from a specific
// string. The position selected in range 0..1 string length inclusive
$string9 = "Hellooo";
echo substr($string9, 1, strlen($string9 ));
echo '<br/>';

// ---------------------------
// 10. Write PHP script to check two integers if either is in the range 100..200 inclusive

echo '<br/>';
// ---------------------------
// 11. Write a PHP script to check if two valid values are in the range of 20.50
// inclusive. Returns true if 1 or another in the listed range is false

echo '<br/>';
// ---------------------------
// 12. Write PHP script to check for the largest number among three integers
function largest($num4, $num5, $num6) {
$largestNum = max($num4, max($num5, $num6));
return $largestNum;
}

$max = largest(5,9,6 );
echo '<br/>';


// ---------------------------
// 13. Write in PHP script to check the number closest to 100 between two integers.
// Return 0 if the two numbers are equal

echo '<br/>';

// ---------------------------
// 14. Write a PHP script that accepts two integers and returns an integer if one of them
// is 5, their sum, or difference between them is 5
function diff($num1, $num2){
return $num1 == 5 || $num2 == 5 || $num1 + $num2 == 5 || abs($num1 - $num2) == 5;
}

var_dump(diff(5,2));


echo '<br/>';
?>