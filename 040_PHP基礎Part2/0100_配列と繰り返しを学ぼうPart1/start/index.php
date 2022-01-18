<?php
$array = ['taro','hanako','jiro'];
$array[1] = 'sachiko';
$array[] = 'saburo';

for ($i=0; $i < count($array); $i++) {
    echo '<div>'.$array[$i]. '</div>';
}

foreach ($array as $i => $v) {
    echo '<div>'.$i.$v. '</div>';
}

// var_dump($array);
// echo $array[1];
?>