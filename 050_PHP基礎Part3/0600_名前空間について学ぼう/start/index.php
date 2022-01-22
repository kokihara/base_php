<?php
/**
 * 名前空間について学ぶ
 *
 * コードの格納場所
 */

require_once 'lib.php';
// use function lib\with_tax;
// use const lib\TAX_RATE;

// バックスラッシュ名前空間で関数を宣言する
$price = \lib\with_tax(1000, 0.08);
// echo $price;
echo \lib\TAX_RATE;