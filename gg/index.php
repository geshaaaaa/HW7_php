<?php

function randArray(int $length, int $min, int $max): array
{
    $arr = [];

    for ($i = 0; $i < $length; $i++) {
        $arr[$i] = rand($min, $max);
    }
    return $arr;
}

$arrMinMax = randArray(10, 1, 100);
$length = count($arrMinMax);
$maxValue = 0;
$minValue = 100;
for ($i = 0; $i < $length; $i++) {

    if ($maxValue < $arrMinMax[$i]) {
        $maxValue = $arrMinMax[$i];
    }
    if ($minValue > $arrMinMax[$i]) {
        $minValue = $arrMinMax[$i];
    }
}

print_r($arrMinMax);
echo "Найбільше значення: " . $maxValue . PHP_EOL;
echo "Найменше значеня: " . $minValue . PHP_EOL;


for ($i = 0; $i < $length - 1; $i++) {
    for ($j = 0; $j < $length - 1 - $i; $j++) {
        if ($arrMinMax[$j] > $arrMinMax[$j + 1]) {
            $temp = $arrMinMax[$j];
            $arrMinMax[$j] = $arrMinMax[$j + 1];
            $arrMinMax[$j + 1] = $temp;
        }
    }
}
echo "Відсортований масив:" . PHP_EOL;
print_r($arrMinMax);