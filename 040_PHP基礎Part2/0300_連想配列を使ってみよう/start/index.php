<?php
// 連想配列を使用する
$array =[
    'name' => 'Bob',
    'age' => 12,
    'sports' => ['baseball','swimming'],
];
// unset($array['name']);
echo $array['name'];
$array['age'] += 24;
echo $array["age"];
echo $array['sports'][1];
?>