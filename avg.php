<?php

$arr=[
    80,85,89,90
];
$sum=0;
foreach($arr as $value)
$sum+=$value;

$avg=$sum/sizeof($arr);

echo $avg;