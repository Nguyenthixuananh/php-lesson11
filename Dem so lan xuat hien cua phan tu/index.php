<?php
function toCount($arr, $value)
{
    $count = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $value) {
            $count++;
        }
    }
    return $count;

}

$array = [0, 3, 6, 3, 4, 3, 1, 7, 1, 0];
foreach ($array as $value) {
    echo $value. " ";
}
echo "<br>";
echo "3 xuat hien ".toCount($array, 3)." lan";
