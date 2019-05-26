<?php

// recursive
function factorial(int $num): int{
    if($num !== 0){
        return $num*factorial($num - 1);
    }
    return 1;
}

print factorial(5);

// variable func
function getTriangleArea(float $base, float $height): float{
    return $base * $height / 2;
}

$name = 'getTriangleArea';
$area = $name(3,6);
print = "三角形の面積は{$area}です。";

//higer_order
