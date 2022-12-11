<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function myFunction($arr, $value)
{
    $filtArray = array_filter($arr);
    $randArray = array_rand($filtArray, $value);
    $myArray = array_map(function ($deger) use ($filtArray) {
        return $filtArray[$deger];
    }, $randArray);
    return $myArray;
}



echo "<pre>";
print_r(myFunction($planets, 2));
print_r(myFunction($planets, 3));
print_r(myFunction($planets, 2));
print_r(myFunction($planets, 4));
print_r(myFunction($planets, 5));


?>