<?php
/* PHPの場合は、[.]を使用して文字列を結合する
''と""の大きな違いは、ダブルクオーテーション内だと変数は[.]は必要ない。
文字列の中で変数を使用する場合は{}を使用する
ダブルクオーテーション内ではエスケープシーケンス(\nなど)が使用できる。
https://www.php.net/manual/ja/language.types.string.php#language.types.string.syntax.double

*/
$name = 'Bob';
echo "hello, $name\n\n\n";
?>
