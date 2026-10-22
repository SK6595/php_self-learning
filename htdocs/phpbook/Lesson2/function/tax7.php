<?php
# 返り値の型宣言は パラメータの外側に「:」に続けて記述する
# このように書いておくと 関数定義の一行目を見ただけでその関数にどんな型を渡して どんな型が返ってくるかが分かり 可読性も上がる
function tax(int $price): float {
  return $price * 1.1;
}

$sample_price = tax('文字列');
echo '消費税込みの値段：' . $sample_price . '円';
