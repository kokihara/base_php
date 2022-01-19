<?php
/**
 * 関数を作ってみよう（Part. 1）
 *
 * - 特定の機能を使いまわせるようにまとめたもの。
 * - Input（引数）、Output（戻り値）を設定する
 * - returnが実行された時点でその関数の処理終了
 */
$numbers = [1,2,3,4];
$numbers2 = [1,2,3];
// 同じような記入になっている
// 関数を使用していく。

 function sum($numbers){//引数という
    $sum  = 0;
foreach ($numbers as $num) {
    $sum += $num;
}
    return $sum; //関数を実行した上で得られる値 戻り値
}

$result = sum($numbers);
echo "合計:{$result}<br>";


// $sum2  = 0;
// foreach ($numbers2 as $num2) {
//     $sum2 += $num2;
// }
// echo "合計:{$sum2}";