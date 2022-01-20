<?php
/**
 * 条件分岐を省略して記入する
 *
 *
 */
$array = [
    'key' => 10,
];

if (isset($array['key'])) {
    $array['key'] *= 10;
} else {
    $array['key'] = 1;
}
// null合体演算子
$array['key'] = $array['key'] ?? 1;

// 三項演算子
// $array['key'] = isset($array['key']) ? $array['key'] * 10 : 1;
echo $array['key'];
