<?php
function findMin($arr) {
    $min = $arr[0];
    for ($i=0; $i < count($arr); $i++) {
        if ($arr[$i]< $min) {
            $min = $arr[$i];
        }
    } return $min;
}
function findMax($arr) {
    $max = $arr[0];
    for ($i=0; $i< count($arr); $i++) {
        if ($arr[$i]> $max) {
            $max = $arr[$i];
        }
    } return $max;
}
$nums = [1,3, 5, 7 , 9, 0, 2, 4, 6, 8];
foreach ($nums as $value) {
    echo $value." ";
}
echo "<br/>";
echo "MAX IS : ".findMax($nums);
echo "<br/>";
echo "MIN IS : ".findMin($nums);
