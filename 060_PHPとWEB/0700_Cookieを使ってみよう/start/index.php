<?php
/**
 * 参考URL：https://www.php.net/manual/ja/function.setcookie.php
 *
 * Cookieを使用していく。
 * setcookie必ず使用する
 */

setcookie('VISIT_COUNT',1,[
    //cookieの有効期限は expiresで設定を行う
    'expires' => time() + 60 * 60 * 24 * 30
]);

var_dump($_COOKIE['VISIT_COUNT']);
?>