<?php
$array = [
    ['table',1000],
    ['chair',100],
    ['chair',100],
    ['chair',100],
    ['bed',10000],
];

// $array[1][1] = 500;
// array_shift($array);
// 配列の先頭を自動で削除する。
// array_pop($array);
// 配列の末尾を削除する。
// array_splice($array,2,2);
// 第二引数で選択した配列の第三引数の部分を削除する。
// 第四引数に挿入したいものを入れ込むこともできる。

foreach ($array as $value) {
    echo "{$value[0]}は{$value[1]}円です。";
    // print_r($value);
}

?>