<?php
/**
 * 関数を作ってみよう（Part. 2）
 *
 * - デフォルト引数を設定可能
 * - 文字列を関数として実行可能
 */
$price = 1000;

function with_tax($base_price,$tax_rate = 0.1){//デフォルト引数を設定できる
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price);//小数点1位を消すものになっている
    return $sum_price;
}

$price = with_tax($price);
echo $price;