<?php declare(strict_types=1); //ファイル全体のデータ型を厳密に確認するモードになる
/**
 * データ型とStrictモード
 * 参考URL https://www.php.net/manual/ja/language.types.declarations.php#language.types.declarations.strict
 */
function add1 (int $val):int //返り値も正数型で固定することができる
{
    return $val + 1;
}
$result = add1(1);
var_dump($result);