<?php
/**
 * 商品名 => [価格, 在庫数]
 */
$products = [
    'table' => [1000, 2],
    'chair' => [500, 4],
    'bed' => [10000, 1],
    'light' => [5000, 1]
];

/**
 * 問１：商品一覧
 *
 * 商品一覧
 * tableは1000円で2個存在します。
 * chairは500円で4個存在します。
 * bedは10000円で2個存在します。
 * lightは5000円で1個存在します。
 */
// foreach分で回して取得したものを変数に代入して、他の式にも取り入れやすいようにする
echo '<div>商品一覧</div>';
foreach ($products as $key => $value) {
    $p_name = $key;
    $p_money = $value[0];
    $p_count = $value[1];
    echo "{$p_name}は{$p_money}円で{$p_count}個存在します。<br>";
}
// echo "{$products['name']}は{$products['table'][0]}円で{$products['table'][1]}個存在します。";
// echo "{$products['chair']}は{$products['chair'][0]}円で{$products['chair'][1]}個存在します。";
// echo "{$products['bed']}は{$products['bed'][0]}円で{$products['bed'][1]}個存在します。";
// echo "{$products['light']}は{$products['light'][0]}円で{$products['light'][1]}個存在します。";



/**
 * 問２：商品購入
 *
 * $cartの品物を買いたいと想定して、
 * $productsの在庫数が足りている場合、足りていない場合で
 * 以下のように画面に表示してください。
 *
 * 商品購入
 * tableを1個ください。
 * はい。ありがとうございます。 <- 足りている場合
 * bedを2個ください。
 * すいません。bedは1個しかありません。 <- 足りていない場合
 */

// 購入希望 商品数
$cart = [
    'table' => 3,
    'bed' => 1,
];
echo '<div>商品購入</div>';
foreach ($cart as $key => $value) {
    $cart_name = $key;
    $cart_count = $value;

    echo "<div>{$cart_name}を{$cart_count}個ください。</div>";
    // [$cart_name]をキーとして$productsから値を引っ張ってくる。
    $p_count = $products[$cart_name][1];

    if ($p_count >= $cart_count) {
    echo 'はい。ありがとうございます。';
} else {
    echo "すいません。{$cart_name}は{$p_count}個しかありません。";
}
}
