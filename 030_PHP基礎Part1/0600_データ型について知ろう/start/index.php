<?php
/* データ型とは
参考URL
https://www.php.net/manual/ja/language.types.php
*/
$i = 1 ;
$b = true;
$str = 'hello';
// var_dump($b);
// データ型の確認方法　var_dump
// 異なる型は自動的に変換される
// 自動的に片方の型に統一されて表示される
// echo $i + (int)$b ;
// 型の取り扱い型の注意点
// 文字列型にすると思うように結果が得られないことがあるので注意する
var_dump($i === '1');